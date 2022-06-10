<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TicketsController;
use GuzzleHttp\Client;
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
    $client=new Client();
        $url="https://apiseventos.herokuapp.com/api/eventos";
        $response = $client->request('GET', $url, [
         'res'  => true,
        ]);
        $eventos = json_decode($response->getBody());
        return view('welcome',['eventos'=>$eventos]);
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
Route::get('/eventindex/{id}', [EventController::class,'indexEvent'])->name('eventindex.eventprincipal');
Route::get('/eventcrear/{id}', [EventController::class,'createEvent'])->name('eventcrear.createevent');
Route::post('/LoginUser',[AuthController::class,'iniciar'])->name('LoginUser.iniciar');
Route::resource('/auth',AuthController::class);
Route::resource('/profile',ProfileController::class);
Route::resource('/event',EventController::class);
Route::resource('/account',AccountController::class);
Route::resource('/tickets',TicketsController::class);

