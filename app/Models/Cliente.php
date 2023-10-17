<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_tipo_documento',
        'nombres',
        'apellidos',
        'direccion',
        'cod_ciudad',
        'telefono'
    ];
    public function tipo_de_documentos(){
        return $this->belongsTo(TipoDeDocumento::class);
    }
    public function ciudads(){
        return $this->belongsTo(Ciudad::class);
    }  
    public function facturas(){
        return $this->hasMany(Factura::class);
    }
}
