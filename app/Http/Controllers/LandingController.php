<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

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
        $currentPage = 'productos-cliente';

        return view('landing.inicio')->with('productos', $productos)->with('currentPage', $currentPage);
    }
    public function carrito()
    {
        $productos = Producto::all();
        $currentPage = 'carrito';

        return view('landing.inicio')->with('productos', $productos)->with('currentPage', $currentPage);
    }
}
