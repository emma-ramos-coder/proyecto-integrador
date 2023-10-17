<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoArticulo extends Model
{
    use HasFactory;
    protected $fillable = [
        'desripcion_articulo'
    ];
    public function articulos(){
        return $this->hasMany(Articulo::class);
    }    
}
