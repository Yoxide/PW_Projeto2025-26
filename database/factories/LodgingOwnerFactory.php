<?php

namespace Database\Factories;

use App\Models\LodgingOwner;
use Illuminate\Database\Eloquent\Factories\Factory;

class LodgingOwnerFactory extends Factory
{
    protected $model = LodgingOwner::class;

    public function definition(): array
    {
        return [
            'lodging_owner_name' => $this->faker->name,
            'contact' => $this->faker->phoneNumber,
            'address' => $this->faker->address
        ];
    }
}

