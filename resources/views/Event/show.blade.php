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
   
    <div class="container-xl px-4 mt-4">
    <form action="" method="post">
        @csrf
    
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="" target="__blank">Mis Eventos</a>
        </nav>
        @foreach ($eventos as $event ) 
        @if ($event->idUser==$user->id)
        <hr class="mt-0 mb-4">
            <div class="col" id="myTable">
                <!-- Account details card-->
                <div class="card">
                    <div class="card-header">Detalles de Evento {{' '.$event->titulo}}</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-3">
                                    <label class="small mb-1" for="inputFirstName">Titulo</label>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col">
                                    <label class="small mb-1" for="inputLastName">Tipo</label>
                                </div>
                                <div class="col">
                                    <label class="small mb-1" for="inputLastName">Restriccion edad</label>  
                                </div>
                                <div class="col">
                                    <label class="small mb-1" for="inputLastName">Fecha Creada</label>
                                </div>
                            </div>
                           
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-3">                        
                                    <label class="form-control" id="inputFirstName" type="text" >{{$event->titulo}}</label>  
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col">                               
                                    <label class="form-control" id="inputLastName" type="text" >{{$event->tipo}}</label>  
                                </div>
                                <div class="col">                                   
                                    <label class="form-control" id="inputLastName" type="text" >{{$event->rest_edad}}</label>  
                                </div>
                                <div class="col">                             
                                   <label class="form-control" id="inputLastName" type="text" >{{$event->created_at}}</label>  
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-3">
                                    <label class="small mb-1" for="inputFirstName">Estado</label>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col">
                                    <label class="small mb-1" for="inputLastName">Codigo ID</label>
                                </div>
                                <div class="col">
                                    <label class="small mb-1" for="inputLastName">Llave </label>  
                                </div>
                                <div class="col">
                                    <label class="small mb-1" for="inputLastName">Tickets Vendidos</label>
                                </div>
                            
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-3">                        
                                    <label class="form-control" id="inputFirstName" type="text" ></label>  
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col">                               
                                    <label class="form-control" id="inputLastName" type="text" >{{$event->id}}</label>  
                                </div>
                                <div class="col">                                   
                                    <label class="form-control" id="inputLastName" type="text" ></label>  
                                </div>
                                <div class="col">                             
                                   <label class="form-control" id="inputLastName" type="text" ></label>  
                                </div>
                            </div>
                            <div class="container px-4" id="icon-grid">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 ">
                                  <div class="col d-flex align-items-start"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brightness-2 text-muted flex-shrink-0 me-3" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="12" cy="12" r="3" />
                                        <path d="M6 6h3.5l2.5 -2.5l2.5 2.5h3.5v3.5l2.5 2.5l-2.5 2.5v3.5h-3.5l-2.5 2.5l-2.5 -2.5h-3.5v-3.5l-2.5 -2.5l2.5 -2.5z" />
                                      </svg>
                                    <div>
                                      <a href="{{route('event.edit',$user->id.'-'.$event->id)}}" style="text-decoration: none;"><h6 class="fw-bold mb-0">Editar Evento</h6></a>
                                      <p>Paragraph of text beneath the heading to explain the heading.</p>
                                    </div>
                                  </div>
                                  <div class="col d-flex align-items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2 text-muted flex-shrink-0 me-3" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <line x1="18" y1="6" x2="18" y2="6.01" />
                                        <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                                        <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                                        <line x1="9" y1="4" x2="9" y2="17" />
                                        <line x1="15" y1="15" x2="15" y2="20" />
                                      </svg>
                                    <div>
                                        <a href="{{route('ubicacion.show',$user->id.'-'.$event->id)}}" style="text-decoration: none;"><h6 class="fw-bold mb-0">Editar Ubicaciones</h6></a>
                                      <p>Paragraph of text beneath the heading to explain the heading.</p>
                                    </div>
                                  </div>
                                  <div class="col d-flex align-items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-key text-muted flex-shrink-0 me-3" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="8" cy="15" r="4" />
                                        <line x1="10.85" y1="12.15" x2="19" y2="4" />
                                        <line x1="18" y1="5" x2="20" y2="7" />
                                        <line x1="15" y1="8" x2="17" y2="10" />
                                      </svg>
                                    <div>
                                        <a href="{{route('profile.edit',$user->id)}}" style="text-decoration: none;"><h6 class="fw-bold mb-0">Cambiar Llave</h6></a>
                                      <p>Paragraph of text beneath the heading to explain the heading.</p>
                                    </div>
                                  </div>
                                  <div class="col d-flex align-items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users text-muted flex-shrink-0 me-3" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                      </svg>
                                    <div>
                                        <a href="{{route('profile.edit',$user->id)}}" style="text-decoration: none;"><h6 class="fw-bold mb-0">Admin. Personal</h6></a>
                                      <p>Paragraph of text beneath the heading to explain the heading.</p>
                                    </div>
                                  </div>
                                  <div class="col d-flex align-items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ticket text-muted flex-shrink-0 me-3" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <line x1="15" y1="5" x2="15" y2="7" />
                                        <line x1="15" y1="11" x2="15" y2="13" />
                                        <line x1="15" y1="17" x2="15" y2="19" />
                                        <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
                                      </svg>
                                    <div>
                                        <a href="{{route('profile.edit',$user->id)}}" style="text-decoration: none;"><h6 class="fw-bold mb-0">Admin. Tickets </h6></a>
                                      <p>Paragraph of text beneath the heading to explain the heading.</p>
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
        </div>
</form>
</div>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
@endsection