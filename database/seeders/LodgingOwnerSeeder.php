<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LodgingOwner;

class LodgingOwnerSeeder extends Seeder
{
    public function run(): void
    {
        LodgingOwner::insert([
            ['name' => 'João Silva', 'email' => 'joao@example.com', 'phone' => '999999999'],
            ['name' => 'Maria Costa', 'email' => 'maria@example.com', 'phone' => '888888888'],
        ]);
    }
}
