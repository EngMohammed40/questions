<?php

namespace App\Actions\Exam;

use App\Models\Exam;
use App\Models\Question;
use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Support\Facades\Auth;


class SaveUserAnswer
{
    public function handle(array $data): array
    {
        /**
         * @var User $user
         */
        $user = Auth::user();

        $exam = Exam::find($data['exam_id']);
        $showUrl = $exam->male_user_id && $exam->female_user_id ? false : true;
        $this->saveAnswer($user, $data['question_id'],$data['answer'],$exam,$data['is_important']);

        $nextQuestion = Question::where('id', '>', $data['question_id'])->first();

        $questionsCount = Question::count();

        $this->handleQuestionsSession($user, $questionsCount, $exam);

        $lastQuestion = session('currentQuestion') == -1;

        return [
            'question' => $nextQuestion,
            'exam' => $exam,
            'questionsCount' => $questionsCount,
            'showUrl' => $showUrl,
            'lastQuestion' => $lastQuestion
        ];
    }


    private function saveAnswer(User $user, int $questionId, int $answer, Exam $exam, string $isImportant): void
    {
        $column = $user->gender . '_answer';
        $isImportant = $isImportant == "true" ? 1 : 0;
        UserAnswer::create([
            'exam_id' => $exam->id,
            'question_id' => $questionId,
            $column => $answer,
            'important' => $isImportant
        ]);
    }

    private function handleQuestionsSession(User $user, int $questionsCount, Exam $exam): void
    {
        session(['currentQuestion' => session('currentQuestion') + 1]);
        if(session('currentQuestion') > $questionsCount){
            session()->put('currentQuestion', -1);
            $exam->update([
                $user->gender . '_finished' => true,
            ]);
        }
    }
}