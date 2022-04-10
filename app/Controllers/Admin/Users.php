<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User;

class Users extends BaseController
{
    public function index()
    {
        $user = new User();

        $data = $user->findAll();

        $query = $this->request->getPostGet('ini');

        print_r($query );
    }
}
