<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    use HasFactory;
    protected $fillable = [        
        'motivo',        
        'fecha_devolucion',
        'cantidad'
    ];
    public function detalle_facturas(){
        return $this->belongsTo(DetalleFactura::class);
    }    
}