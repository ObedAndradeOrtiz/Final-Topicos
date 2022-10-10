<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Type\Integer;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }
    public function indexEvent($id)
    {

        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {
            if (($session->id == $id)) {
                $user = $session;
            }
        }
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/eventos";
        $response = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $eventos = json_decode($response->getBody());
        return view('Event.index', ['user' => $user, 'eventos' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }
    public function createEvent($id)
    {
        //
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $cont = false;
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {
            if (($session->id == $id)) {
                $cont = true;
                $user = $session;
            }
        }
        if ($cont == true) {
            return view('Event.create', ['user' => $user]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $cont = false;
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {
            if (($session->id == $request->idUser)) {
                $user = $session;
            }
        }
        $path = $request->file('images')->store('public');

        $request->validate([
            'titulo' => 'required',
            'tipo' => 'required',
            'rest_edad' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'file' => $path,
        ]);

        $response = Http::post('https://apiseventos.herokuapp.com/api/eventos', [
            'idUser' => $request->idUser,
            'titulo' => $request->titulo,
            'tipo' => $request->tipo,
            'rest_edad' => $request->rest_edad,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria,
            'file' => $path,
        ]);

        if ($response->json('res') == true) {
            $client = new Client();
            $url = "https://apiseventos.herokuapp.com/api/ubicaciones";
            $ubicacionJson = $client->request('GET', $url, [
                'res'  => true,
            ]);
            $ubicaciones = json_decode($ubicacionJson->getBody());

            Session::flash('mensaje', 'Registro de evento creado con exito');
            return \view('Event.Ubication.createUbication', ['id_event' => $response->json('id'), 'ubicaciones' => $ubicaciones, "user" => $user]);
        } else {
            Session::flash('warning', 'No se realizo el registro del evento');
            return redirect()->to('crearevento');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $cont = false;
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {
            if (($session->id == $id)) {
                $cont = true;
                $user = $session;
            }
        }
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/eventos";
        $response = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $eventos = json_decode($response->getBody());
        if ($cont == true) {
            return view('Event.show', ['user' => $user, 'eventos' => $eventos]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        for ($i = 0; $i <= strlen($id) - 1; $i++) {
            if ($id[$i] == '-') {
                $special = $i;
            }
        }

        $id_user = substr($id, 0, $special);
        $id_event = substr($id, $special + 1, strlen($id) - 1);
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $cont = false;
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {
            if (($session->id == $id_user)) {
                $user = $session;
            }
        }
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/eventos";
        $response = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $eventos = json_decode($response->getBody());
        foreach ($eventos as $evento) {
            if (($evento->id == $id_event)) {
                $event = $evento;
            }
        }


        return view('Event.edit', ['user' => $user, 'event' => $event, 'id_event' => $id_event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        for ($i = 0; $i <= strlen($id) - 1; $i++) {
            if ($id[$i] == '-') {
                $special = $i;
            }
        }
        $id_user = substr($id, 0, $special);
        $id_event = substr($id, $special + 1, strlen($id) - 1);
        $path = $request->file('images')->store('public');
        $response = Http::put('https://apiseventos.herokuapp.com/api/eventos/' . $id_event, [
            'titulo' => $request->titulo,
            'tipo' => $request->tipo,
            'rest_edad' => $request->rest_edad,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria,
            'cantidad_ubi' => $request->cantidad_ubi,
            'file' => $path,
        ]);
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $cont = false;
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {
            if (($session->id == $id_user)) {
                $user = $session;
            }
        }
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/eventos";
        $response = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $eventos = json_decode($response->getBody());
        return view('Event.show', ['user' => $user, 'eventos' => $eventos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function personalEvent($id)
    {
        for ($i = 0; $i <= strlen($id) - 1; $i++) {
            if ($id[$i] == '-') {
                $special = $i;
            }
        }
        $id_user = substr($id, 0, $special);
        $id_event = substr($id, $special + 1, strlen($id) - 1);

        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
            'res'  => true,
        ]);

        $cont = false;
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {
            if (($session->id == $id_user)) {
                $cont = true;
                $user = $session;
            }
        }

        if ($cont == true) {
            return view('Event.Personal.index', ['user' => $user, 'id_event' => $id_event, 'usuarios' => $sessions]);
        }
    }

    public function personalDateEvent($id)
    {
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $cont = false;
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {
            if (($session->id == $id)) {
                $cont = true;
                $user = $session;
            }
        }
        if ($cont == true) {
            return view('Event.Personal.edit', ['user' => $user]);
        }
    }

    public function personalSolicitudEvent($id)
    {
        for ($i = 0; $i <= strlen($id) - 1; $i++) {
            if ($id[$i] == '-') {
                $special = $i;
            }
        }
        $id_user = substr($id, 0, $special);
        $id_event = substr($id, $special + 1, strlen($id) - 1);

        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
            'res'  => true,
        ]);
        // $cont=false;
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {
            if (($session->id == $id_user)) {
                $cont = true;
                $user = $session;
            }
        }
        if ($cont == true) {
            return view('Event.Personal.show', ['usuarios' => $sessions, 'user' => $user, 'id_event' => $id_event]);
        }
         //return "dinooooooooo";
    }
}
