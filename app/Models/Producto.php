<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'codigo_producto',
        'nombre_producto',
        'precio_producto',
        'stock',
        'estado'
    ];

    public function detalle_ventas()
    {
        return $this->hasMany(DetalleVenta::class, 'id_producto', 'id_producto');
    }
}