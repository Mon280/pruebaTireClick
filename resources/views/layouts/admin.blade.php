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
            style=" background:#ddabb4;  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 30px; height:30px"
                                        id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                                        <path fill="white"
                                            d="m18,20h2v.943c-2.123,1.9-4.926,3.057-8,3.057C5.839,24,.764,19.357.079,13.38c.346.155.675.352.982.59.822.638,1.865.99,2.938.991,1.074,0,2.119-.353,2.94-.991.399-.309.816-.538,1.269-.692.533,1.582,2.029,2.721,3.791,2.721,1.47,0,2.754-.793,3.449-1.974.317.085.551.374.551.717v3.256c0,1.105.895,2,2,2ZM12.511.011C5.911-.263.431,4.796.025,11.233c.813.237,1.576.626,2.262,1.157.955.74,2.451.765,3.402.02.73-.571,1.518-.961,2.384-1.175.357-1.843,1.979-3.235,3.927-3.235,2.209,0,4,1.791,4,4,1.105,0,2,.895,2,2v4h2v-5.002c.02-.56.459-.998,1-.998.551,0,1,.448,1,1v8h2v-8.628C24,5.879,18.999.28,12.511.011Z" />
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
                                style="background-color:#ddabb4;" href="/home" aria-expanded="false"><i
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
