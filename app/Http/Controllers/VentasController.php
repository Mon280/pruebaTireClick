<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\ProductoDeVenta;


class VentasController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'correo_cliente' => 'required|email',
            'precio_total' => 'required|numeric|min:0',
            'productos' => 'required|array',
            'productos.*.id' => 'required|exists:productos,id',
            'productos.*.cantidad' => 'required|integer|min:1',
            'productos.*.precio_unitario' => 'required|numeric|min:0',
        ]);

        // Crear una nueva venta
        $venta = Venta::create([
            'correo_cliente' => $request->correo_cliente,
            'precio_total' => $request->precio_total,
        ]);

        // Guardar los productos vendidos en la tabla productos_de_venta
        foreach ($request->productos as $producto) {
            ProductoDeVenta::create([
                'id_producto' => $producto['id'],
                'id_venta' => $venta->id,
                'cantidad' => $producto['cantidad'],
                'precio_unitario' => $producto['precio_unitario'],
            ]);
        }

        // Retornar una respuesta satisfactoria
        return response()->json(['message' => 'Venta realizada con éxito'], 201);
    }
}
