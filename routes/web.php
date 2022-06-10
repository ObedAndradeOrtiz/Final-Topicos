<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TicketsController;

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
Route::get('/login', function () {
    return view('Auth.signin');
});
Route::get('/register', function () {
    return view('Auth.register');
});
Route::get('/mi-cuenta/{id}', function () {
    return view('Auth.register');
});
Route::get('/event/{id}',[EventController::class,'createEvent'])->name('event.createevent');
Route::post('/LoginUser',[AuthController::class,'iniciar'])->name('LoginUser.iniciar');
Route::resource('/auth',AuthController::class);
Route::resource('/profile',ProfileController::class);
Route::resource('/event',EventController::class);
Route::resource('/account',AccountController::class);
Route::resource('/tickets',TicketsController::class);

