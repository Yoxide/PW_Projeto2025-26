<?php

namespace Database\Factories;

use App\Models\UserHasSection;
use App\Models\User;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserHasSectionFactory extends Factory
{
    protected $model = UserHasSection::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'section_id' => Section::factory()
        ];
    }
}
