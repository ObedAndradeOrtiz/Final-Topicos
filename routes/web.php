<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\CartController;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMail;
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
Route::get('/contactanos',function(){
    $correo=new ContactanosMail;
    Mail::to('obedandrade0105@gmail.com')->send($correo);
    return "enviado";
});
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
Route::post('/precompra', [CartController::class,'precompra'])->name('cart.precompra');
Route::get('/mistickets/{id}', [TicketsController::class,'misTickets'])->name('misTickets.tickets');
Route::get('/eventindex/{id}', [EventController::class,'indexEvent'])->name('eventindex.eventprincipal');
Route::get('/eventcrear/{id}', [EventController::class,'createEvent'])->name('eventcrear.createevent');
Route::post('/LoginUser',[AuthController::class,'iniciar'])->name('LoginUser.iniciar');
Route::resource('/auth',AuthController::class);
Route::resource('/profile',ProfileController::class);
Route::resource('/event',EventController::class);
Route::resource('/account',AccountController::class);
Route::resource('/tickets',TicketsController::class);
Route::resource('/areas',AreaController::class);
Route::resource('/ubicacion',UbicacionController::class);
Route::resource('/compra',CartController::class);

