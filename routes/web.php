<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::post('/LoginUser',[AuthController::class,'iniciar'])->name('LoginUser.iniciar');
Route::resource('/auth',AuthController::class);

