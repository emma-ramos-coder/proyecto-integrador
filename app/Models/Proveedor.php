<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_tipo_documento',
        'nombre',
        'apellido',
        'nombre_comercial',
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
    public function articulos(){
        return $this->hasMany(Articulo::class);
    }
}
