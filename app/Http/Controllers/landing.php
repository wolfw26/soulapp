<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landing extends Controller
{
    public function home()
    {
        return view('landing', [
            "tilte" => "Selamat Datang"
        ]);
    }
}
