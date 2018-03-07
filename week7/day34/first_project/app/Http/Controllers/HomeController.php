<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       // return '<h1>Welcome to the home</h1>';
        //return action ('ContactController@index');
        return view('home');
    }
}
