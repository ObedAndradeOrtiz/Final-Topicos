<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    @if (Session::has('warning'))
        <div class="alert alert-danger my-5">
            {{ Session::get('warning') }}
        </div>
    @endif
</head>

<body>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <header>
        <div class="collapse" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-dark">FOTAGORA</h4>
                        <p class="text">TODO EN UN SOLO LUGAR</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <ul class="list-unstyled">
                            <li><a class="login100-form-btn js-tilt" style="width: 100%;" href="/login"
                                    class="text-white">Iniciar sesion</a></li>
                            <br>
                            <li><a class="login100-form-btn-secudary js-tilt" style="width: 100%;" href="/register"
                                    class="text-white">Registrarse</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ticket" width="36"
                        height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="15" y1="5" x2="15" y2="7" />
                        <line x1="15" y1="11" x2="15" y2="13" />
                        <line x1="15" y1="17" x2="15" y2="19" />
                        {{-- <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" /> --}}
                    </svg>
                    <strong>FOTAGORA</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <main>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fotagora-6e9a8.appspot.com/o/REGISTER.jpg?alt=media&token=f76b5c64-2bbc-4245-b4d8-80fa1ac3af31"
                            alt="IMG">
                    </div>

                    <form class="login100-form validate-form" action="{{ route('auth.store') }}" method="POST">
                        <span class="login100-form-title">
                            Registrar
                        </span>
                        @csrf
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Ingresa Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Valid Name is required">
                            <input class="input100" type="text" name="name" placeholder="Ingresa Nombre">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Valid LastName is required">
                            <input class="input100" type="text" name="lastname" placeholder="Ingresa Apellido">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password" id="password"
                                placeholder="Contraseña" value="">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div id="error1"></div>
                        <div class="wrap-input100 validate-input" data-validate="Password repeat is required">
                            <input class="input100" type="password" name="passwrod2" id="password2"
                                placeholder="Repetir Contraseña" value="">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <span id="error2"></span>
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn js-tilt">
                                Enviar Registro
                            </button>
                        </div>
                        <div class="text-center p-t-136">
                            <a class="txt2" href="/login">
                                Tienes una cuenta?
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script>
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
    </main>
    <footer class="text-muted py-5 bg-dark">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Ir Arriba</a>
            </p>
            <p class="mb-1">Software 1 - Parcial 1</p>
        </div>
    </footer>
</body>

</html>
