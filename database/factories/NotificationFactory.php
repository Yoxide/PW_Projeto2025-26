<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    protected $model = Notification::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement([
                'task',
                'material',
                'feedback',
                'system'
            ]),
            'message' => $this->faker->sentence(8),
            'user_id' => User::factory()
        ];
    }
}
