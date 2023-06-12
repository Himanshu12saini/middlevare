<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\usercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
    return view('welcome');
})->middleware('authtanticationUser');

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register')->middleware('aunthanticationlogin');
Route::post('/userregister', [App\Http\Controllers\RegisterController::class, 'store'])->name('userregister');
Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('aunthanticationlogin');
Route::post('/userlogin', [App\Http\Controllers\LoginController::class, 'login'])->name('userlogin');
Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'dashboard'])->name('dashboard')->middleware('authtanticationUser');






// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
