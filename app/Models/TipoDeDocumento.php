<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDeDocumento extends Model
{
    use HasFactory;
    protected $fillable = [
        'desripcion'
    ];
    public function proveedors(){
        return $this->hasMany(Proveedor::class);
    }
    public function clientes(){
        return $this->hasMany(Cliente::class);
    }
}
