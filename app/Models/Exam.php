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
        $gender = auth()->user()->gender;
        $otherGender = $gender == 'male' ? 'female' : 'male';
        $genderAnswers = UserAnswer::where('exam_id', $this->id)
                            ->whereNotNull($gender . '_answer')
                            ->where('important', true)
                            ->get();

        $otherGenderAnsers = UserAnswer::where('exam_id', $this->id)
                                        ->whereNotNull($otherGender . '_answer')
                                        ->get();


        $score = 0;
        if($genderAnswers->count() == 0 ||  $otherGenderAnsers->count() == 0){
            return [
                'total' => 0,
                'score' => 0
            ];
        }
        foreach($genderAnswers as $key => $genderAnswer){
            $answerSequence = $genderAnswer->{$gender . '_answer'} . $otherGenderAnsers[$key]->{$otherGender . '_answer'};
            if(!in_array($answerSequence,$genderAnswer->question->wrong_answers)){
                $score++;
            }
        }
        return [
            'total' => $genderAnswers->count(),
            'score' => $score
        ];
    }

    public function answers(): HasMany
    {
        return $this->hasMany(UserAnswer::class);
    }
}
