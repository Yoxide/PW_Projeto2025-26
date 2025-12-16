<?php

namespace Database\Factories;

use App\Models\UserHasLodging;
use App\Models\User;
use App\Models\Lodging;
use App\Models\LodgingOwner;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserHasLodgingFactory extends Factory
{
    protected $model = UserHasLodging::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory()->state([
                'role' => 'client'
            ]),
            'lodging_id' => Lodging::factory(),
            'lodging_owner_id' => LodgingOwner::factory()
        ];
    }
}
