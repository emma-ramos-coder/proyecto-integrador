<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Articulo
 *
 * @property $id_articulo
 * @property $descripcion
 * @property $precio_venta
 * @property $precio_costo
 * @property $stock
 * @property $cod_tipo_articulo
 * @property $cod_proveedor
 * @property $fecha_ingreso
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleFactura[] $detalleFacturas
 * @property Proveedor $proveedor
 * @property TipoArticulo $tipoArticulo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Articulo extends Model
{
    
    static $rules = [
		'id_articulo' => 'required',
		'descripcion' => 'required',
		'precio_venta' => 'required',
		'precio_costo' => 'required',
		'stock' => 'required',
		'cod_tipo_articulo' => 'required',
		'cod_proveedor' => 'required',
		'fecha_ingreso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_articulo','descripcion','precio_venta','precio_costo','stock','cod_tipo_articulo','cod_proveedor','fecha_ingreso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleFacturas()
    {
        return $this->hasMany('App\Models\DetalleFactura', 'cod_articulo', 'id_articulo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedor()
    {
        return $this->hasOne('App\Models\Proveedor', 'no_documento', 'cod_proveedor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoArticulo()
    {
        return $this->hasOne('App\Models\TipoArticulo', 'id_tipo_articulo', 'cod_tipo_articulo');
    }
    

}
