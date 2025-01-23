<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Dashbaord\DashboardController;
use App\Http\Controllers\Admin\Question\QuestionController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Exam\ExamController;
use App\Http\Controllers\Exam\UserExamController;
use App\Http\Controllers\Gender\GenderController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthUser;
use Illuminate\Support\Facades\Route;

Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});



Route::get('/',[HomeController::class, 'index']);


Route::middleware('auth')->group(function () {

    Route::middleware(AuthUser::class)->group(function(){

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::post('update-gender', [GenderController::class, 'update'])->name('gender.update');

        Route::get('exam',[ExamController::class, 'index'])->name('exam.index');
        Route::post('exam/save-answer',[ExamController::class, 'saveUserAnswer'])->name('exam.save-answer');

        Route::get('my-exams', [UserExamController::class, 'index'])->name('exam.user.index');
        Route::get('my-exams/{id}', [UserExamController::class, 'show'])->name('exam.user.show');
    });
});


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('login',[LoginController::class, 'showLoginForm'])->name('login-form');
    Route::post('login',[LoginController::class, 'login'])->name('login');
    Route::post('logout',[LoginController::class, 'logout'])->name('logout');

    Route::middleware(AuthAdmin::class)->group(function(){
        Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');
        Route::resource('questions', QuestionController::class);
    });
 
});

require __DIR__.'/auth.php';
