<?php

namespace Database\Seeders;

use App\Models\Laptop;
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
        // \App\Models\User::factory(10)->create();
        Laptop::factory(5)->create();
    }
}
