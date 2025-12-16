<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition(): array
    {
        return [
            'name' => 'Team ' . $this->faker->word(),
            'coordinator_id' => User::factory()->state([
                'role' => 'coordinator'
            ])
        ];
    }
}
