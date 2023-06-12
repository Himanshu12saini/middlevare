<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashBoardController extends Controller
{
    
   function dashboard(Request $request){
    $data =  Auth::user();

        return view('dashboard',compact('data'));

   }

}
