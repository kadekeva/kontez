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
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $this->db->query('SELECT * FROM user WHERE email = "' . $email . '"')->getRowArray();

        if ($user) {
            if ($user['password'] == $password) {
                return redirect()->to('/');
            }
        }

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

    public function daftar()
    {
        $data = [
            'title' => 'Pembayaran'
        ];

        return view('user/daftar', $data);
    }

    public function checkout()
    {
        $data = [
            'title' => 'Pembayaran'
        ];

        return view('user/checkout', $data);
    }

    //--------------------------------------------------------------------

}
