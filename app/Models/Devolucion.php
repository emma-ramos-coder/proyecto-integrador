<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Devolucion
 *
 * @property $id
 * @property $cod_detalle_facturas
 * @property $motivo
 * @property $fecha_devolucion
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleFactura $detalleFactura
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Devolucion extends Model
{
    
    static $rules = [
		'cod_detalle_facturas' => 'required',
		'motivo' => 'required',
		'fecha_devolucion' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_detalle_facturas','motivo','fecha_devolucion','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detalleFactura()
    {
        return $this->hasOne('App\Models\DetalleFactura', 'id', 'cod_detalle_facturas');
    }
    

}
