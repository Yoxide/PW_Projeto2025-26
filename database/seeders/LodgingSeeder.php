<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lodging;

class LodgingSeeder extends Seeder
{
    public function run(): void
    {
        Lodging::insert([
            [
                'name' => 'Casa Azul',
                'address' => 'Rua Principal, 123',
                'capacity' => 5,
                'type' => 'house',
                'description' => 'Casa espaçosa com jardim.',
                'lodging_owner_id' => 1,
                'state' => 'active'
            ],
            [
                'name' => 'Apartamento Vista Mar',
                'address' => 'Av. Oceano, 50',
                'capacity' => 2,
                'type' => 'appartment',
                'description' => 'Ideal para férias.',
                'lodging_owner_id' => 2,
                'state' => 'active'
            ],
        ]);
    }
}
