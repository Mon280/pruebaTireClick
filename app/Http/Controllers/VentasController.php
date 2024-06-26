<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Producto;
use App\Models\Carrito;
use App\Models\ProductoDeVenta;


class VentasController extends Controller
{
    public function index()
    {
        $ventas = Venta::orderBy('created_at', 'desc')->get();
    
        $productosDeVenta = ProductoDeVenta::all();
        return view('panel.ventas.index')->with('ventas', $ventas)->with('productosDeVenta', $productosDeVenta);
    }
    
    
    
    public function store(Request $request)
    {
        $request->validate([
            'correo_cliente' => 'required|email',
            'precio_total' => 'required|numeric|min:0',
            'productos' => 'required|array',
            'productos.*.id_producto' => 'required|exists:productos,id',
            'productos.*.cantidad' => 'required|integer|min:1',
            'productos.*.precio_unitario' => 'required|numeric|min:0',
        ]);

        $venta = Venta::create([
            'correo_cliente' => $request->correo_cliente,
            'precio_total' => $request->precio_total,
        ]);

        foreach ($request->productos as $producto) {
            $productoVendido = Producto::findOrFail($producto['id_producto']); 
            $cantidadVendida = $producto['cantidad'];

            $productoVendido->stock -= $cantidadVendida;

            $productoVendido->save();

            ProductoDeVenta::create([
                'id_producto' => $producto['id_producto'],
                'id_venta' => $venta->id,
                'cantidad' => $cantidadVendida,
                'precio_unitario' => $producto['precio_unitario'],
            ]);
        }

        Carrito::truncate(); 

        return redirect()->route('carrito.index')->with('venta_success', '¡Compra realizada con éxito!');
    }


}
