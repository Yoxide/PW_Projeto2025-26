<?php

namespace Database\Seeders;

use App\Models\UserHasSection;
use Illuminate\Database\Seeder;

class UserHasSectionSeeder extends Seeder
{
    public function run(): void
    {
        UserHasSection::factory()->count(10)->create();
    }
}
