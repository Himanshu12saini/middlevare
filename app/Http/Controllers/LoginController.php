<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    function index(Request $request){
        return view('auth.login');
    }
    function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            // $request->session()->regeneraputte();
            return redirect()->route('dashboard')
            ->withSuccess('You have successfully logged in!');
        }
        return back()->withErrors([
            'email' => 'Your provided credentials do not match our records.',
        ])->onlyInput('email');
        // return view('login');
       }
}
