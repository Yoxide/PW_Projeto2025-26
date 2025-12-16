<?php

namespace Database\Seeders;

use App\Models\UserHasLodging;
use Illuminate\Database\Seeder;

class UserHasLodgingSeeder extends Seeder
{
    public function run(): void
    {
        UserHasLodging::factory()->count(10)->create();
    }
}
