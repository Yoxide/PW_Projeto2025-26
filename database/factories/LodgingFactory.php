<?php

namespace Database\Factories;

use App\Models\Lodging;
use App\Models\LodgingOwner;
use Illuminate\Database\Eloquent\Factories\Factory;

class LodgingFactory extends Factory
{
    protected $model = Lodging::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company . ' Lodging',
            'address' => $this->faker->address,
            'capacity' => $this->faker->numberBetween(1, 10),
            'type' => $this->faker->randomElement(['appartment', 'house', 'room']),
            'description' => $this->faker->sentence,
            'state' => $this->faker->randomElement(['active', 'maintenance', 'inactive']),
            'lodging_owner_id' => LodgingOwner::factory()
        ];
    }
}

