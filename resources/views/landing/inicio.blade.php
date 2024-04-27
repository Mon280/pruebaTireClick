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

        .mi-btn{
            background-color: #cea5b5;
            color: white;
            border: 1px solid white
        }
        .mi-btn:hover{
            background-color: #3b8fb6;
            border: 1px solid white


        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 m-0">

                <swiper-container class="mySwiper w-100" loop="true" navigation="true" space-between="20" autoplay="true"
                    speed="5000">
                    <swiper-slide>
                        <div class="img-swiper justify-content-center align-items-center d-flex"
                            style="background-image: url('{{ asset('assets/index/donas5.jpg') }}')">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <h1 class="carnas1 text-white"
                                        style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);font-size:50px">Donuts Dyzer<br>
                                        Donas
                                        Artesanales, Sabores Auténticos.</h1>
                                </div>
                                <div class="row justify-content-center pt-4">
                                    <a class="carnas2 btn btn-primary mi-btn">Conoce nuestros productos</a>
                                </div>
                            </div>

                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="img-swiper justify-content-center align-items-center d-flex"
                            style="background-image: url('{{ asset('assets/index/donas7.jpg') }}')">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <h1 class="carnas1 text-white"
                                        style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);font-size:50px">Donuts Dyzer<br>Haz de
                                        cada día una fiesta.</h1>
                                </div>
                                <div class="row justify-content-center pt-4">
                                    <a href="/productos" class="carnas2 btn btn-primary mi-btn">Conoce nuestros productos</a>
                                </div>
                            </div>

                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="img-swiper justify-content-center align-items-center d-flex"
                            style="background-image: url('{{ asset('assets/index/donas13.jpg') }}')">
                            <h1 class="carnas1 text-white"
                                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);font-size:50px">Donuts Dyzer<br> Descubre
                                el arte de lo dulce con nosotros.</h1>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="img-swiper justify-content-center align-items-center d-flex"
                            style="background-image: url('{{ asset('assets/index/donas9.jpg') }}')">
                            <h1 class="carnas1 text-white"
                                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);font-size:50px">Donuts Dyzer<br> Donas
                                para alegrar tu día.</h1>

                        </div>
                    </swiper-slide>

                </swiper-container>
            </div>
        </div>
        <div class="page">
            <div class="row ">
                <div class="col-md-5 pt-5">
                    <img src="{{ asset('assets/index/donas14.jpg') }}" class="w-100 tam-img" alt="">
                </div>
                <div class="col-md-7 p-5">
                    <h3 class="carnas1 pt-3" style="color:#3b8fb6">Sobre nosotros</h3>
                    <p class="p-0 m-0 carnas2 pt-3" style="font-size: 18px">Desde 2015, en Donuts Dyzer nos dedicamos a crear experiencias dulces y
                        memorables
                        para nuestros clientes. Con una pasión arraigada por la calidad y la creatividad, hemos estado
                        sirviendo las donas más deliciosas y frescas durante años. Nuestro compromiso con la excelencia se
                        refleja en cada detalle: desde la cuidadosa selección de ingredientes de primera calidad hasta la
                        elaboración artesanal de nuestras recetas únicas.<br><br>

                        En Donuts Dyzer, no solo hacemos donas; creamos momentos de felicidad y placer para todos aquellos
                        que nos eligen. Nuestra historia está impregnada de dedicación y amor por lo que hacemos, y nuestro
                        objetivo es seguir siendo un lugar donde cada dona cuente una historia de sabor y alegría.<br><br>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="carnas1 pt-3 text-center" style="color:#3b8fb6">Conoce nuestros productos</h3>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
@endsection
