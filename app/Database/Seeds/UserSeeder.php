<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\User;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = new User;
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++) { 
            $user->save(
                [
                    'name'  => $faker->name,
                    'email' => $faker->email,
                    'password' => $faker->password,
                    'phone' => $faker->phoneNumber,
                    'address' => $faker->address,
                    'created_at' => Time::createFromTimestamp($faker->unixTime),
                    'updated_at' => Time::now()
                ]
            );
        }
    }
}
