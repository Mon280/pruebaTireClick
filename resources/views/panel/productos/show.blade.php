@extends('layouts.landing')

@section('content')
    <style>
        .card-img {
            width: 100%;
            height: auto;
            object-fit: cover;
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

        .img-cover {
            background-image: url('{{ asset('assets/index/donas7.jpg') }}');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 400px;
        }
    
    </style>
    <div class="container-fluid p-0 m-0">
        <div class="row p-0 m-0 justify-content-center d-flex align-items-center img-cover">
            <h1 class="carnas1  text-white text-center" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9); font-size: 50px;">
                Detalle de producto</h1>
        </div>
        <div class="page">

            <div class="row pt-5 pb-5">
                <div class="col-md-5 p-4" style="background-color: #b23d58;border-radius:30px">
                    <?php
                    $randomImages = ['assets/index/dona-individual/dona1.png', 'assets/index/dona-individual/dona2.png', 'assets/index/dona-individual/dona4.png', 'assets/index/dona-individual/dona5.png', 'assets/index/dona-individual/dona6.png', 'assets/index/dona-individual/dona7.png', 'assets/index/dona-individual/dona8.png'];
                    $randomImage = $randomImages[array_rand($randomImages)];
                    ?>
                    <img src="{{ asset($randomImage) }}" class="card-img" alt="...">
                </div>
                <div class="col-md-7  p-5 no-padding pad-20-lados pad-20-top">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="carnas1">{{ $producto->nombre }}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="carnas2">{{ $producto->descripcion }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="carnas1 p-0 m-0 pt-3">Características:</p>
                            <ul>
                                @foreach ($producto->caracteristicas as $caracteristica)
                                    <li>{{ $caracteristica->nombre_caracteristica }}:
                                        {{ $caracteristica->descripcion_caracteristica }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-6 pt-3">
                            <p class="carnas1 p-0 m-0 pt-3">Marca:</p>
                            <p class="carnas2">{{ $producto->marca }}</p>
                            <p class="carnas1 p-0 m-0 ">Stock:</p>
                            <p class="carnas2">{{ $producto->stock }}</p>
                            <h5 class="carnas2" style="color: #b23d58">Precio: ${{ $producto->precio }}</h5>
                            @if ($producto->stock > 0)
                                <!-- Formulario para agregar al carrito -->
                                <form action="{{ route('carrito.agregar') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                    <div class="form-group">
                                        <label for="cantidad">Cantidad:</label>
                                        <input type="number" id="cantidad" name="cantidad" class="form-control"
                                            min="1" max="{{ $producto->stock }}" value="1">
                                    </div>
                                    <button type="submit" class="btn btn-primary mi-btn">Agregar al carrito</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
