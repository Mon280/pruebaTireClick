@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $producto->nombre }}</h1>
            <p>{{ $producto->descripcion }}</p>
            <p>Precio: ${{ $producto->precio }}</p>
            <p>Stock: {{ $producto->stock }}</p>
            <p>Marca: {{ $producto->marca }}</p>

            <!-- Agregar más detalles según sea necesario -->

            <form action="{{ route('comprar', $producto->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Comprar</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection
