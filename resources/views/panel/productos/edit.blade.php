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
                    <h4 class="page-title">Editar producto</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/productos">Productos</a></li>
                                <li class="breadcrumb-item"><a >Editar producto</a></li>
                            </ol>
                            
                        </nav>
                    </div>
                </div>
                <div class="col-7">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header" style="background-color: #4040b1">
                <h2 class="text-white p-0 m-0">Editar producto #{{ $producto->id }}</h2>

            </div>
            <div class="card-body p-4">
                <form action="{{ route('productos.update', $producto->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    value="{{ $producto->nombre }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="precio">Precio:</label>
                                <input type="text" class="form-control" id="precio" name="precio"
                                    value="{{ $producto->precio }}" required step="0.01">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="stock">Stock:</label>
                                <input type="number" class="form-control" id="stock" name="stock"
                                    value="{{ $producto->stock }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" rows="5" id="descripcion" name="descripcion" required>{{ $producto->descripcion }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca:</label>
                        <input type="text" class="form-control" id="marca" name="marca"
                            value="{{ $producto->marca }}" required>
                    </div>
                    {{-- Mostrar características si existen --}}
                    <div class="row pb-4">
                        <div class="col-md-6 ">
                            <div class="container p-4"style="background-color: #f2f2f2; border-radius:10px">
                                @if ($producto->caracteristicas->isNotEmpty())
                                    <p>Características anteriores:</p>
                                    <ul>
                                        @foreach ($producto->caracteristicas as $caracteristica)
                                            <li>{{ $caracteristica->nombre_caracteristica }}:
                                                {{ $caracteristica->descripcion_caracteristica }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div id="caracteristicasContainer" class="mt-3">
                                <button id="agregarCaracteristicaBtn" class="btn btn-primary"
                                    style="background-color: #0c0832;border:none">Agregar característica</button>

                            </div>
                        </div>
                    </div>

                    <a href="/productos" class="btn btn-primary" style="border:1px solid #4040b1;background:transparent;color:#4040b1">Cancelar</a>
                    <button type="submit" class="btn btn-primary" style="background-color: #4040b1;border:none">Guardar
                        Cambios</button>
                </form>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
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
@endsection
