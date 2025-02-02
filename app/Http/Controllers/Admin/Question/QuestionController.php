<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        $questions = Question::paginate(10);
        return view('admin.questions.index', compact('questions'));
    }

    public function create()
    {
        return view('admin.questions.create',[
            'answers' => $this->getAnswers()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'male_question' => 'required',
            'female_question' => 'required',
            'correct_answers' => 'required|array',
        ]);
        $wrongAnswers = array_diff($this->getAnswers(),$request->correct_answers);
        Question::create([
            'male_question' => $request->male_question,
            'female_question' => $request->female_question,
            'wrong_answers' => array_values($wrongAnswers)
        ]);
        return redirect()->route('admin.questions.index');
    }

    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('admin.questions.edit',[
            'question' => $question,
            'answers' => $this->getAnswers()
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'male_question' => 'required',
            'female_question' => 'required',
            'correct_answers' => 'required|array',
        ]);
        $wrongAnswers = array_diff($this->getAnswers(),$request->correct_answers);
        $question = Question::findOrFail($id);
        $question->update([
            'male_question' => $request->male_question,
            'female_question' => $request->female_question,
            'wrong_answers' => array_values($wrongAnswers)
        ]);
        return redirect()->route('admin.questions.index');
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return redirect()->route('admin.questions.index');
    }


    private function getAnswers(): array{
        return [
            'أوافق / أوافق' => '11',
            'أوافق / لا أوافق' => '01',
            'لا أوافق / أوافق' => '10',
            'لا أوافق / لا أوافق' => '00',
        ];
    }
}
