<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    function loadview(){
        return view('users',['name' =>['amit','himanshu','solah']]);
    }
}
