<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        // $faker = \Faker\Factory::create();

        // echo $faker->name();
        // echo $faker->address();

        // echo $faker->email();

        $user = new User;
        // // $data = $user->paginate(5);
        // $data = $user->where('id',2)
        //         ->findAll();
        // echo '<pre>';
        // print_r($data);

        $columns = ['name', 'email', 'address'];

        foreach ($columns as $key => $value) {
            # code...
            echo '<p>'.$value.'</p>';
        }

    }

    public function table(?array $data, ?array $columns)
    {
        

    }
}
