<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'email' => 'shitikhotimah5@gmail.com',
            'password' => '123456789',

        ];
        return view('user',$data);
    }
}
