<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (session('email')) {
            $user = $this->db->query('SELECT * FROM user where email = "' . session('email') . '"')->getRowArray();
        }

        $query = $this->db->query('SELECT lomba.nama_lomba, lomba.deskripsi_lomba, lomba.poster_lomba, lomba.updated_at, user.nama FROM lomba INNER JOIN user ON lomba.id_user = user.id')->getResultArray();

        $data = [
            'title' => 'Home | Kontez',
            'event' => $query,
            'user' => $user
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
                $data = [
                    'email' => $user['email']
                ];

                $this->session->set($data);

                return redirect()->to('/');
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

    public function profile()
    {
        $user = $this->db->query('SELECT * FROM user where email = "' . session('email') . '"')->getRowArray();

        if ($user) {
            $data = [
                'title' => 'Profile | Kontez',
                'user' => $user
            ];

            return view('user/profile', $data);
        }

        return redirect()->to('/');
    }

    public function edit()
    {
        $nama = $this->request->getVar('nama');
        $umur = $this->request->getVar('umur');
        $pekerjaan = $this->request->getVar('pekerjaan');
        $telepon = $this->request->getVar('telepon');

        $this->db->query('UPDATE user SET nama = "' . $nama . '" WHERE email = "' . session('email') . '"');

        $user = $this->db->query('SELECT * FROM user where email = "' . session('email') . '"')->getRowArray();

        if ($user) {
            $data = [
                'title' => 'Profile | Kontez',
                'user' => $user
            ];

            return view('user/edit-profile', $data);
        }

        return redirect()->to('/');
    }

    public function logout()
    {
        $this->session->remove('email');

        return redirect()->to('/');
    }

    //--------------------------------------------------------------------

}
