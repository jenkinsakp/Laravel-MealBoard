<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\category;
use App\Models\comment;
use App\Models\food;
use App\Models\menu;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        if (! category::all()->count()) {
            category::factory()->count(2)->create();
            $this->dataWorkFlow();
        }

    }

    public function dataWorkFlow(): void
    {
        $user = User::factory()->count(2);

        $user->has(food::factory()->count(2)
        ->has(menu::factory()->count(2)
        ->has(comment::factory()->count(2)))
            ->for($user))->create();
    }
}
