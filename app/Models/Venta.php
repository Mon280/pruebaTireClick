<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = ['correo_cliente', 'precio_total'];
    public function productosDeVenta()
    {
        return $this->hasMany(ProductoDeVenta::class, 'id_venta');
    }
}
