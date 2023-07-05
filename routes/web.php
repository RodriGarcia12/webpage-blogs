<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Middleware\Autenticacion;

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

Route::get('/', [BlogController::class, 'Read']);
Route::get('/login', function() {
    return view('login');
});
Route::get('/logout', [UserController::class, 'Logout'])->middleware(Autenticacion::class);;

Route::get('/signup', function() {
    return view('signup');
});

Route::get('/blog', function() {
    return view('createBlog');
});



Route::post('/loginUser', [UserController::class, 'Login']);
Route::post('/createUser', [UserController::class, 'Create']);
Route::post('/createBlog', [BlogController::class, 'Create']);