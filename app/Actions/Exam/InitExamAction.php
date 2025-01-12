<?php

namespace App\Actions\Exam;

use App\Models\Exam;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class InitExamAction
{
    public ?Exam $exam;
    public User $user;
    public ?Exam $activeExam;

    public function __construct(){
        $this->user = Auth::user();
        $this->activeExam = $this->user->activeExam();
        $this->exam = $this->getExam();
    }

    public function handle(): array
    {
        $questions = Question::all();
        $currentQuestion = null;
        if($this->activeExam){
            $activeExamAnsweredQuestion = $this->activeExam->answers()
            ->whereNotNull($this->user->gender . '_answer')
            ->latest()
            ->first();
            if($activeExamAnsweredQuestion){
                $questions = $questions->where('id', '>', $activeExamAnsweredQuestion->question_id);
                $currentQuestion = $activeExamAnsweredQuestion->question_id + 1;
            }
        }

        if(request()->token){
            $this->abortInvalidUser();

            $this->updateExamUserId();

            $this->updateGender();
        }
        session(['currentQuestion' => $currentQuestion ?? 1]);
        return [
            'questions' => $questions,
            'exam' => $this->exam
        ];
    }


    public function doesntHaveGender(): bool{
        if(!request('token') && !auth()->user()->gender){
            return true;
        }
        return false;
    }


    public function canShowExam(): bool
    {
        if(!$this->exam){
            return false;
        }
        return ($this->user->id == $this->exam->male_user_id && $this->exam->male_finished) || ($this->user->id == $this->exam->female_user_id && $this->exam->female_finished);
    }


    private function abortInvalidUser(): void
    {
        if(
            $this->exam && $this->exam->male_user_id && $this->exam->female_user_id && !in_array($this->user->id, [$this->exam->male_user_id, $this->exam->female_user_id])
        )
        {
            abort(403);
        }
    }

    private function updateGender(): void
    {
        if($this->user->gender){
            return;
        }
        $gender = $this->exam->male_user_id ? 'female' : 'male';
        $this->user->update([
            'gender' => $gender
        ]);
    }

    private function updateExamUserId(): void
    {   
        if($this->user->gender){
            $column = $this->user->gender . '_user_id';
        }else{
            $column = $this->exam->male_user_id ? 'female_user_id' : 'male_user_id';
        }
        $this->exam->update([
            $column => $this->user->id
        ]);
    }

    private function getExam(): ?Exam{
        if(!$this->user->gender && !request()->token){
            return null;
        }
        if(request()->token){
            return Exam::where('token', request()->token)->firstOrFail();
        }
        if($this->activeExam){
            return $this->activeExam;
        }
        return Exam::firstOrCreate([
            $this->user->gender . '_user_id' => $this->user->id,
            'token' => Str::random(60)
        ]);
    }
}