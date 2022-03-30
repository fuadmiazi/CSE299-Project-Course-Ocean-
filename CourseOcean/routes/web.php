<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationLoginController;

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
});

Route::get('/login',[RegistrationLoginController::class,'login'])->middleware('alreadyLoggedIn');

Route::get('/registration',[RegistrationLoginController::class,'registration'])->middleware('alreadyLoggedIn');

Route::post('/register-user',[RegistrationLoginController::class,'registerUser'])->name('register-user');

Route::post('/login-user',[RegistrationLoginController::class,'loginUser'])->name('login-user');

Route::get('/dashboard',[RegistrationLoginController::class,'dashboard'])->middleware('isLoggedIn');