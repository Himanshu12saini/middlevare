<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class RegisterController extends Controller
{
   function index(Request $request){
    return view('auth.register');
   }


   function store(Request $request){
       $input = $request->all();
        $data = [
            "name" => $input['name'],
            "email" => $input['email'],
            "password" => Hash::make($input['password']),
        ];
      DB::table('users')->insert(
        $data
   ); $credentials = $request->only('email','password');
//    if(Auth::attempt($credentials)){
    // $request->session()->regeneraputte();
    return redirect()->route('dashboard')
    ->withSuccess('You have successfully logged in!');
}
    //    print_r($input['name']);
       
   }
// }
