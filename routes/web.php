<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

// Route::get('/', function () {
//     return view('login');
// })->name('login');


//Home Controller
Route::get('/', [HomeController::class, 'main'])->name('home');




//Login Controller
Route::get('login', [LoginController::class, 'main'])->name('login');
Route::post('login', [LoginController::class, 'login_post'])->name('postLogin');