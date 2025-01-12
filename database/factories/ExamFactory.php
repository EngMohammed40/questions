<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exam>
 */
class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'male_user_id' => User::factory()->create()->id,
            'female_user_id' => User::factory()->create()->id,
            'token' => null,
            'male_finished' => false,
            'female_finished' => false,
        ];
    }
}
