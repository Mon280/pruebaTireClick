<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="tus_palabras_clave_aquí">
    <meta name="description" content="tu_descripción_aquí">
    <meta name="robots" content="noindex,nofollow">
    <title>Mi prueba :D</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtreme-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('plantilla/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('plantillalibs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('plantilla/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- Desde CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- O desde tu proyecto -->
    <link href="{{ asset('ruta/a/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .alert-success {
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5"
            style=" background:#4040b1;  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5" style=" background-color:transparent">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
            
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6" style="background-color:#30333a">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav"style="background-color:#30333a">
                        <li>
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                        viewBox="0 0 24 24" width="30px" height="30px">
                                        <path fill="white"
                                            d="M16.585,9.616,15.21,6h2.422A5.885,5.885,0,0,1,22.36,8.4l.787,1.075A4.431,4.431,0,0,1,23.867,11H16.952A6.5,6.5,0,0,0,16.585,9.616ZM12,4a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V3A1,1,0,0,0,12,4Zm2.722,6.343L13.071,6H10.938L9.26,10.452A4.709,4.709,0,0,0,9.1,11h5.821A4.623,4.623,0,0,0,14.722,10.343ZM16.553,3.9A1,1,0,0,0,17.9,3.447l1-2a1,1,0,1,0-1.79-.894l-1,2A1,1,0,0,0,16.553,3.9ZM11.988,18.887l2.786-5.253A4.591,4.591,0,0,0,14.941,13H9a4.585,4.585,0,0,0,.2.757ZM7.4,9.729,8.8,6H6.383A5.892,5.892,0,0,0,1.721,8.309L.9,9.383A4.366,4.366,0,0,0,.141,11h6.9A6.6,6.6,0,0,1,7.4,9.729ZM16.969,13a6.573,6.573,0,0,1-.344,1.4c-.015.04-3.756,7.074-3.759,7.075a.973.973,0,0,1-1.726.008s-3.774-6.912-3.79-6.955A6.586,6.586,0,0,1,6.994,13H.121a4.3,4.3,0,0,0,1.328,2.32l7.99,7.707a3.82,3.82,0,0,0,2.55.969,3.9,3.9,0,0,0,2.6-1l7.936-7.633A4.373,4.373,0,0,0,23.89,13ZM6.105,3.447A1,1,0,0,0,7.9,2.553l-1-2a1,1,0,1,0-1.79.894Z" />
                                    </svg>
                                </div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="#" class="" id="Userdd" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium text-white"> {{ Auth::user()->name }} <i
                                                class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email text-white"> {{ Auth::user()->email }}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar Sesión
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark sidebar-link"
                                style="background-color:#4040b1;" href="/home" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard" style="color:white"></i><span
                                    class="hide-menu text-white">Home</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/productos" aria-expanded="false"><i class="mdi mdi-border-all"
                                    style="color:white"></i><span class="hide-menu text-white">Productos</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="page-wrapper">
        
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </div>

            <footer class="footer text-center">
                Creado por Mon</a>
            </footer>


        </div>

        <script src="{{ asset('plantilla/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('plantilla/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('plantilla/dist/js/app-style-switcher.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('plantilla/dist/js/waves.js') }}"></script>
        <!--Menu sidebar -->
        <script src="{{ asset('plantilla/dist/js/sidebarmenu.js') }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset('plantilla/dist/js/custom.js') }}"></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <script src="{{ asset('plantilla/assets/libs/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('plantilla/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}">
        </script>
        <script src="{{ asset('plantilla/dist/js/pages/dashboards/dashboard1.js') }}"></script>
        <!-- Desde CDN -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- O desde tu proyecto -->
        <script src="{{ asset('ruta/a/bootstrap.min.js') }}"></script>

        @yield('scripts')

</body>

</html>
