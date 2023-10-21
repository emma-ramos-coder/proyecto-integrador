<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleFactura
 *
 * @property $id
 * @property $cod_factura
 * @property $cod_articulo
 * @property $cantidad
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @property Articulo $articulo
 * @property Devolucion[] $devolucions
 * @property Factura $factura
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetalleFactura extends Model
{
    
    static $rules = [
		'cod_factura' => 'required',
		'cod_articulo' => 'required',
		'cantidad' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_factura','cod_articulo','cantidad','total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function articulo()
    {
        return $this->hasOne('App\Models\Articulo', 'id', 'cod_articulo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function devolucions()
    {
        return $this->hasMany('App\Models\Devolucion', 'cod_detalle_facturas', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function factura()
    {
        return $this->hasOne('App\Models\Factura', 'id', 'cod_factura');
    }
    

}
