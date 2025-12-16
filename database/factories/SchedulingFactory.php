<?php

namespace Database\Factories;

use App\Models\Lodging;
use App\Models\Scheduling;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchedulingFactory extends Factory
{
    protected $model = Scheduling::class;

    public function definition(): array
    {
        return [
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'start_date' => $this->faker->date(),
            'estimated_days' => $this->faker->numberBetween(1, 7),
            'state' => $this->faker->randomElement([
                'scheduled',
                'in progress',
                'finished',
                'cancelled'
            ]),
            'notes' => $this->faker->sentence(),
            'lodging_id' => Lodging::factory()
        ];
    }
}
