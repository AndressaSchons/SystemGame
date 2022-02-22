<?php

namespace Database\Seeders;

use App\Models\Extension;
use App\Models\Game;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
//         Game::factory(10)->create();
//         Extension::factory(10)->create();

    }
}
