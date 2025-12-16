<?php

namespace Database\Seeders;

use App\Models\UserHasTeam;
use Illuminate\Database\Seeder;

class UserHasTeamSeeder extends Seeder
{
    public function run(): void
    {
        UserHasTeam::factory()->count(15)->create();
    }
}
