<?php 

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Jasa Pembuatan Website dan Aplikasi Terjangkau'
        ];
        return view('home', $data);
    }
}