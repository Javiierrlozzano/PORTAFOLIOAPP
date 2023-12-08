<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 *
 * @property $id
 * @property $direccion
 * @property $long
 * @property $Latitud
 * @property $telefono
 * @property $celular
 * @property $estado
 * @property $clientes_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Factura[] $facturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contacto extends Model
{
    
    static $rules = [
		'telefono' => 'required',
		'clientes_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['direccion','long','Latitud','telefono','celular','estado','clientes_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Cliente', 'id', 'clientes_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Factura', 'contactos_id', 'id');
    }
    

}
