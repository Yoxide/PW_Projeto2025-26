<?php

namespace Database\Factories;

use App\Models\MaterialRequest;
use App\Models\Material;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialRequestFactory extends Factory
{
    protected $model = MaterialRequest::class;

    public function definition(): array
    {
        return [
            'quantity' => $this->faker->numberBetween(1, 20),
            'state' => $this->faker->randomElement([
                'pending',
                'accepted',
                'rejected',
                'delivered',
                'sent back'
            ]),
            'material_id' => Material::factory(),
            'user_id' => User::factory()
        ];
    }
}
