<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FormaDePago
 *
 * @property $id_forma_pago
 * @property $descripcion_forma_pago
 * @property $created_at
 * @property $updated_at
 *
 * @property Factura[] $facturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FormaDePago extends Model
{
    
    static $rules = [
		'id_forma_pago' => 'required',
		'descripcion_forma_pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_forma_pago','descripcion_forma_pago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'cod_forma_pago', 'id_forma_pago');
    }
    

}
