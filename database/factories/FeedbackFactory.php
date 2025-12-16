<?php

namespace Database\Factories;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    protected $model = Feedback::class;

    public function definition(): array
    {
        return [
            'review' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->sentence,
            'comment_date' => $this->faker->date()
        ];
    }
}
