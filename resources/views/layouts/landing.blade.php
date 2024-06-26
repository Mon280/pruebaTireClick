<!DOCTYPE html>
<?php
$currentPath = request()->path();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Prueba | Inicio</title>
    <meta name="twitter:image" content="https://guimea.com.mx/nuevos/icons/guimea.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="animaciones.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="estilos.css">

    {{-- estilos generales --}}
    <style>
        @font-face {
            font-family: "carnas1";
            src: url("{{ asset('assets/fonts/carnas-black.otf') }}");
        }

        @font-face {
            font-family: "carnas2";
            src: url("{{ asset('assets/fonts/carnas-regular.otf') }}");
        }

        @font-face {
            font-family: "museo";
            src: url("{{ asset('assets/fonts/museo3.OTF') }}");
        }

        .carnas1 {
            font-family: 'carnas1';
        }

        .carnas2 {
            font-family: 'carnas2';
        }

        .dis {
            visibility: hidden !important;
        }

        .dis2 {
            visibility: visible;
        }

        .page {
            padding-left: 80px !important;
            padding-right: 80px !important;
        }

        @media only screen and (max-width: 768px) {
            .page {
                padding-left: 30px !important;
                padding-right: 30px !important;
            }

            .font-30 {
                font-size: 30px !important;
            }

            .no-margin {
                margin: 0px !important;
            }

            .no-padding {
                padding: 0px !important;
            }

            .pad-20-top {
                padding-top: 20px !important;
            }

            .margin-20-top {
                margin-top: 20px !important;
            }

            .pad-20-bottom {
                padding-bottom: 20px !important;
            }

            .pad-20-lados {
                padding-right: 20px !important;
                padding-left: 20px !important;

            }

            .centro {
                justify-content: center !important;
                text-align: center;
            }
        }
    </style>

    <style>
        .nav-link {
            font-size: 18px;
            font-family: "carnas2";
            color: black;
            text-align: center;
        }

        .margin {
            margin-left: 980px;
        }

        .nav-item.active .nav-link {
            font-family: "carnas2";
            position: relative;
        }

        .dropdown-item.active {
            background-color: #e0ebf2;
            color: black;
        }


        @media only screen and (max-width: 768px) {
            .margin {
                margin-left: 0px;
                text-align: center;
            }

            .no-margin {
                margin: 0px !important;
            }

            .nav-item.active .nav-link::after {
                display: none;
            }
        }
    </style>
    {{-- Fin estilos navbar --}}

    {{-- estilos footer --}}
    <style>
        .footer {
            background-color: black;
        }

        p {
            font-size: 16px
        }

        .enlaces {
            text-decoration: none !important;
            color: #282850;
        }

        .sin-decoracion {
            text-decoration: none !important;
        }

        .enlaces:hover {
            text-decoration: none !important;

            color: #282850 !important;
        }

        @media only screen and (max-width: 768px) {
            .margin {
                margin-left: 0px;
                text-align: center;
            }

            .nav-item.active .nav-link::after {
                display: none;
            }

            p {
                font-size: 18px
            }
        }
    </style>
    {{-- fin estilos footer --}}
</head>

<body>
    {{-- navbar --}}
    <header class="section page-head " style="position: relative;z-index:1000">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-end d-flex"
            style="background-color:white; box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.3);">
            <a class="navbar-brand flex-grow-1" href="index.php">
                <img src="{{ asset('assets/index/dona-individual/dona1.png') }}" width="80" height="auto"
                    alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 margin">
                    <li class="nav-item {{ $currentPage ?? '' == 'inicio' ? 'active' : '' }} ">
                        <a class="nav-link " href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    <li
                        class="nav-item no-margin  ml-5 {{ $currentPage ?? '' == 'productos-cliente' ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('productos-cliente') }}">Productos</a>
                    </li>
                    <li>
                        <a href="{{ route('carrito.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Filled" viewBox="0 0 24 24" width="20"
                                class="mt-2 no-margin ml-5" height="20">
                                <path fill="#b23d58"
                                    d="M22.713,4.077A2.993,2.993,0,0,0,20.41,3H4.242L4.2,2.649A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.82-2h11.92a5,5,0,0,0,4.921-4.113l.785-4.354A2.994,2.994,0,0,0,22.713,4.077Z" />
                                <circle fill="#b23d58" cx="7" cy="22" r="2" />
                                <circle fill="#b23d58" cx="17" cy="22" r="2" />
                            </svg>
                        </a>
                    </li>

                </ul>
            </div>

        </nav>
    </header>


    @yield('content')

    {{-- inicio footer --}}
    <footer class="section footer">
        <div class="container-fluid" style="background-color:white">

            <div class="row justify-content-center d-flex">
                <div class="container"style="border-top:1px solid #b23d58; max-width:80%"></div>
            </div>
            <div class="row p-4">
                <div class="col-md-2">
                </div>
                <div class="col-lg justify-content-center d-flex">
                    <a href="{{ route('inicio') }}" class="sin-decoracion">
                        <p class=" enlaces carnas2" style="text-align:center">Inicio</p>
                    </a>
                </div>
                <div class="col-lg justify-content-center d-flex">
                    <a href="{{ route('productos-cliente') }}" class="sin-decoracion">
                        <p class="enlaces carnas2" style="text-align:center">Productos</p>
                    </a>
                </div>
                <div class="col-lg justify-content-center d-flex">
                    <a href="{{ route('login') }}" class="sin-decoracion">
                        <p class="enlaces carnas2" style="text-align:center">Iniciar Sesión</p>
                    </a>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </footer>
    {{-- fin footer --}}
</body>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

@yield('scripts')
