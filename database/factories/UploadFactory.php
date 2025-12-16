<?php

namespace Database\Factories;

use App\Models\Upload;
use App\Models\User;
use App\Models\Scheduling;
use Illuminate\Database\Eloquent\Factories\Factory;

class UploadFactory extends Factory
{
    protected $model = Upload::class;

    public function definition(): array
    {
        return [
            'sent_by' => User::factory(),
            'type' => $this->faker->randomElement(['image', 'file']),
            'url' => $this->faker->url,
            'description' => $this->faker->sentence,
            'user_id' => User::factory(),
            'scheduling_id' => Scheduling::factory(),
            'scheduling_user' => User::factory()
        ];
    }
}
