<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $faker = \Faker\Factory::create();

        echo $faker->name();
        echo $faker->address();

        echo $faker->email();

    }
}
