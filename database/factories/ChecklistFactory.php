<?php


namespace Database\Factories;

use App\Models\Checklist;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChecklistFactory extends Factory
{
    protected $model = Checklist::class;

    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence,
            'state' => $this->faker->randomElement([
                'pending',
                'finished',
                'in observation'
            ]),
            'finished_by' => User::factory(),
            'finished_at' => $this->faker->date()
        ];
    }
}
