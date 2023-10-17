<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    use HasFactory;
    protected $fillable = [        
        'cantidad',
        'total'
    ];
    public function facturas(){
        return $this->belongsTo(Factura::class);
    }
    public function articulos(){
        return $this->belongsTo(Articulo::class);
    }  
    public function devolucion(){
        return $this->hasMany(Devolucion::class);
    }
}
