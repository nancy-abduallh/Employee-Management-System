<?php

namespace Database\Seeders;

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
        // Call specific seeders
        $this->call([
            UsersTableSeeder::class,
            AdminsTableSeeder::class,
        ]);
    }
}
