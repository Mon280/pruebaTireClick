@extends('layouts.landing')

@section('content')
    <style>
        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .img-swiper {
            width: 100%;
            height: 600px;
            background-size: cover;
            background-position: center;
        }

        .page {
            padding-left: 80px;
            padding-right: 80px;

        }

        .tam-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            object-position: center;
            border-radius: 30px
        }

        .mi-btn {
            background-color: #b23d58;
            color: white;
            border: 1px solid white;
            border-radius: 20px;
        }

        .mi-btn:hover {
            background-color: #3b8fb6;
            border: 1px solid white
        }

        .card-img {
            width: 250PX;
            height: auto;
            object-fit: cover;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }

        .row-de-imagen {
            width: 100%;
            height: 350px;
            background-size: cover;
            background-position: center;
            background-image: url('{{ asset('assets/index/dona17.jpg') }}')
        }

        .imagen-contacto {
            width: 100%;
            height: 450px;
            object-fit: cover;
            object-position: bottom center;
            border-radius: 30px
        }

        :root {
            --swiper-navigation-sides-offset: 50px;
            --swiper-navigation-color: white;
            --swiper-pagination-color: #ffffff;
        }

        @media only screen and (max-width: 768px) {
            .img-swiper {
                height: 400px;
            }
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 m-0">
                <swiper-container class="mySwiper w-100" loop="true" navigation="true" space-between="20" autoplay="true"
                    speed="5000" style="position: relative;z-index:1">
                    <swiper-slide>
                        <div class="img-swiper justify-content-center align-items-center d-flex"
                            style="background-image: url('{{ asset('assets/index/donas5.jpg') }}')">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <h1 class="carnas1 text-white font-30"
                                        style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);font-size:50px">Dyzer Donuts<br>
                                        Donas
                                        Artesanales, Sabores Auténticos.</h1>
                                </div>
                                <div class="row justify-content-center pt-4">
                                    <a href="/productos-cliente" class="carnas2 btn btn-primary mi-btn">Conoce nuestros
                                        productos</a>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="img-swiper justify-content-center align-items-center d-flex"
                            style="background-image: url('{{ asset('assets/index/donas7.jpg') }}')">
                            <div class="container pl-4 pr-4">
                                <div class="row justify-content-center">
                                    <h1 class="carnas1 text-white font-30"
                                        style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);font-size:50px">Donuts
                                        Dyzer<br>Haz de
                                        cada día una fiesta.</h1>
                                </div>
                                <div class="row justify-content-center pt-4">
                                    <a href="/productos-cliente" class="carnas2 btn btn-primary mi-btn">Conoce nuestros
                                        productos</a>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="img-swiper justify-content-center align-items-center d-flex"
                            style="background-image: url('{{ asset('assets/index/donas13.jpg') }}')">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <h1 class="carnas1 text-white font-30"
                                        style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);font-size:50px">Dyzer Donuts <br>
                                        Descubre
                                        el arte de lo dulce con nosotros.</h1>
                                </div>
                                <div class="row justify-content-center pt-4">
                                    <a href="/productos-cliente" class="carnas2 btn btn-primary mi-btn">Conoce nuestros
                                        productos</a>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="img-swiper justify-content-center align-items-center d-flex"
                            style="background-image: url('{{ asset('assets/index/donas9.jpg') }}')">
                            <div class="container pl-4 pr-4">
                                <div class="row justify-content-center">
                                    <h1 class="carnas1 text-white font-30"
                                        style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);font-size:50px">Dyzer Donuts <br>
                                        Donas
                                        para alegrar tu día.</h1>
                                </div>
                                <div class="row justify-content-center pt-4">
                                    <a href="/productos-cliente" class="carnas2 btn btn-primary mi-btn">Conoce nuestros
                                        productos</a>
                                </div>
                            </div>

                        </div>
                    </swiper-slide>

                </swiper-container>
            </div>
        </div>
        <div class="page">
            <div class="row pad-20-top">
                <div class="col-md-5 no-padding pt-5">
                    <img src="{{ asset('assets/index/donas14.jpg') }}" class="w-100 tam-img" alt="">
                </div>
                <div class="col-md-7 p-5 no-padding">
                    <h3 class="carnas1 pt-3" style="color:#b23d58">Sobre nosotros</h3>
                    <p class="p-0 m-0 carnas2 pt-3" style="font-size: 18px">Desde 2015, en Dyzer Donuts nos dedicamos a
                        crear experiencias dulces y
                        memorables
                        para nuestros clientes. Con una pasión arraigada por la calidad y la creatividad, hemos estado
                        sirviendo las donas más deliciosas y frescas durante años. Nuestro compromiso con la excelencia se
                        refleja en cada detalle: desde la cuidadosa selección de ingredientes de primera calidad hasta la
                        elaboración artesanal de nuestras recetas únicas.<br><br>

                        En Dyzer Donuts, no solo hacemos donas; creamos momentos de felicidad y placer para todos aquellos
                        que nos eligen. Nuestra historia está impregnada de dedicación y amor por lo que hacemos, y nuestro
                        objetivo es seguir siendo un lugar donde cada dona cuente una historia de sabor y alegría.<br><br>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="carnas1 pt-3 text-center" style="color:#b23d58">Conoce nuestros productos</h3>
                </div>
            </div>
            <div class="row pt-4 pb-4">
                <div class="col-md-12 no-padding">
                    <div class="row">
                        @foreach ($productos->random(3) as $producto)
                            <div class="col-md-4 col-12 h-100">
                                <div class="card margin-20-top" 
                                    style="border-radius: 30px;   box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                                    <div class="row">
                                        <div class="col-md-12 justify-content-center d-flex">
                                            <?php
                                            $randomImages = ['assets/index/dona-individual/dona1.png', 'assets/index/dona-individual/dona2.png', 'assets/index/dona-individual/dona4.png', 'assets/index/dona-individual/dona5.png', 'assets/index/dona-individual/dona6.png', 'assets/index/dona-individual/dona7.png', 'assets/index/dona-individual/dona8.png'];
                                            $randomImage = $randomImages[array_rand($randomImages)];
                                            ?>
                                            <img src="{{ asset($randomImage) }}" class="card-img" alt="...">
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                                        <p class="card-text">Precio: ${{ $producto->precio }} mxn</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row justify-content-center pt-4">
                        <a href="/productos-cliente" class="carnas2 btn btn-primary mi-btn pl-4 pr-4">Ver catálogo</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid p-0 m-0 pt-4 pb-4">
        <div class="row p-0 m-0  row-de-imagen">

        </div>
    </div>
    <div class="page">

        <div class="row pt-4 pb-5">
            <div class="col-md-6 pt-4">
                <img src="{{ asset('assets/index/donas15.jpg') }}" class="imagen-contacto" alt="">
            </div>
            <div class="col-md-6 pt-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="carnas1 pt-3" style="color:#b23d58">Te gustaría que trabaje en TireClick? Contáctame
                            </h3>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="carnas2">Estoy aquí para ayudarte! Contáctame hoy mismo y descubre<br> cómo podemos
                                hacer
                                realidad tus ideas.</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-9 pt-3">
                            <div class="container p-4" style="background-color: #b23d58;border-radius:30px">
                                <div class="row">
                                    <div class="col-md-12 justify-content-center d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="25" height="25">
                                            <path fill="white"
                                                d="M23,11a1,1,0,0,1-1-1,8.008,8.008,0,0,0-8-8,1,1,0,0,1,0-2A10.011,10.011,0,0,1,24,10,1,1,0,0,1,23,11Zm-3-1a6,6,0,0,0-6-6,1,1,0,1,0,0,2,4,4,0,0,1,4,4,1,1,0,0,0,2,0Zm2.183,12.164.91-1.049a3.1,3.1,0,0,0,0-4.377c-.031-.031-2.437-1.882-2.437-1.882a3.1,3.1,0,0,0-4.281.006l-1.906,1.606A12.784,12.784,0,0,1,7.537,9.524l1.6-1.9a3.1,3.1,0,0,0,.007-4.282S7.291.939,7.26.908A3.082,3.082,0,0,0,2.934.862l-1.15,1C-5.01,9.744,9.62,24.261,17.762,24A6.155,6.155,0,0,0,22.183,22.164Z" />
                                        </svg>

                                    </div>
                                    <div class="col-md-12 pt-3 justify-content-center d-flex">
                                        <a href="tel:4444325572" style="text-decoration: none">
                                            <p class="p-0 m-0 text-white">+52 444 432 5572</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-9 pt-3">
                            <div class="container p-4" style="background-color: #b23d58;border-radius:30px">
                                <div class="row">
                                    <div class="col-md-12 justify-content-center d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Filled" viewBox="0 0 24 24"
                                            width="25" height="25">
                                            <path fill="white"
                                                d="M23.954,5.542,15.536,13.96a5.007,5.007,0,0,1-7.072,0L.046,5.542C.032,5.7,0,5.843,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V6C24,5.843,23.968,5.7,23.954,5.542Z" />
                                            <path fill="white"
                                                d="M14.122,12.546l9.134-9.135A4.986,4.986,0,0,0,19,1H5A4.986,4.986,0,0,0,.744,3.411l9.134,9.135A3.007,3.007,0,0,0,14.122,12.546Z" />
                                        </svg>


                                    </div>
                                    <div class="col-md-12 pt-3 justify-content-center d-flex">
                                        <a href="mailto:montserrat.mr28@gmail.com" style="text-decoration: none">
                                            <p class="p-0 m-0 text-white">montserrat.mr28@gmail.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
@endsection
