@extends('layouts.landing')

@section('content')
<style>
      .card-img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

</style>
    <div class="container">
        <form action="{{ route('carrito.vaciar') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning">Vaciar Carrito</button>
        </form>
        <h1>Carrito de Compras</h1>
        @foreach ($productosEnCarrito as $item)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <?php
                            $randomImages = ['assets/index/dona-individual/dona1.png', 'assets/index/dona-individual/dona2.png', 'assets/index/dona-individual/dona4.png', 'assets/index/dona-individual/dona5.png', 'assets/index/dona-individual/dona6.png', 'assets/index/dona-individual/dona7.png', 'assets/index/dona-individual/dona8.png'];
                            $randomImage = $randomImages[array_rand($randomImages)];
                            ?>
                            <img src="{{ asset($randomImage) }}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-5">
                            <h5 class="card-title">{{ $item->producto->nombre }}</h5>
                            <p class="card-text">Cantidad: {{ $item->cantidad }}</p>
                            <p class="card-text">Precio unitario: ${{ $item->producto->precio }}</p>
                        
                        </div>
                        <div class="col-md-5">
                            <p class="card-text">Precio total: ${{ $item->producto->precio * $item->cantidad }}</p>
                        
                            <form action="{{ route('carrito.remover', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="carrito_id" value="{{ $item->id }}">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                 
                </div>
            </div>
        @endforeach
        <div class="row justify-content-end">
            <h4>Precio Total: ${{ $precioTotal }}</h4>
        </div>
     
    </div>
@endsection
