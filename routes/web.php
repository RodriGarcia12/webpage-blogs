<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/home', function() { 
    return view('home'); 
});
Route::get('/login', function() {
    return view('login');
});
Route::get('/logout', function() {
    return view('logout');
});
Route::get('/signup', function() {
    return view('signup');
});

Route::post('/loginUser', [UserController::class, 'Login']);
Route::post('/createUser', [UserController::class, 'Create']);