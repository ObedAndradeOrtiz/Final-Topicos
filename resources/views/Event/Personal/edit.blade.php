@extends('Layouts.dashboard')
@section('content')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>
        <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('sidebars.js') }}"></script>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <div class="container-xl px-4 mt-4">
            <form action="" method="post">
                @csrf

                <!-- Account page navigation-->
                <nav class="nav nav-borders">
                    <a class="nav-link active ms-0" href="">Perfil
                        Profesional de {{ $user->name }}</a>
                    <div class="col-xl-6">

                        <button {{-- href="{{ URL::previous() }}" --}} onclick="goBack()" class="btn btn-outline-warning"
                            style="color:#0061f2" type="button"><strong>Volver a Personal de Evento</strong></button>
                    </div>

                </nav>
                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Foto de Perfil </div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2" src="https://github.com/mdo.png"
                                    alt="">
                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4">{{ $user->name }} {{ $user->lastname }}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Informacion Profesional</div>
                            <div class="card-body">
                                <form>

                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (su Nombre)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1">Nombre</label>
                                            <label class="small mb-1 form-control">{{ $user->name }}</label>
                                        </div>
                                        <!-- Form Group (su Apellido)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1">Apellido</label>
                                            <label class="small mb-1 form-control">{{ $user->lastname }}</label>

                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (Numero de Telefono)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1">Numero de Telefono</label>
                                            <label class="small mb-1 form-control">Apellido</label>

                                        </div>
                                        <!-- Form Group (Cumpleaños)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1">Cumpleaños</label>
                                            <label class="small mb-1 form-control"> - </label>

                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (correoProfesional)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1">correo Profesional</label>
                                            <label class="small mb-1 form-control"> - </label>

                                        </div>
                                        <!-- Form Group (habilidades)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1">Habilidades</label>
                                            <label class="small mb-1 form-control"> - </label>

                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (Link linkedIn)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1">Link linkedIn</label>
                                            <label class="small mb-1 form-control"> - </label>

                                        </div>
                                        <!-- Form Group (Nivel Profesional)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1">Nivel Profesional</label>
                                            <label class="small mb-1 form-control"> - </label>

                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (Referencia)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1">Referencias</label>
                                            <label class="small mb-1 form-control"> - </label>

                                        </div>
                                        <!-- Form Group (Idiomas)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1">Idiomas</label>
                                            <label class="small mb-1 form-control"> - </label>

                                        </div>
                                    </div>
                                    <!-- Save changes button-->
                                    <button class="btn btn-outline-warning" style="color:#0061f2"
                                        type="button"><strong>Enviar invitacion al Evento</strong></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </body>
@endsection
