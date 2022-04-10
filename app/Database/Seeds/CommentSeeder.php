<?php

namespace App\Database\Seeds;

use App\Models\Comment;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $comment = new Comment;
        $faker = \Faker\Factory::create();
        
        for($i=0; $i < 40; $i++){
            $comment->save([
                'userId' => rand(1,20),
                'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'update_at' => Time::now()
            ]);
        }
    }
}
