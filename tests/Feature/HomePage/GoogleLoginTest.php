<?php

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

test('Google login screen can be rendered', function () {
    $this->get(route('auth.google'))
    ->assertRedirectContains('https://accounts.google.com/o/oauth2/auth');
});


test('Google callback', function () {

    $abstractUser = Mockery::mock(\Laravel\Socialite\Contracts\User::class);

    // Set up the mock to return properties when accessed
    $abstractUser->shouldReceive('offsetGet')->with('id')->andReturn('123456789');
    $abstractUser->shouldReceive('offsetGet')->with('email')->andReturn('test@example.com');
    $abstractUser->shouldReceive('offsetGet')->with('name')->andReturn('John Doe');
    $abstractUser->shouldReceive('offsetGet')->with('avatar')->andReturn('avatar_url');

    // Allow direct property access
    $abstractUser->id = '123456789';
    $abstractUser->email = 'test@example.com';
    $abstractUser->name = 'John Doe';
    // Mock Socialite Provider
    Socialite::shouldReceive('driver')
        ->with('google')
        ->andReturn(Mockery::mock(\Laravel\Socialite\Two\GoogleProvider::class, function ($mock) use ($abstractUser) {
            $mock->shouldReceive('stateless')->andReturnSelf();
            $mock->shouldReceive('user')->andReturn($abstractUser);
        }));
    
    // Test that ensures the callback is handled correctly
    $this->get('/auth/google/callback')
        ->assertRedirect(route('dashboard'));
    
    // Verify the user is in the database
    $this->assertDatabaseHas('users', [
        'email' => 'test@example.com',
        'google_id' => '123456789',
    ]);

    $this->actingAs(User::where('email', 'test@example.com')->first())
        ->get(route('dashboard'))
        ->assertOk();
});