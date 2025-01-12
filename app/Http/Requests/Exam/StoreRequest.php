<?php

namespace App\Http\Requests\Exam;

use App\Models\Exam;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'answer' => 'required|boolean',
            'question_id' => 'required|exists:questions,id',
            'exam_id' => 'required|exists:exams,id',
            'is_important' => 'required',
        ];
    }
}
