<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Exam\ExamController;
use App\Http\Controllers\Exam\UserExamController;
use App\Http\Controllers\Gender\GenderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::post('update-gender', [GenderController::class, 'update'])->name('gender.update');

    Route::get('exam',[ExamController::class, 'index'])->name('exam.index');
    Route::post('exam/save-answer',[ExamController::class, 'saveUserAnswer'])->name('exam.save-answer');

    Route::get('my-exams', [UserExamController::class, 'index'])->name('exam.user.index');
    Route::get('my-exams/{id}', [UserExamController::class, 'show'])->name('exam.user.show');
});

require __DIR__.'/auth.php';
