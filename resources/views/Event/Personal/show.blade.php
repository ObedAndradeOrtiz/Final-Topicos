@extends('Layouts.dashboard')
@section('content')

    <head>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/features/">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
        <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <!--===============================================================================================-->
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
        <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
        <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <!-- Booststrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--  /Booststrap -->

        <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/grid.css"') }}>
    <link rel="stylesheet"
            href="{{ asset('css/modal.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('sidebars.js') }}"></script>
    </head>
    <style>
        body {
            background-color: #f2f6fc;
            color: #69707a;
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

        .form-control,
        .dataTable-input {
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

        a {
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
        <main>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
                integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
                integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
            </script>
            <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('sidebars.js') }}"></script>
            <script src="https://code.jquery.com/jquery-3.4.0.min.js"
                integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
            </script>

            <!--  /Bootstrap y jQuery -->

            <script src="{{ asset('js/modal.js') }}"></script>
            <script src="{{ asset('js/functions.js') }}"></script>
            <script src="{{ asset('js/scripts.js') }}"></script>
            <div class="container-xl px-4 mt-4">

                <!-- Account page navigation-->
                <nav class="nav nav-borders">
                    <a class="nav-link active ms-0"  href="{{ route('eventpersonal.personalEvent',  $id_event  . '-' . $user->id) }}">Buscar Fotografos</a>
                    <a class="nav-link active ms-0"
                        href="{{ route('eventpersonalsoli.personalSolicitudEvent', $id_event . '-' . $user->id) }}">Solicitudes
                        de Fotografos</a>
                </nav>

                <hr class="mt-0 mb-4">

                {{-- <form action="{{ route('event.update', $event->id . '-' . $user->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                </form> --}}


                <div class="album py-5 bg-light">
             
                    <div class="container card-bubble">
                        <h4>SOLICITUDES DE FOTOGRAFOS</h4>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
                         
                            @foreach ($usuarios as $usuario)
                                {{-- @if ($usuario->soyFotografo = true)
                                //todo el codigo aqui!!
                            @endif --}}
                                <div class="col">
                                    <div class="card" style="width: 15rem; height: 30rem padding:2rem">
                                        <img src="https://github.com/mdo.png" class="card-img-top" alt="IMG"
                                            style="width: 15rem; height: 15rem">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $usuario->name }}
                                                {{ $usuario->lastname }}</h5>
                                            <a href="{{ route('eventpersonaldate.personalDateEvent', $usuario->id) }}"
                                                class="btn btn-outline-warning btn-tickets" style="width:100%; ">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-ticket" width="32"
                                                    height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <line x1="15" y1="5" x2="15" y2="7" />
                                                    <line x1="15" y1="11" x2="15" y2="13" />
                                                    <line x1="15" y1="17" x2="15" y2="19" />
                                                    {{-- <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" /> --}}
                                                </svg>
                                                <strong>Ver Datos +</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>
@endsection