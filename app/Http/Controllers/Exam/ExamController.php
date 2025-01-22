<?php

namespace App\Http\Controllers\Exam;

use App\Actions\Exam\InitExamAction;
use App\Actions\Exam\SaveUserAnswer;
use App\Http\Controllers\Controller;
use App\Http\Requests\Exam\StoreRequest;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function index(InitExamAction $action){
        if(!request('token') && !auth()->user()->gender){
            return to_route('dashboard');
        }
        if($action->canShowExam())
        {
            return redirect()->route('exam.user.show', $action->exam);
        }

        $data = $action->handle();

        if(!auth()->user()->age){
            return redirect()->route('dashboard',[
                'token' => $data['exam']->token
            ]);
        }
      
        return view('exam.index',[
            'question' => $data['questions']->first(),
            'exam' => $data['exam'],
            'questionsCount' => Question::count()
        ]);
    }

    public function saveUserAnswer(StoreRequest $request, SaveUserAnswer $action){
        $user = Auth::user();
        if(!$user->gender) {
            return redirect()->route('dashboard');
        }
        $data = $action->handle($request->validated());
        return [
            'html' => view('exam.question',$data)->render(),
            'lastQuestion' => $data['lastQuestion'],
            'examId' => request('exam_id')
        ];
    }
}
