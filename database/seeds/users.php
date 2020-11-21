<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        users::create(
            [
                "name" => "Fernan",
                "email" => "fernan.cabrera.email@gmail.com",
                "password" => "pr0J3ctF"
            ]
        );
    }
}
