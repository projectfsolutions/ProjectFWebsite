<?php

use Illuminate\Database\Seeder;
use App\tblAbout;

class tblaboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tblAbout::create(
            [
                "About" => "Established to provide affordable system software development for both small and large scale organizations. We have worked in different business workflow and produce customized IT solutions that gives us a privilege to learn and grow to become a better and efficient provider.",
                "Vision" => "To provide the most advanced technology of providing software solutions in the industry.",
                "Mission" => "To know the client needs and provide the most effective and affordable solutions to improve their business process better, faster and easy to manage and monitor."
            ]
        );
    }
}
