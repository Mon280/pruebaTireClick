@extends('layouts.landing')

@section('content')
    <style>
        .page {
            padding-left: 80px;
            padding-right: 80px;
        }

        .img-cover {
            background-image: url('{{ asset('assets/index/donas7.jpg') }}');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 400px;
        }

        .card-img {
            width: 250px;
            height: auto;
            object-fit: cover;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
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
    </style>
    <div class="container-fluid p-0 m-0">
        <div class="row p-0 m-0 justify-content-center d-flex align-items-center img-cover">
            <h1 class="carnas1  text-white text-center" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9); font-size: 50px;">Nuestros
                productos</h1>
        </div>
        <div class="page">
            <!-- Formulario de búsqueda -->
            <div class="row justify-content-end mb-4">
                <div class="col-md-12 p-4" style="background-color: #b23d58; border-radius:20px;margin-top:-50px">
                    <form id="searchForm" class="form-inline w-100">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" placeholder="Escribe el nombre del producto"
                                id="searchInput">
                            <div class="input-group-append" style="background-color: white">
                                <button class="btn btn-outline-secondary" type="button" id="searchButton">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row pb-5 pt-4" id="productsList">
                @foreach ($productos as $producto)
                    <div class="col-md-4 pt-4 pb-4 col-12">
                        <div class="card h-100 pl-4 pr-4 pt-3 pb-3"
                            style="border-radius: 30px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
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
                                <h5 class="card-title carnas1">{{ $producto->nombre }}</h5>
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="card-text carnas2 p-0 m-0">Precio: ${{ $producto->precio }} mxn</p>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="card-text carnas2 p-0 m-0">Stock: {{ $producto->stock }}</p>

                                    </div>
                                </div>
                                @if ($producto->stock > 0)
                                <form action="{{ route('productos.show', ['slug' => $producto->slug, 'id' => $producto->id]) }}" method="GET">
                                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                    <button type="submit" class="btn btn-primary mi-btn">Ver producto</button>
                                </form>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('searchButton').addEventListener('click', function() {
                filterProducts();
            });

            document.getElementById('searchInput').addEventListener('keyup', function(event) {
                filterProducts();
            });

            function filterProducts() {
                var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById('searchInput');
                filter = input.value.toUpperCase();
                ul = document.getElementById("productsList");
                li = ul.getElementsByClassName('col-md-4');
                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("h5")[0];
                    txtValue = a.textContent || a.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                    } else {
                        li[i].style.display = "none";
                    }
                }
            }
        });
    </script>
@endsection
