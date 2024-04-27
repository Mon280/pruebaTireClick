@extends('layouts.admin')

@section('content')
    <style>
        input,
        textarea {
            border-radius: 10px !important
        }
    </style>
     <div class="container-fluid p-0 m-0 pb-4">
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-5">
                    <h4 class="page-title">Productos</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                <li class="breadcrumb-item"><a>Productos</a></li>
                            </ol>
                            
                        </nav>
                    </div>
                </div>
                <div class="col-7">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container justify-content-center align-items-center d-flex w-100"
                style="background-image: '{{ asset('assets/morado.jpeg') }}'); height:200px;background-repeat:no-repeat;background-size:cover;background-position: center;border-radius:30px">
                <div class="row">
                    <h1 class="text-white text-center" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);">Productos</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 p-4">
            <h4 style="color:#555555">Acciones</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card p-5">
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3 justify-content-end d-flex">
                        <button data-toggle="modal" data-target="#modalAgregarProducto" class="btn btn-primary"
                            style="background-color: #4040b1;border:none">Agregar producto</button>

                    </div>
                </div>
                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Marca</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td> {{ $producto->id }}</td>
                                <td> {{ $producto->nombre }}</td>
                                <td> {{ $producto->stock }}</td>
                                <td> ${{ substr($producto->precio, 0, 30) }}</td>
                                <td> {{ $producto->marca }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4">
                                            {{-- Detalle --}}
                                            <button type="button" class="btn btn-primary yellow-rainbow m-1"
                                                style="border-radius: 5px;background-color:#4040b1;border:none"
                                                data-toggle="modal" data-target="#myModal{{ $producto->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                    x="0px" y="0px" viewBox="0 0 512.19 512.19"
                                                    style="enable-background:new 0 0 512.19 512.19;" xml:space="preserve"
                                                    width="20" height="20">
                                                    <g>
                                                        <circle fill="white" cx="256.095" cy="256.095" r="85.333" />
                                                        <path fill="white"
                                                            d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z" />
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="col-md-4">
                                            {{-- Editar --}}
                                            <a href="{{ route('productos.edit', [$producto->id]) }}"
                                                class="btn btn-warning yellow-rainbow m-1"style="border-radius: 5px">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path fill="white"
                                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <form id="form-{{ $producto->id }}"
                                                action="{{ route('productos.destroy', $producto->id) }}" method="post"
                                                style="display: inline;">
                                                {{ csrf_field() }}
                                                @method('delete')

                                                <button type="submit" class="btn btn-danger red-rainbow m-1"
                                                    style="border-radius: 5px"
                                                    onclick="return eliminar(event, {{ $producto->id }});">
                                                    <i class="fa fa-trash fa-lg"
                                                        style="color: white;width:20px; height:20px" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="myModal{{ $producto->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold">
                                                Información del producto {{ $producto->nombre }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body  p-4">
                                            <p><strong>ID:</strong> {{ $producto->id }}</p>
                                            <p><strong>Nombre:</strong><br> {{ $producto->nombre }}</p>
                                            <p><strong>Descripción:</strong><br> {{ $producto->descripcion }}</p>
                                            <p><strong>Stock:</strong><br> {{ $producto->stock }}</p>
                                            <p><strong>Precio:</strong><br> ${{ $producto->precio }}</p>
                                            <p><strong>Marca:</strong><br> {{ $producto->marca }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Stock</th>

                            <th>Precio</th>
                            <th>Marca</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
    <!-- Modal para agregar producto -->
    <div class="modal fade" id="modalAgregarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form action="{{ route('productos.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción:</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="stock">Stock:</label>
                                    <input type="number" class="form-control" id="stock" name="stock" required>
                                </div>
                                <div class="form-group">
                                    <label for="precio">Precio:</label>
                                    <input type="text" class="form-control" id="precio" name="precio" required
                                        step="0.01">
                                </div>

                                <div class="form-group">
                                    <label for="marca">Marca:</label>
                                    <input type="text" class="form-control" id="marca" name="marca" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="caracteristicasContainer" class="mt-3">
                                    <button id="agregarCaracteristicaBtn" class="btn btn-primary">Agregar
                                        Característica</button>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function agregarCaracteristica() {
            var nombreDiv = document.createElement('div');
            nombreDiv.classList.add('col-md-12');

            var descripcionDiv = document.createElement('div');
            descripcionDiv.classList.add('col-md-12');

            var nombreInput = document.createElement('input');
            nombreInput.type = 'text';
            nombreInput.name = 'nombre_caracteristica[]';
            nombreInput.placeholder = 'Nombre';
            nombreInput.classList.add('form-control', 'mb-2', 'mt-2');
            nombreInput.required = true;

            var descripcionInput = document.createElement('textarea');
            descripcionInput.name = 'descripcion_caracteristica[]';
            descripcionInput.placeholder = 'Descripción';
            descripcionInput.classList.add('form-control', 'mb-2', 'mt-2');
            descripcionInput.required = true;

            // Agregar campos de entrada a los divs 
            nombreDiv.appendChild(nombreInput);
            descripcionDiv.appendChild(descripcionInput);

            // Crear div para contener los divs
            var caracteristicaDiv = document.createElement('div');
            caracteristicaDiv.classList.add('row', 'caracteristica');

            // Agregar divs de nombre y descripción al div de la característica
            caracteristicaDiv.appendChild(nombreDiv);
            caracteristicaDiv.appendChild(descripcionDiv);

            document.getElementById('caracteristicasContainer').appendChild(caracteristicaDiv);
        }

        document.getElementById('agregarCaracteristicaBtn').addEventListener('click', function() {
            agregarCaracteristica();
        });
    </script>




    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
                style: 'bootstrap'
            });
        });
    </script>
    <script>
        function eliminar(event, productoId) {
            event.preventDefault();

            Swal.fire({
                title: '¡Atención!',
                text: '¿Seguro que quieres eliminar el producto?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d63030',
                cancelButtonColor: '#b0b0b0',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    Swal.fire({
                        title: 'Eliminando...',
                        text: 'Por favor, espera un momento',
                        icon: 'info',
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        willOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    document.getElementById('form-' + productoId).submit();
                }
            });
        }
    </script>
@endsection
