<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Siti Khotimah',
            'kelas' => '4I',
            'nim'   => '19041045'
        ];
        return view('siswa',$data);
    }
}
