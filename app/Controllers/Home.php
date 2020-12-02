<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $query = $this->db->query('SELECT lomba.nama_lomba, lomba.deskripsi_lomba, lomba.poster_lomba, lomba.updated_at, user.nama FROM lomba INNER JOIN user ON lomba.id_user = user.id')->getResultArray();

        $data = [
            'title' => 'Home | Kontez',
            'event' => $query
        ];

        return view('index', $data);
    }

    public function login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $is_active = $this->request->getVar('is_active');

        $this->db->query('UPDATE user SET is_active = "' . $is_active . '" WHERE email = "' . $email . '"');

        $user = $this->db->query('SELECT * FROM user WHERE email = "' . $email . '"')->getRowArray();
        $query = $this->db->query('SELECT lomba.nama_lomba, lomba.deskripsi_lomba, lomba.poster_lomba, lomba.updated_at, user.nama FROM lomba INNER JOIN user ON lomba.id_user = user.id')->getResultArray();

        $event = [
            'user' => $user,
            'event' => $query
        ];

        if ($user) {
            if ($user['password'] == $password) {
                return view('index', $event);
            }
        }


        $data = [
            'title' => 'Login | Kontez'
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

    public function profile($id)
    {
        $user = $this->db->query('SELECT * FROM user where id = ' . $id)->getRowArray();

        $data = [
            'title' => 'Profile | Kontez',
            'user' => $user
        ];

        return view('user/profile', $data);
    }

    public function logout()
    {
        $email = $this->request->getVar('email');
        $is_active = $this->request->getVar('is_active');

        $this->db->query('UPDATE user SET is_active = "' . $is_active . '" WHERE email = "' . $email . '"');

        return redirect()->to('/');
    }

    //--------------------------------------------------------------------

}
