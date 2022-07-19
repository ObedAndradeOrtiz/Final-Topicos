@extends('Layouts.dashboard')
@section('content')
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
  <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
  <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<style>
    body{
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
a{
    text-decoration: none;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
</style>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('sidebars.js')}}"></script>
    <form action="{{route('cart.precompra')}}" method="post">
        
    @csrf
    <div class="container-xl px-4 mt-4">
        <input type="hidden" name="id_user" value="{{$user->id}}">
        @foreach ($eventos as $event )
        @if ($event->id == $id_event)  
        <input type="hidden" value="{{$event->titulo}}" name="name_event">
        <input type="hidden" value="{{$event->id}}" name="id_event">
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="" target="__blank"><h4>{{$event->titulo}}</h4> </a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header">Ticket para {{$event->titulo}}</div>
                    <div class="card-body">
                        <form>                
                            <div class="row gx-3">
                                <div class="col-md-3">
                                    <label class="small mb-1" for="inputFirstName">Descripcion</label>
                                </div>
                                <div class="col-md-6">                               
                                    <label class="" id="inputLastName" type="text" >{{$event->descripcion}}</label>  
                                </div>
                            </div>
                            <br>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-3">
                                    <label class="snall mb-1" for="inputLastName">Tipo</label>
                                </div>
                                <div class="col-md-6">                                   
                                    <label class="" id="inputLastName" type="text" >{{$event->tipo}}</label>  
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-3">
                                    <label class="small mb-1" for="inputLastName">Restriccion de edad >18</label>  
                                </div>
                                <div class="col-md-6">                             
                                    <label class="l" id="inputLastName" type="text" >{{$event->rest_edad}}</label>  
                                 </div>
                            </div> 
                        </form>
                    </div>
                </div>
                <hr class="mt-0 mb-4">
        @foreach($ubicaciones as $ubicacion ) 
        @if ($ubicacion->event_id=$id_event)
            <div class="col" id="myTable">
                <div class="card" style="text-align:center; margin:2rem;">
                    <div class="card-header">Detalles de ubicaciones {{' '.$ubicacion->nombre}}</div>
                    <div class="card-body"> 
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Nombre</label>
                                </div>
                                <div class="col-md-6">                        
                                    <label class="form-control" id="inputFirstName" type="text" >{{$ubicacion->nombre}}</label>  
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Ubicacion</label>
                                </div>
                                <div class="col-md-6">                               
                                    <label class="form-control" id="inputLastName" type="text" >{{$ubicacion->ubicacion}}</label>  
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Fecha</label>
                                </div>
                                <div class="col-md-6">                             
                                    <label class="form-control" id="inputLastName" type="text" >{{$ubicacion->fecha_hora}}</label>  
                                 </div>
                                 <div class="col-md-6">
                                </div>
                            </div>  
                            <hr class="mt-0 mb-4">
                            <div class="" style="">   
                                <div class="text-center">  
                                   <h3>Areas</h3>  
                                       @foreach($areas as $area)
                                       @if ($ubicacion->id==$area->ubicacion_id)
                                       <hr class="mt-0 mb-4">
                                       <label  class="line-s-2" style=""><h4>{{$area->nombre}}</h4> </label>
                                       <input type="hidden" value="{{$area->nombre}}" name="nombre[]">
                                       <input type="hidden" value="{{$area->id}}" name="id_area[]">
                                       <div class="col">
                                       <label  class="line-s-2" style=""><h5>PRECIO: {{$area->precio}}</h5> </label>
                                       <input type="hidden" value="{{$area->precio}}" name="precio[]">
                                       </div>
                                       <div class="col">
                                           <span class="small mb-1 mb-2" for="inputLastName">Seleccione cantidad:</span>
                                           <input class=" mb-4" style="background-color:deepskyblue;" id="inputLastName" type="number" name="cantidad[]">
                                       </div>
                                       @endif
                                       @endforeach 
                                </div>
                               </div>
                                  
                    </div>
                </div>
            </div>        
            @endif
            @endforeach
            </div>
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Imagen de Portada</div>
                    <div class="card-body text-center">
                        <img class="img-account-profile mb-2" src="{{Storage::url($event->file)}}" alt="">   
                        <div class="small font-italic text-muted mb-4"></div>
                        <button class="btn btn-outline-warning" style="color:#0061f2" type="button"><strong>Solicitar mas informacion</strong></button>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        <div class="col-md-6 mt-3 mb-2">                             
            <button class="btn btn-warning" style="color: white; width: 135%; margin-bottom:2rem; " type="submit" data-bs-toggle="collapse" data-bs-target="#collapseHistoricoCli" aria-expanded="false" aria-controls="collapseHistoricoCli">
               COMPRAR  
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart text-muted flex-shrink-0 me-3" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="6" cy="19" r="2" />
                    <circle cx="17" cy="19" r="2" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                  </svg>
            </button>  
         </div>   
    </div>
</form>
</div>
</body>
@endsection