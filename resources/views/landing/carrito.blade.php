@extends('layouts.landing')

@section('content')
    <style>
        .card-img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .img-cover {
            background-image: url('{{ asset('assets/index/carrito2.jpg') }}');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 400px;
        }

        @media only screen and (max-width: 768px) {
            .card-img {
                width: 80px;
                height: auto;
                object-fit: cover;
            }
        }
    </style>
    <div class="container-fluid p-0 m-0">
        <div class="row p-0 m-0 justify-content-center d-flex align-items-center img-cover">
            <h1 class="carnas1 text-white text-center" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9); font-size: 50px;">
                Carrito de compras</h1>
        </div>
        <div class="page">


            <div class="container pt-5 ">
                @if (session('venta_success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('venta_success') }}
                    </div>
                @endif
                @if ($productosEnCarrito->isEmpty())
                    <div class="alert alert-info" role="alert">
                        El carrito está vacío
                    </div>
                @else
                    <form action="{{ route('carrito.vaciar') }}" method="POST" class="pb-4 justify-content-end d-flex">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning text-white">Vaciar Carrito</button>
                    </form>
                    @foreach ($productosEnCarrito as $item)
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2 col-4">
                                        <?php
                                        $randomImages = ['assets/index/dona-individual/dona1.png', 'assets/index/dona-individual/dona2.png', 'assets/index/dona-individual/dona4.png', 'assets/index/dona-individual/dona5.png', 'assets/index/dona-individual/dona6.png', 'assets/index/dona-individual/dona7.png', 'assets/index/dona-individual/dona8.png'];
                                        $randomImage = $randomImages[array_rand($randomImages)];
                                        ?>
                                        <img src="{{ asset($randomImage) }}" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-5 col-8">
                                        <h5 class="card-title">{{ $item->producto->nombre }}</h5>
                                        <p class="card-text">Cantidad: {{ $item->cantidad }}</p>
                                        <p class="card-text">Precio unitario: ${{ $item->producto->precio }}</p>
                                    </div>
                                    <div class="col-md-5 col-12">
                                        <p class="card-text">Precio total: ${{ $item->producto->precio * $item->cantidad }}
                                        </p>
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
                    <div class="container pt-4">
                        <h4>Precio Total: ${{ $precioTotal }}</h4>
                        <button id="btnPagar" class="btn btn-primary">Pagar</button>
                    </div>
                    <div class="container pt-4">
                        <form id="formPagar" method="POST" action="{{ route('ventas.store') }}">
                            @csrf
                            <input type="hidden" name="precio_total" value="{{ $precioTotal }}">
                            <input type="hidden" id="correo_cliente" name="correo_cliente">
                            @foreach ($productosEnCarrito as $item)
                                <input type="hidden" name="productos[{{ $item->producto->id }}][id_producto]"
                                    value="{{ $item->producto->id }}">
                                <input type="hidden" name="productos[{{ $item->producto->id }}][cantidad]"
                                    value="{{ $item->cantidad }}">
                                <input type="hidden" name="productos[{{ $item->producto->id }}][precio_unitario]"
                                    value="{{ $item->producto->precio }}">
                            @endforeach
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.getElementById('btnPagar').addEventListener('click', function() {
            Swal.fire({
                title: 'Ingrese su correo electrónico',
                input: 'email',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Pagar',
                showLoaderOnConfirm: true,
                preConfirm: (email) => {
                    document.getElementById('correo_cliente').value = email;
                    document.getElementById('formPagar').submit();
                },
                allowOutsideClick: () => !Swal.isLoading()
            });
        });
    </script>
@endsection
