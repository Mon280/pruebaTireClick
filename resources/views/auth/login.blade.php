
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset('./material-dashboard-master/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Universidad Autónoma de San Luis Potosí
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('./material-dashboard-master/assets/css/nucleo-icons.css') }}" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('./material-dashboard-master/assets/css/material-dashboard.css?v=3.1.0') }}"
        rel="stylesheet" />
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<style>
    .blue-rainbow {
        background: linear-gradient(to bottom right, #00ffed, #9d00c6);
    }

    .yellow-rainbow {
        background: linear-gradient(to bottom right, #f7ce38, #fc210d);
    }

    .red-rainbow {
        background: linear-gradient(to bottom right, #e21c34, #500b28);
    }
</style>

<body class="bg-gray-200">
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('cover.jpeg'); background-size:cover">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
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
                                                    <i class="material-icons">email</i>
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
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input id="password" type="password" placeholder="Contraseña"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </span>
                                    <div class="row mb-0 pt-4 pb-4">
                                        <div class="col-md-12 justify-content-center d-flex">
                                            <button type="submit" class="btn btn-primary">
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
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-12 col-md-6 my-auto">
                            <div class="copyright text-center text-sm text-white text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart" aria-hidden="true"></i> by Montse Mtz Rmz
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
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
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
