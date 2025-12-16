<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CompanySeeder::class,
            SectionSeeder::class,
            MaterialSeeder::class,
            FeedbackSeeder::class,
            LodgingOwnerSeeder::class,
            UserSeeder::class,
            UserHasSectionSeeder::class,
            TeamSeeder::class,
            UserHasTeamSeeder::class,
            AssignmentSeeder::class,
            LodgingSeeder::class,
            UserHasLodgingSeeder::class,
            SchedulingSeeder::class,
            ChecklistSeeder::class,
            UploadSeeder::class,
            MaterialRequestSeeder::class,
            NotificationSeeder::class,
        ]);
    }
}
