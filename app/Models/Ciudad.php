<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudad
 *
 * @property $id
 * @property $nombre_ciudad
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @property Proveedor[] $proveedors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ciudad extends Model
{
    
    static $rules = [
		'nombre_ciudad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_ciudad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'cod_ciudad', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proveedors()
    {
        return $this->hasMany('App\Models\Proveedor', 'cod_ciudad', 'id');
    }
    

}
