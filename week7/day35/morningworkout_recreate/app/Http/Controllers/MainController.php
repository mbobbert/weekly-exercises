<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function album()
    {
        return view('album');
    }

    public function home()
    {
        return view('home');
    }

    public function pricing()
    {
        return view('pricing');
    }
}
