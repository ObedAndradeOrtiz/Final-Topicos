@extends('Layouts.dashboard')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Tickets-Line</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	  <link rel="stylesheet" type="text/css" href="css/main.css">
    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .card-img-top
      {
        padding: 1rem;
      
      }
      .btn-tickets
      {
        
        color:#ffffff;
      }
      .btn-tickets:hover
      {
        color:#4158d0;
      }
      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .card{
        background-color:rgba(146, 134, 134, 0.268);
        color: black;
        -webkit-box-shadow: 0px 11px 49px 16px rgba(0,0,0,0.39);
        -moz-box-shadow: 0px 11px 49px 16px rgba(0,0,0,0.39);
         box-shadow: 0px 11px 49px 16px rgba(0,0,0,0.39);
         border-radius: 10px 10px 10px 10px;
        -moz-border-radius: 10px 10px 10px 10px;
        -webkit-border-radius: 10px 10px 10px 10px;
         border: 0px solid #000000;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      body{
      background: #9053c7;
      background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
      background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
      background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
      background: linear-gradient(-135deg, #c850c0, #4158d0);
      
      }
      .img-account-profile {
       height: 25rem;
       }
    .album{
      background: #9053c7;
      background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
      background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
      background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
      background: linear-gradient(-135deg, #c850c0, #4158d0); 
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>
<body>
<main>
  <div class="album py-5 bg-light">
    <div class="container card-bubble">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
        @foreach ($eventos as $event)  
        <div class="col">
          <div class="card" style="width: 15rem; height: 30rem padding:2rem">
            <img src="{{Storage::url($event->file)}}" class="card-img-top" alt="IMG" style="width: 15rem; height: 15rem">
            <div class="card-body">
              <h5 class="card-title text-center">{{$event->titulo}}</h5>
             
              <a href="{{route('tickets.show',$user->id.'-'.$event->id)}}" class="btn btn-outline-warning btn-tickets" style="width:100%; ">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ticket" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <line x1="15" y1="5" x2="15" y2="7" />
                  <line x1="15" y1="11" x2="15" y2="13" />
                  <line x1="15" y1="17" x2="15" y2="19" />
                  <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
                </svg>
                <strong>Comprar Tickets</strong> 
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5 bg-dark">
  <div class="container">
    <p class="float-end ">
      <a href="#">Volver al inico</a>
    </p>
    <p class="mt-3">Todos los derechos reservados &copy;AndradeCompany</p>
  </div>
</footer>
 <script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>   
</body>
</html>
@endsection