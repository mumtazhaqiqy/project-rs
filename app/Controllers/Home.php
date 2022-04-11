<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    public function index(){
        $menus = [
            ['menu' =>  'Home', 'url' => ''],
            ['menu' =>  'About', 'url' => ''],
            ['menu' =>  'Dropdown', 'url' => '', 'children' => [
                ['menu' =>  'Child1', 'url' => '', 'class' => 'fas fa-code'],
                ['menu' =>  'Child2', 'url' => '', 'class' => 'fas fa-circle'],
                ['menu' =>  'Child3', 'url' => '', 'class' => 'fas fa-circle'],
                ]
            ],            
        ];

        $data = ['menus' => $menus];

        return view('layouts/main', $data);
    }
}
