<?php

namespace Database\Seeders;

use App\Models\Scheduling;
use Illuminate\Database\Seeder;

class SchedulingSeeder extends Seeder
{
    public function run(): void
    {
        Scheduling::factory()->count(15)->create();
    }
}
