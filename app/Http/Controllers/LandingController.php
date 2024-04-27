<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Caracteristica;


class LandingController extends Controller
{
    public function inicio()
    {
        $productos = Producto::all();
        $currentPage = 'inicio';

        return view('landing.inicio')->with('currentPage', $currentPage)->with('productos', $productos);
    }
    public function productosCliente()
    {
        $productos = Producto::all();
        $caracteristicas = Caracteristica::all();

        $currentPage = 'productos-cliente';

        return view('landing.productos-cliente')->with('productos', $productos)->with('currentPage', $currentPage)->with('caracteristicas', $caracteristicas);
    }
    public function carrito()
    {
        $productos = Producto::all();
        $currentPage = 'carrito';

        return view('landing.inicio')->with('productos', $productos)->with('currentPage', $currentPage);
    }
}
