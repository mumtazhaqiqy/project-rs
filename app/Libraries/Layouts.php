<?php
namespace App\Libraries;

class Layouts {
    public function getNavbar(array $params = []){

        $menu = $params['menu-item'];
        
        return view('layouts/navigation', ['menus' => $menu]);
    }
}