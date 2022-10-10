<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
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
        $response = Http::post('https://apiseventos.herokuapp.com/api/session', [
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            // 'soyFotografo'=>null,
            // 'correoProfesional'=>null,
            // 'habilidad'=>null,
            // 'linkedIn'=>null,
            // 'nivelProfesional'=>null,
            // 'Referencia'=>null,
            // 'Idioma'=>null
        ]);

        if($response->json('res')==true)
        {
            $client=new Client();
            $url="https://apiseventos.herokuapp.com/api/session";
            $sessionJson = $client->request('GET', $url, [
             'res'  => true,
            ]);
            $sessions = json_decode($sessionJson->getBody());
           foreach ($sessions as $session) {  
                if(($session->email==$request->email))
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
        else
        {
            Session::flash('warning','No se realizo el registro del usuario');
            return redirect()->to('/register');
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
        /*Carla Carmen Julia  Cecilia Cristina Dayana Helen Nancy Natalia Rossy Roxana Silvia*/
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

    public function iniciar(Request $request)
    {
        $client=new Client();
            $url="https://apiseventos.herokuapp.com/api/session";
            $sessionJson = $client->request('GET', $url, [
             'res'  => true,
            ]);
            $cont=false;
            $sessions = json_decode($sessionJson->getBody());
            foreach ($sessions as $session) {  
                if(($session->email==$request->email))
                {
                    $cont=true;
                    $user=$session;
                }          
            }
            if($cont==true)
            {
                $client=new Client();
                $url="https://apiseventos.herokuapp.com/api/eventos";
                $response = $client->request('GET', $url, [
               'res'  => true,
             ]);
              $eventos = json_decode($response->getBody());
              return view('Event.index',['user' => $user,'eventos'=>$eventos]);
            }
            else{
                Session::flash('warning','Error de inicio de session');
                return redirect()->to('/login');
            }
    }
}
