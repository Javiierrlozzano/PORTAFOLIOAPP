<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detfactura
 *
 * @property $id
 * @property $protucto_id
 * @property $Cantidad
 * @property $Valorunidad
 * @property $ValorTotal
 * @property $Descuento
 * @property $facturas_id
 * @property $ValorEvioTotal
 * @property $created_at
 * @property $updated_at
 *
 * @property Factura $factura
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detfactura extends Model
{
    
    static $rules = [
		'Cantidad' => 'required',
		'Valorunidad' => 'required',
		'ValorTotal' => 'required',
		'Descuento' => 'required',
		'facturas_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['protucto_id','Cantidad','Valorunidad','ValorTotal','Descuento','facturas_id','ValorEvioTotal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function factura()
    {
        return $this->hasOne('App\Factura', 'id', 'facturas_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Producto', 'id', 'protucto_id');
    }
    

}
