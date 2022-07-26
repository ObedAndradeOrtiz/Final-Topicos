<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
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
        $url="https://apiseventos.herokuapp.com/api/eventos";
        $response = $client->request('GET', $url, [
         'res'  => true,
        ]);
        $eventos = json_decode($response->getBody());

        $client=new Client();
        $url="https://apiseventos.herokuapp.com/api/ubicaciones";
        $ubicacionJson = $client->request('GET', $url, [
        'res'  => true,
        ]);
        $ubicaciones = json_decode($ubicacionJson->getBody());
        $client=new Client();
        $url="https://apiseventos.herokuapp.com/api/areas";
        $areasJson = $client->request('GET', $url, [
        'res'  => true,
        ]);
        $areas = json_decode($areasJson->getBody());
        return view('Tickets.show',['user' => $user,'eventos'=>$eventos,'id_event'=>$id_event, 'ubicaciones'=>$ubicaciones, 'areas'=>$areas]);
    }
    public function misTickets(string $id)
    {
        $client=new Client();
        $url="https://apiseventos.herokuapp.com/api/session";
        $sessionJson = $client->request('GET', $url, [
         'res'  => true,
        ]);
        $sessions = json_decode($sessionJson->getBody());
        $url="https://apiseventos.herokuapp.com/api/ticket";
        $ticketsJson = $client->request('GET', $url, [
         'res'  => true,
        ]);
        $tickets = json_decode($ticketsJson->getBody());
        foreach ($sessions as $session) {  
            if(($session->id==$id))
            {
                $user=$session;
            }          
        }
        return view('Tickets.misTickets',['user' => $user,'tickets'=>$tickets]);
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
