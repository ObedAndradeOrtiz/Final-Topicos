<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMail;

class CartController extends Controller
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
        
        for( $i = 0; $i < $request->total; $i++)
        {
            
            for( $j = 0; $j < $request->cantidad[$i]; $j++)
               {
                $response = Http::post('https://apiseventos.herokuapp.com/api/ticket', [
                   'id_area'=>$request->id_area[$i],
                   'id_user'=>$request->id_user,
                   'id_event'=>$request->id_event,
                   'name_area'=>$request->nombre[$i],
                   'name_event'=>$request->name_event,
                   'estado'=>false,
                ]);
                QrCode::format('png') ->generate(strval($response['id']), '../public/storage/qrcodes.png');
                $pdf = PDF::loadView('Qr.imagenQr')->setPaper([0, 0, 240,  300,500]);
                $pdf->getDomPDF()->setHttpContext(
                stream_context_create([
                 'ssl' => [
                  'allow_self_signed'=> TRUE,
                  'verify_peer' => FALSE,
                  'verify_peer_name' => FALSE,
                ]
                ]));
                // $pdf->save('myfile'.strval($response['id']).$j.'.pdf');
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
                     $correo=new ContactanosMail;
                     Mail::to('obedandrade0105@gmail.com')->send($correo);
                  }    
        }
      return redirect()->route('misTickets.tickets',$request->id_user);
    }
    public function precompra(Request $request)
    {
    $total=0;
    $precio=0;
    foreach($request->id_area as $valor)
    {
        $total=$total+1;
    }
    for( $i = 0; $i < $total; $i++)
    {
        if($request->cantidad[$i]!=null){
            $precio=$precio+$request->precio[$i]*$request->cantidad[$i];
        }
       
    }
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
    return view('Event.Buy.createBuy',['user' => $user, 'precio'=>$precio, 'request' => $request, 'total' => $total]);

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
