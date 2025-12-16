<?php

namespace Database\Factories;

use App\Models\UserHasTeam;
use App\Models\User;
use App\Models\Team;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserHasTeamFactory extends Factory
{
    protected $model = UserHasTeam::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory()->state([
                'role' => 'operational'
            ]),
            'team_id' => Team::factory(),
            'feedback_id' => Feedback::factory(),
        ];
    }
}
