<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index() // showing everything that we have in database
    {

        $messages = DB::select('select * from messages ORDER BY id desc');


    //inside our view form/ we would like to CREATE variable named 'messages',
    //and value $messages from database on line 13
        return view('form/index')->with('messages', $messages);
    }

    public function create() // for showing the form ( and fill in)
    {
        return view('form/create');
    }

    public function store(Request $request) // storing date from form into database
    {
       $name = $request->input('name'); // gives you only one input, DONT FORGET PARAMETER
       $message = $request->input('message'); // gives you only one input, DONT FORGET PARAMETER

       DB::insert('insert into messages (name,message) values (?, ?)', array($name, $message));

    return redirect(action('FormController@index'));
    }
}
