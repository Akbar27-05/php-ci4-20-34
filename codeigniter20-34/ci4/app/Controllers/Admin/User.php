<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        echo 'user';
    }

    public function create()
    {
        $session = \Config\Services::session();

        $tbluser = [
            'user'  => 'koki',
            'email'     => 'koki@gmail.com',
            'level' => 'koki'
        ];
        
        $session->set($tbluser);
    }

    public function read()
    {
        $session = \Config\Services::session();

        echo $session->get('user');
    }

    public function delete()
    {
        $session = \Config\Services::session();

        $session->remove('user');
    }
}


