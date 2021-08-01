<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $data = [
            'guru' => 'Siti Khotimah',
            'kelas' => '4I',
            'pengajar'   => 'agama'
        ];
        return view('guru',$data);
    }
}
