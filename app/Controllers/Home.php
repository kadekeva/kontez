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

    //--------------------------------------------------------------------

}
