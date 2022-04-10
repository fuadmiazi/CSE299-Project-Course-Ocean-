<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/',[HomeController::class,'index']);

Route::get('/course',[AdminController::class,'course']);

Route::post('/uploadCourse',[AdminController::class,'uploadCourse']);

Route::get('/showcourse',[AdminController::class,'showcourse']);

Route::get('/deletecourse/{id}',[AdminController::class,'deletecourse']);

Route::get('/updateview/{id}',[AdminController::class,'updateview']);

Route::post('/updatecourse/{id}',[AdminController::class,'updatecourse']);

Route::get('/search',[HomeController::class,'search']);

Route::post('/addToCart/{id}',[HomeController::class,'addToCart']);

Route::get('/showCart',[HomeController::class,'showCart']);

Route::get('/delete/{id}',[HomeController::class,'deleteCart']);







