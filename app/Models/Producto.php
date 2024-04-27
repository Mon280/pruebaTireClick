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
}
