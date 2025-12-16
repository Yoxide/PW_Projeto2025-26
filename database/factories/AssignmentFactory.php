<?php

namespace Database\Factories;

use App\Models\Assignment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssignmentFactory extends Factory
{
    protected $model = Assignment::class;

    public function definition(): array
    {
        return [
            'role' => $this->faker->randomElement([
                'cleaner',
                'supervisor',
                'support'
            ]),
            'state' => $this->faker->randomElement([
                'accepted',
                'pending',
                'rejected'
            ]),
            'work_hours' => $this->faker->randomFloat(1, 2, 8),
            'user_id' => User::factory()->state([
                'role' => 'operational'
            ])
        ];
    }
}
