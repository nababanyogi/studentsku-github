<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

//use App\User; //untuk model

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $nama = 'Sandro Y M Nababan';
        return view('about', ['nama' => $nama]);
    }
}