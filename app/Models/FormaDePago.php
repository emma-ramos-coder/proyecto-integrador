<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaDePago extends Model
{
    use HasFactory;
    protected $fillable = [
        'desripcion_forma_pago'
    ];
    public function facturas(){
        return $this->hasMany(Factura::class);
    }    
}
