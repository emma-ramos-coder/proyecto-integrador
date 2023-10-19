<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $num_factura
 * @property $cod_cliente
 * @property $nombre_empleado
 * @property $fecha_facturacion
 * @property $cod_forma_pago
 * @property $total_factura
 * @property $iva
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property DetalleFactura $detalleFactura
 * @property FormaDePago $formaDePago
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		'num_factura' => 'required',
		'cod_cliente' => 'required',
		'nombre_empleado' => 'required',
		'fecha_facturacion' => 'required',
		'cod_forma_pago' => 'required',
		'total_factura' => 'required',
		'iva' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['num_factura','cod_cliente','nombre_empleado','fecha_facturacion','cod_forma_pago','total_factura','iva'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'documento', 'cod_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detalleFactura()
    {
        return $this->hasOne('App\Models\DetalleFactura', 'cod_factura', 'num_factura');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function formaDePago()
    {
        return $this->hasOne('App\Models\FormaDePago', 'id_forma_pago', 'cod_forma_pago');
    }
    

}
