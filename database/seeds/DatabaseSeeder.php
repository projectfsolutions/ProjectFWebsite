<?php

use Illuminate\Database\Seeder;
use App\tblAbout;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(tblaboutSeeder::class);
    }
}
