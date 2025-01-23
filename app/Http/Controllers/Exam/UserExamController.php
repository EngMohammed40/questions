<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserExamController extends Controller
{
    public function index()
    {
        if(!auth()->user()->age || !auth()->user()->gender){
            return redirect()->route('dashboard');
        }
        $exams = $this->getExams()->get();
        return view('exam.user.index', compact('exams'));
    }

    public function show($id)
    {
        $exam = $this->getExams()->findOrFail($id);
        $score = $exam->calculateScore();
        $maleImportantScore = $exam->importantScore('male');
        $femaleImportantScore = $exam->importantScore('female');
        return view('exam.user.show', [
            'exam' => $exam,
            'score' => $score,
            'maleImportantScore' => $maleImportantScore,
            'femaleImportantScore' => $femaleImportantScore
        ]);
    }

    private function getExams()
    {
        /**
         * @var User $user
         */
        $user = Auth::user();
        return $user->exams();
    }
}
