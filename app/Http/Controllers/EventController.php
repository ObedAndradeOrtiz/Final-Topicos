<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
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
        //
        $client=new Client();
        $url="https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
         'res'  => true,
        ]);
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {  
            if(($session->id==$id))
            {
                $user=$session;
            }          
        }
        $client=new Client();
        $url="https://apiseventos.herokuapp.com/api/eventos";
        $response = $client->request('GET', $url, [
         'res'  => true,
        ]);
        $eventos = json_decode($response->getBody());
        return view('Event.index',['user' => $user,'eventos'=>$eventos]);
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
        $client=new Client();
        $url="https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
         'res'  => true,
        ]);
        $cont=false;
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {  
            if(($session->id==$id))
            {
                $cont=true;
                $user=$session;
            }          
        }
        if($cont==true)
        {
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
        //
         //
      
         $path=$request->file('images')->store('public');
         $response = Http::post('https://apiseventos.herokuapp.com/api/eventos', [
             'titulo' => $request->titulo,
             'tipo' => $request->tipo,
             'rest_edad'=>$request->rest_edad,
             'descripcion'=>$request->descripcion,
             'categoria'=>$request->categoria,
             'file'=>$path,
             'link_video'=>$request->link_video,
         ]);
 
         if($response->json('res')==true)
         {
             $client=new Client();
             $url="https://apiseventos.herokuapp.com/api/ubicaciones";
             $ubicacionJson = $client->request('GET', $url, [
              'res'  => true,
             ]);
             $ubicaciones = json_decode($ubicacionJson->getBody());
 
             Session::flash('mensaje','Registro de evento creado con exito');
             return \view('Event.Ubication.createUbication',['id'=>$response->json('id'),'ubicaciones'=>$ubicaciones]);
         }
         else
         {
             Session::flash('warning','No se realizo el registro del evento');
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
        $client=new Client();
        $url="https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
         'res'  => true,
        ]);
        $cont=false;
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {  
            if(($session->id==$id))
            {
                $cont=true;
                $user=$session;
            }          
        }
        if($cont==true)
        {
            return view('Event.show', ['user' => $user]);
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
        $client=new Client();
        $url="https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
         'res'  => true,
        ]);
        $cont=false;
        $sessions = json_decode($sessionJson->getBody());
        foreach ($sessions as $session) {  
            if(($session->id==$id))
            {
                $cont=true;
                $user=$session;
            }          
        }
        if($cont==true)
        {
            return view('Event.edit', ['user' => $user]);
        }
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
