<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $fillable = [        
        'cod_cliente',
        'nombre_empleado',
        'fecha_facturacion',
        'cod_forma_pago',
        'total_factura',
        'iva'
    ];
    public function clientes(){
        return $this->belongsTo(Cliente::class);
    }
    public function forma_de_pagos(){
        return $this->belongsTo(FormaDePago::class);
    }  
    public function detalle_facturas(){
        return $this->hasMany(DetalleFactura::class);
    }
}
