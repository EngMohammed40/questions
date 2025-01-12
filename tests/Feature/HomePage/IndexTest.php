<?php

use App\Models\User;

test('Home page loaded successfully if user is not authenticated', function () {
    $response = $this->get('/');

    $response->assertStatus(200)
    ->assertSee('تسجيل الدخول بواسطة جوجل');
});


test('user is redirected from home page to dashboard', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->get('/');
    $response->assertRedirect(route('dashboard'));
});