<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'nif' => $this->faker->optional()->numerify('#########'),
            'address' => $this->faker->optional()->address,
            'email' => $this->faker->optional()->companyEmail,
            'phone' => $this->faker->optional()->phoneNumber,
        ];
    }
}
