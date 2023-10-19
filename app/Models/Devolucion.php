<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Devolucion
 *
 * @property $cod_detalle_factura
 * @property $cod_detalle_articulo
 * @property $motivo
 * @property $fecha_devolucion
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleFactura $detalleFactura
 * @property DetalleFactura $detalleFactura
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Devolucion extends Model
{
    
    static $rules = [
		'cod_detalle_factura' => 'required',
		'cod_detalle_articulo' => 'required',
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
    protected $fillable = ['cod_detalle_factura','cod_detalle_articulo','motivo','fecha_devolucion','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detalleFactura()
    {
        return $this->hasOne('App\Models\DetalleFactura', 'cod_factura', 'cod_detalle_factura');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detalleFactura()
    {
        return $this->hasOne('App\Models\DetalleFactura', 'cod_articulo', 'cod_detalle_articulo');
    }
    

}
