@extends('layouts.login')

@section('content')
<style>
    .pad-arriba{
        padding-top: 200px
    }
</style>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
    </head>

    <body
        style="background-image:url('{{ asset('assets/index/donas7.jpg') }}');background-size:cover;background-position:center">
        <div class="container-fluid pad-arriba justify-content-center  align-items-center d-flex ">
            <div class="container justify-content-center d-flex">
                <form method="POST" action="{{ route('login') }}">
                    <div class="card card-login card-hidden">
                        <div class="card-body pr-4">
                            @csrf
                            <div class="container justify-content-center d-flex pt-4">
                                <h4 style="font-weight: bold">Iniciar Sesión</h4>
                            </div>
                            <span class="bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">Correo</i>
                                        </span>
                                    </div>
                                    <input id="email" placeholder="Correo electrónico" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </span>
                            <span class="bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">Contraseña</i>
                                        </span>
                                    </div>
                                    <input id="password" type="password" placeholder="Contraseña"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </span>
                            <div class="row mb-0 pt-4 pb-4">
                                <div class="col-md-12 justify-content-center d-flex">
                                    <button type="submit" class="btn btn-primary"
                                        style="background-color: #ddabb4;border:none">
                                        {{ __('Iniciar Sesión') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <!--   Core JS Files   -->
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
    </body>

    </html>
@endsection
