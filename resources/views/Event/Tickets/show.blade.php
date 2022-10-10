@extends('Layouts.dashboard')
@section('content')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <div class="container-xl px-4 mt-4">
            <form action="" method="post">
                @csrf

                <!-- Account page navigation-->
                <nav class="nav nav-borders">
                    <a class="nav-link active ms-0" href="" >E-Fotografias</a>
                </nav>
                <hr class="mt-0 mb-4">
                <div class="col">
                    <!-- Account details card-->
                    <div class="card">
                        <div class="card-header">Detalles de E-Fotografias</div>
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
                                        <label class="small mb-1" for="inputLastName">Lugar</label>
                                    </div>  
                                    <div class="col">
                                        <label class="small mb-1" for="inputLastName">Fecha</label>
                                    </div>
                                    <div class="col">
                                        <label class="small mb-1" for="inputLastName">Valor</label>
                                    </div>
                                    <div class="col">
                                        <label class="small mb-1" for="inputLastName">Estado</label>
                                    </div>
                                    <div class="col">
                                        <label class="small mb-1" for="inputLastName">Accion</label>
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-3">
                                        <label class="form-control" id="inputFirstName" type="text"></label>
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col">
                                        <label class="form-control" id="inputLastName" type="text"></label>
                                    </div>
                                    <div class="col">
                                        <label class="form-control" id="inputLastName" type="text"></label>
                                    </div>
                                    <div class="col">
                                        <label class="form-control" id="inputLastName" type="text"></label>
                                    </div>
                                    <div class="col">
                                        <label class="form-control" id="inputLastName" type="text"></label>
                                    </div>
                                    <div class="col">
                                        <label class="form-control" id="inputLastName" type="text"></label>
                                    </div>
                                    <div class="col">
                                        <a href="">ver</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        </div>
    </body>
@endsection
