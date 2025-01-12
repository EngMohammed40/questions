<?php

use App\Models\Exam;
use App\Models\User;


test('Exam page cant be rendered from unauthenticated user', function () {
    $response = $this->get('/exam');

    $response->assertRedirect(route('login'));
});

test('User is redirected from exam page to dashboard if gender is not set', function () {
    $user = User::factory()->create([
        'gender' => null
    ]);
    $response = $this->actingAs($user)->get('/exam');
    $response->assertRedirect(route('dashboard'));
});

test('Exam page be rendered from authenticated user', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->get('/exam');
    $response->assertOk();

    $this->assertDatabaseHas('exams', [
        $user->gender . '_user_id' => $user->id,
        $user->gender . '_finished' => false,
    ]);
});

test('User can answer question', function () {
    $user = User::factory()->create();
    $exame = Exam::factory()->create([
        'male_user_id' => $user->id
    ]);
    $response = $this->actingAs($user)->post('/exam/save-answer', [
        'question_id' => 1,
        'answer' => 1,
    ]);
    $response->assertOk();
});
