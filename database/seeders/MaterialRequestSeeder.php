<?php

namespace Database\Seeders;

use App\Models\MaterialRequest;
use Illuminate\Database\Seeder;

class MaterialRequestSeeder extends Seeder
{
    public function run(): void
    {
        MaterialRequest::factory()->count(12)->create();
    }
}
