<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $no_documento
 * @property $cod_tipo_documento
 * @property $nombre
 * @property $apellido
 * @property $nombre_comercial
 * @property $direccion
 * @property $cod_ciudad
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Articulo[] $articulos
 * @property Ciudad $ciudad
 * @property TipoDeDocumento $tipoDeDocumento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    
    static $rules = [
		'no_documento' => 'required',
		'cod_tipo_documento' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'nombre_comercial' => 'required',
		'direccion' => 'required',
		'cod_ciudad' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['no_documento','cod_tipo_documento','nombre','apellido','nombre_comercial','direccion','cod_ciudad','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articulos()
    {
        return $this->hasMany('App\Models\Articulo', 'cod_proveedor', 'no_documento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudad()
    {
        return $this->hasOne('App\Models\Ciudad', 'codigo_ciudad', 'cod_ciudad');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoDeDocumento()
    {
        return $this->hasOne('App\Models\TipoDeDocumento', 'id_tipo_documento', 'cod_tipo_documento');
    }
    

}
