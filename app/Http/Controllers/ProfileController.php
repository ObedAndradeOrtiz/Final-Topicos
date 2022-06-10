<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class ProfileController extends Controller
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
                return view('Profile.show', ['user' => $user]);
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
            return view('Profile.edit', ['user' => $user]);
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
