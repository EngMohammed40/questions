<?php

namespace App\Http\Controllers\Gender;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GenderController extends Controller
{
    public function update(Request $request)
    {
        $data = $request->validate([
            'gender' => ['nullable', 'string','in:male,female'],
            'age' => ['required', 'string','gt:0'],
            'weight' => ['required', 'string','gt:0'],
            'height' => ['required', 'string','gt:0'],
            'skin_color' => ['required', 'string'],
        ]);
        /**
         * @var User $user
         */
        $user = Auth::user();
        $user->update($data);
        if($request->token){
            return redirect()->route('exam.index', ['token' => $request->token]);
        }
        return redirect()->back();
    }
}
