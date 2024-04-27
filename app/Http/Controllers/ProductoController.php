<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Caracteristica;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::orderBy('created_at', 'desc')->get();

        return view('panel.productos.index')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',

            'descripcion_caracteristica' => 'required|array',
            'descripcion_caracteristica.*' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'marca' => 'required|string|max:255',
            'nombre_caracteristica' => 'array',
            'nombre_caracteristica.*' => 'nullable|string|max:255',
        ]);

        // Crear un nuevo producto
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->slug = Str::slug($request->nombre, '-');
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->marca = $request->marca;
        $producto->save();

        // Verificar si se han enviado características
        if ($request->has('nombre_caracteristica')) {
            foreach ($request->nombre_caracteristica as $key => $nombre_caracteristica) {
                if (!empty($nombre_caracteristica)) {
                    $caracteristica = new Caracteristica();
                    $caracteristica->id_producto = $producto->id;
                    $caracteristica->nombre_caracteristica = $nombre_caracteristica;
                    $caracteristica->descripcion_caracteristica = isset($request->descripcion_caracteristica[$key]) ? $request->descripcion_caracteristica[$key] : null;
                    $caracteristica->save();
                }
            }
        }

        // Redireccionar a alguna vista o ruta después de guardar los datos
        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $producto = Producto::where('slug', $slug)->firstOrFail();

        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $producto = Producto::findOrFail($id);
            return view('panel.productos.edit', compact('producto'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'descripcion_caracteristica' => 'array',
            'descripcion_caracteristica.*' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'marca' => 'required|string|max:255',
            'nombre_caracteristica' => 'array',
            'nombre_caracteristica.*' => 'nullable|string|max:255',
        ]);

        // Buscar el producto 
        $producto = Producto::findOrFail($id);

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->slug = Str::slug($request->nombre, '-');
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->marca = $request->marca;
        $producto->save();

        // Verificar si se han enviado nuevas características
        if ($request->has('nombre_caracteristica')) {
            // Eliminar las características anteriores asociadas a este producto
            $producto->caracteristicas()->delete();

            foreach ($request->nombre_caracteristica as $key => $nombre_caracteristica) {
                if (!empty($nombre_caracteristica)) {
                    $caracteristica = new Caracteristica();
                    $caracteristica->id_producto = $producto->id;
                    $caracteristica->nombre_caracteristica = $nombre_caracteristica;
                    $caracteristica->descripcion_caracteristica = isset($request->descripcion_caracteristica[$key]) ? $request->descripcion_caracteristica[$key] : null;
                    $caracteristica->save();
                }
            }
        }

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $producto = Producto::findOrFail($id);
            $producto->delete();

            return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Error al eliminar el producto. Por favor, inténtelo de nuevo.']);
        }
    }
}
