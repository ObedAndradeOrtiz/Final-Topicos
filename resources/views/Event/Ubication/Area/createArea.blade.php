@extends('Layouts.dashboard')
@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
 <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
 <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
 <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
 <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">


 
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
    <script src="https://kit.fontawesome.com/871fc34738.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('sidebars.js')}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
    <script src="{{ asset('scripts/personalizacion.js') }}"></script>   
    <script src="{{ asset('scripts/main.js') }}"></script>  
    <script src="https://kit.fontawesome.com/871fc34738.js" crossorigin="anonymous"></script>
    <?php
     $cont=0;
    ?>   
    
    <div class="container-xl px-4 mt-4">
    <form action="{{route('areas.store')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$id_ubi}}">
        <input type="hidden" name="id_user" value="{{$user->id}}">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="" target="__blank">Areas de la Ubicacion</a>
        </nav>
        <div class="mb-3 sombra-claro">
            <button class="btn btn-info collapsed boton-collapsed" style="width: 100%;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHistoricoCli" aria-expanded="false" aria-controls="collapseHistoricoCli">
                CREAR AREA
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pin text-muted flex-shrink-0 me-3" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M15 4.5l-4 4l-4 1.5l-1.5 1.5l7 7l1.5 -1.5l1.5 -4l4 -4" />
                    <line x1="9" y1="15" x2="4.5" y2="19.5" />
                    <line x1="14.5" y1="4" x2="20" y2="9.5" />
                  </svg>
            </button>
          
            @csrf
            <div class="collapse " id="collapseHistoricoCli">
                <div class="list-group list-group-custom card-body">
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (first name)-->
                    <div class="col-md-6">
                            <label class="small mb-1" for="inputFirstName">Nombre Area</label>
                            <input type="text" class="form-control" id="titulo" placeholder="Nombre" name="nombre">
                    </div>
                    </div>
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Capacidad</label>  
                            <input type="number" class="form-control" id="titulo" placeholder="Capacidad" name="capacidad">
                        </div>
                    </div>
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Referencia</label>  
                            <input type="text" class="form-control" id="titulo" placeholder="Referencia" name="referencia">
                        </div>
                    </div>
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Precio</label>  
                            <input type="text" class="form-control" id="titulo" placeholder="Precio de Tickets" name="precio_area">
                        </div>
                    </div>
                    <button class="btn btn-warning collapsed boton-collapsed" style="width: 50%;" type="submit" data-bs-toggle="collapse" data-bs-target="#collapseHistoricoCli" aria-expanded="false" aria-controls="collapseHistoricoCli">
                       GUARDAR
                    </button>
                </div>
            </div>
        <div class=" mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">       
        @foreach ($areas as $area ) 
        @if ($area->ubicacion_id=$id_ubi)
        <hr class="mt-0 mb-4">
            <div class="col" id="myTable">
                <!-- Account details card-->
                <div class="card">
                    <div class="card-header">Detalles de ubicaciones {{' '.$area->nombre}}</div>
                    <div class="card-body">
                        <form>
                            <?php
                             $cont=1;
                            ?>    
                            <div class="row gx-3 mb-3">
                                <div class="col">
                                    <label class="small mb-1" for="inputLastName">ID-Event</label>  
                                </div>
                                <!-- Form Group (first name)-->
                                <div class="col-md-3">
                                    <label class="small mb-1" for="inputFirstName">ID->Ubicacion</label>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col">
                                    <label class="small mb-1" for="inputLastName">Capacidad</label>
                                </div>
                               
                
                                <div class="col">
                                    <label class="small mb-1" for="inputLastName">Referencia</label>
                                </div>
                            </div> 
                            <div class="row gx-3 mb-3">
                                <div class="col-md-3">                        
                                    <label class="form-control" id="inputFirstName" type="text" >{{$area->event_id}}</label>  
                                </div>
                                <!-- Form Group (first name)-->
                                <div class="col-md-3">                        
                                    <label class="form-control" id="inputFirstName" type="text" >{{$area->ubicacion_id}}</label>  
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col">                               
                                    <label class="form-control" id="inputLastName" type="text" >{{$area->capacidad}}</label>  
                                </div>
                                
                                <div class="col">                             
                                    <label class="form-control" id="inputLastName" type="text" >{{$area->referencia}}</label>  
                                 </div>
                            </div>       
                            <div class="row gx-3 mb-3">
                                <div class="container px-4" id="icon-grid">
                                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 ">
                                    
                                      <div class="col d-flex align-items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pin text-muted flex-shrink-0 me-3" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M15 4.5l-4 4l-4 1.5l-1.5 1.5l7 7l1.5 -1.5l1.5 -4l4 -4" />
                                            <line x1="9" y1="15" x2="4.5" y2="19.5" />
                                            <line x1="14.5" y1="4" x2="20" y2="9.5" />
                                          </svg>
                                        <div>
                                            <a href="" style="text-decoration: none;"><h6 class="fw-bold mb-0">Editar Area</h6></a>
                                          <p>Paragraph of text beneath the heading to explain the heading.</p>
                                        </div>
                                      </div>
                                    
                                      <div class="col d-flex align-items-start">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash text-muted flex-shrink-0 me-3" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <line x1="4" y1="7" x2="20" y2="7" />
                                            <line x1="10" y1="11" x2="10" y2="17" />
                                            <line x1="14" y1="11" x2="14" y2="17" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                          </svg>
                                        <div>
                                            <a href="" style="text-decoration: none;"><h6 class="fw-bold mb-0">Eliminar</h6></a>
                                          <p>Paragraph of text beneath the heading to explain the heading.</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>               
                        </form>
                    </div>
                </div>
            </div>        
            @endif
            @endforeach
            @if($cont != 1)
              <h3 class=" mb-4 mt-4 py-1 display-5 fw-bold">¡No existe ningun Area para esta Ubicacion!</h3>
            @endif
               
                </form>
                </div>
        </div>
    </div>
</div>
</form>
</div>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="{{asset("js/app.js")}}"></script>
    <script src="{{ asset('scripts/personalizacion.js') }}"></script>   
    <script src="{{ asset('scripts/main.js') }}"></script>  
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
@endsection