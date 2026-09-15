<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'Jaynudin',
            'npm' => '2417052008',
            'kelas' => 'SI'
        ];

        return view('profile', $data);
    }
}