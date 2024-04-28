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
                style="background-image: url({{ asset('assets/index/donas5.jpg') }}); height:200px;background-repeat:no-repeat;background-size:cover;background-position: center;border-radius:30px">
                <div class="row">
                    <h1 class="text-white text-center" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);">Ventas</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card p-5">
                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Correo cliente</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ventas as $venta)
                            <tr>
                                <td>{{ $venta->id }}</td>
                                <td>{{ $venta->correo_cliente }}</td>
                                <td>${{ $venta->precio_total }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary"    style="background-color: #ddabb4;border:none" data-toggle="modal"
                                        data-target="#myModal{{ $venta->id }}">
                                        Ver detalles
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Correo cliente</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    
    @foreach ($ventas as $venta)
        <!-- Modal para detalles de la venta -->
        <div class="modal fade" id="myModal{{ $venta->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Detalles de la venta {{ $venta->id }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unitario</th>
                                    <th>Precio Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($venta->productosDeVenta as $productoVenta)
                                    <tr>
                                        <td>{{ $productoVenta->producto->nombre }}</td>
                                        <td>{{ $productoVenta->cantidad }}</td>
                                        <td>${{ $productoVenta->precio_unitario }}</td>
                                        <td>${{ $productoVenta->precio_unitario * $productoVenta->cantidad }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    
@endsection
@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
                style: 'bootstrap'
            });
        });
    </script>
@endsection
