<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    public function index(){
        $menus = [
            ['label' =>  'Home', 'url' => ''],
            ['label' =>  'About', 'url' => ''],
            ['label' =>  'Dropdown', 'url' => '', 'children' => [
                ['label' =>  'Child1', 'url' => '', 'class' => 'fas fa-code'],
                ['label' =>  'Child2', 'url' => '', 'class' => 'fas fa-circle'],
                ['label' =>  'Child3', 'url' => '', 'class' => 'fas fa-circle'],
                ]
            ],            
        ];

        $data = ['menus' => $menus];

        return view('layouts/main', $data);
    }
}
