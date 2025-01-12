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
        $exams = $this->getExams()->get();
        return view('exam.user.index', compact('exams'));
    }

    public function show($id)
    {
        $exam = $this->getExams()->findOrFail($id);
        $score = $exam->calculateScore();
        $importantScore = $exam->importantScore();
        return view('exam.user.show', [
            'exam' => $exam,
            'score' => $score,
            'importantScore' => $importantScore
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
