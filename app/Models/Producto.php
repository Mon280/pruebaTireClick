<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Caracteristica;
class Producto extends Model
{
    use HasFactory;

    public function caracteristicas()
    {
        return $this->hasMany(Caracteristica::class, 'id_producto', 'id');
    }
    public function carritos()
    {
        return $this->hasMany(Carrito::class);
    }
    public function ventas()
    {
        return $this->belongsToMany(Venta::class, 'productos_de_venta', 'id_producto', 'id_venta')
                    ->withPivot('cantidad', 'precio_unitario');
    }
}
