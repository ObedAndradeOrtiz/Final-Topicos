<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
class UbicacionController extends Controller
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
        $response = Http::post('https://apiseventos.herokuapp.com/api/ubicaciones', [
            'event_id' => $request->id,
            'nombre' => $request->nombre,
            'ubicacion'=>$request->ubicacion,
            'direccion'=>$request->direccion,
            'telefono'=>$request->telefono,
            'ciudad'=>$request->ciudad,
            'pais'=>$request->pais,
            'fecha_hora'=>$request->fecha_hora,
        ]);
        $client=new Client();
        $url="https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
         'res'  => true,
        ]);
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {  
            if(($session->id==$request->id_user))
            {
                $user=$session;
            }          
        }
        $client=new Client();
             $url="https://apiseventos.herokuapp.com/api/ubicaciones";
             $ubicacionJson = $client->request('GET', $url, [
              'res'  => true,
             ]);
            $ubicaciones = json_decode($ubicacionJson->getBody());
        return view('Event.Ubication.createUbication',['user' => $user,'id_event'=>$request->id, 'ubicaciones'=>$ubicaciones]);
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
        for ($i = 0; $i <= strlen($id)-1; $i++) {
            if($id[$i]=='-')
            {
              $special=$i;
            }
        }
        $id_user=substr ( $id,0,$special);
        $id_event=substr ( $id,$special+1,strlen($id)-1);
        $client=new Client();
        $url="https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
         'res'  => true,
        ]);
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {  
            if(($session->id==$id_user))
            {
                $user=$session;
            }          
        }
        $client=new Client();
             $url="https://apiseventos.herokuapp.com/api/ubicaciones";
             $ubicacionJson = $client->request('GET', $url, [
              'res'  => true,
             ]);
             $ubicaciones = json_decode($ubicacionJson->getBody());
    
        return view('Event.Ubication.createUbication',['user' => $user,'id_event'=>$id_event, 'ubicaciones'=>$ubicaciones]);

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
