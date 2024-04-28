<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;

class CarritoController extends Controller
{
    public function index()
    {
        $currentPage = 'productos';

        $productosEnCarrito = Carrito::with('producto')->get();
    
        $precioTotal = 0; 
        foreach ($productosEnCarrito as $item) {
            $precioTotal += $item->producto->precio * $item->cantidad;
        }
    
        return view('landing.carrito', compact('productosEnCarrito', 'precioTotal'))->with('currentPage',$currentPage);
    }

    public function agregar(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
        ]);
    
        $productoExistente = Carrito::where('producto_id', $request->producto_id)->first();
    
        if ($productoExistente) {
            $productoExistente->update([
                'cantidad' => $productoExistente->cantidad + $request->cantidad,
            ]);
        } else {
            Carrito::create([
                'producto_id' => $request->producto_id,
                'cantidad' => $request->cantidad,
            ]);
        }
    
        return redirect()->route('carrito.index')->with('success', 'Producto agregado al carrito correctamente.');
    }
    
    
    public function mostrar()
    {
        $currentPage = 'productos';
        $productosEnCarrito = Carrito::all();

        return view('carrito.mostrar', compact('productosEnCarrito'))->with('currentPage',$currentPage);
    }


    public function remover($carrito_id)
    {
        $currentPage = 'productos';
        
        $carrito = Carrito::find($carrito_id);
    
        if ($carrito) {
            $carrito->delete();
            \Log::info('Instancia del carrito eliminada correctamente: ' . $carrito_id);
            return redirect()->route('carrito.index')->with('success', 'Instancia del carrito eliminada correctamente.')->with('currentPage', $currentPage);
        } else {
            \Log::warning('No se encontró la instancia del carrito: ' . $carrito_id);
            return redirect()->route('carrito.index')->with('error', 'No se encontró la instancia del carrito.');
        }
    }
    
    
    public function vaciar()
    {
        $currentPage = 'productos';
        Carrito::truncate();

        return redirect()->route('carrito.index')->with('success', 'Carrito vaciado correctamente.')->with('currentPage',$currentPage);
    }
}
