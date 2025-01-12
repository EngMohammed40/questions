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
        $request->validate([
            'gender' => ['required', 'string','in:male,female'],
        ]);
        /**
         * @var User $user
         */
        $user = Auth::user();
        $user->update(['gender' => $request->gender]);
        return redirect()->back();
    }
}
