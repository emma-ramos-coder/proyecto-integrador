<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoArticulo
 *
 * @property $id_tipo_articulo
 * @property $descripcion_articulo
 * @property $created_at
 * @property $updated_at
 *
 * @property Articulo[] $articulos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoArticulo extends Model
{
    
    static $rules = [
		'id_tipo_articulo' => 'required',
		'descripcion_articulo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo_articulo','descripcion_articulo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articulos()
    {
        return $this->hasMany('App\Models\Articulo', 'cod_tipo_articulo', 'id_tipo_articulo');
    }
    

}
