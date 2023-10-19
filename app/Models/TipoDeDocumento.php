<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoDeDocumento
 *
 * @property $id_tipo_documento
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @property Proveedor[] $proveedors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoDeDocumento extends Model
{
    
    static $rules = [
		'id_tipo_documento' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo_documento','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'cod_tipo_documento', 'id_tipo_documento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proveedors()
    {
        return $this->hasMany('App\Models\Proveedor', 'cod_tipo_documento', 'id_tipo_documento');
    }
    

}
