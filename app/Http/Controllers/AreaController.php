<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AreaController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $response = Http::post('https://apiseventos.herokuapp.com/api/areas', [
            'event_id' => null, //null,
            'ubicacion_id' => $request->id,
            'nombre' => $request->nombre,
            'precio' => $request->precio_area,
            'capacidad' => $request->capacidad,
            'referencia' => $request->referencia,
        ]);
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {
            if (($session->id == $request->id_user)) {
                $user = $session;
            }
        }
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/areas";
        $AreasJson = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $areas = json_decode($AreasJson->getBody());
        return view('Event.Ubication.Area.createArea', ['user' => $user, 'id_ubi' => $request->id, 'areas' => $areas]);
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
        for ($i = 0; $i <= strlen($id) - 1; $i++) {
            if ($id[$i] == '-') {
                $special = $i;
            }
        }
        $id_user = substr($id, 0, $special);
        $id_ubi = substr($id, $special + 1, strlen($id) - 1);
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {
            if (($session->id == $id_user)) {
                $user = $session;
            }
        }
        $client = new Client();
        $url = "https://apiseventos.herokuapp.com/api/areas";
        $AreasJson = $client->request('GET', $url, [
            'res'  => true,
        ]);
        $areas = json_decode($AreasJson->getBody());
        return view('Event.Ubication.Area.createArea', ['user' => $user, 'id_ubi' => $id_ubi, 'areas' => $areas]);
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
}
