@extends('layouts.admin')

@section('content')
<div class="container-fluid p-0 m-0 pb-4">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a>Dashboard</a></li>
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
                style="background-image: url('{{ asset('assets/index/donas16.jpg') }}'); height:300px;background-repeat:no-repeat;background-size:cover;background-position: center;border-radius:30px">
                <div class="row">
                    <h1 class="text-white text-center" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);">¡Bienvenido
                        {{ Auth::user()->name }}! <br> Prueba técnica para TireClick</h1>
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
        <div class="col-md-3">
            <a href="/productos">
                <div class="card p-5 justify-content-center d-flex"style="background-color: #b48322;border-radius:30px">
                    <h4 class="text-white text-center p-0 m-0">Ver productos</h4>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a  href="{{ route('ventas-panel.index') }}">
                <div class="card p-5 justify-content-center d-flex"style="background-color: #b48322;border-radius:30px">
                    <h4 class="text-white text-center p-0 m-0">Ver ventas</h4>
                </div>
            </a>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
