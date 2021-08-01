<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Siti Khotimah',
            'alamat' => 'Debong Tengah',
            'nim'   => '19041045'
        ];
        return view('home',$data);
    }

    public function about($id)
    {
        return 'Ini Halaman About <br>'. $id;
    }
}
