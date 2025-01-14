<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exam extends Model
{
    public function calculateScore(){
        if(!$this->male_finished || !$this->female_finished){
            return 0;
        }

        $maleAnswers = UserAnswer::where('exam_id', $this->id)->whereNotNull('male_answer')->get();
        $femaleAnswers = UserAnswer::where('exam_id', $this->id)->whereNotNull('female_answer')->get();

        if($maleAnswers->count() != $femaleAnswers->count()){
            return 0;
        }
        $score = 0;
        foreach($maleAnswers as $key => $maleAnswer){
            $answerSequence = $maleAnswer->male_answer . $femaleAnswers[$key]->female_answer;
            if(!in_array($answerSequence,$maleAnswer->question->wrong_answers)){
                $score++;
            }
        }
        return round($score / $maleAnswers->count() * 100);
    }

    public function importantScore(){

        if(!$this->male_finished || !$this->female_finished){
            return [
                'total' => 0,
                'score' => 0
            ];
        }

        $maleImportantAnswers = UserAnswer::where('exam_id', $this->id)
                        ->whereNotNull('male_answer')
                        ->where('important', true)
                        ->get();
        $maleAllAnswers = UserAnswer::where('exam_id', $this->id)
        ->whereNotNull('male_answer')
        ->get();

        $femaleImportantAnswers = UserAnswer::where('exam_id', $this->id)
                                    ->whereNotNull('female_answer')
                                    ->where('important', true)
                                    ->get();

        $femaleAllAnswers = UserAnswer::where('exam_id', $this->id)
        ->whereNotNull('female_answer')
        ->get();

        $score = 0;
        foreach($maleImportantAnswers as $maleAnswer){
            $answerSequence = $maleAnswer->male_answer . $femaleAllAnswers->where('question_id', $maleAnswer->question_id)->first()->female_answer;
            if(in_array($answerSequence,$maleAnswer->question->wrong_answers)){
                $score++;
            }
        }

        foreach($femaleImportantAnswers as $femaleAnswer){
            $answerSequence = $maleAllAnswers->where('question_id', $femaleAnswer->question_id)->first()->male_answer . $femaleAnswer->female_answer;
            if(in_array($answerSequence,$femaleAnswer->question->wrong_answers)){
                $score++;
            }
        }

        return [
            'total' => $maleImportantAnswers->count() + $femaleImportantAnswers->count(),
            'score' => $score
        ];
    }

    public function answers(): HasMany
    {
        return $this->hasMany(UserAnswer::class);
    }
}
