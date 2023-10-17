<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $fillable = [        
        'descripcion',
        'precio_venta',
        'precio_costo',
        'stock',
        'cod_tipo_articulo',
        'cod_proveedor',
        'fecha_ingreso'
    ];
    public function tipo_articulos(){
        return $this->belongsTo(TipoArticulo::class);
    }
    public function proveedors(){
        return $this->belongsTo(Proveedor::class);
    }  
    public function detalle_facturas(){
        return $this->hasMany(DetalleFactura::class);
    }
}
