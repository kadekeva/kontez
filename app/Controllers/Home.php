<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Kontez'
        ];

        return view('index', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('auth/login', $data);
    }

    public function regis()
    {
        $data = [
            'title' => 'Registrasi'
        ];

        return view('auth/regis', $data);
    }

    //--------------------------------------------------------------------

}
