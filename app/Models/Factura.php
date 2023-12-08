<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $id
 * @property $NumeroFactura
 * @property $Valortotal
 * @property $Estado
 * @property $MedioPago
 * @property $ValorEvio
 * @property $Clientes_id
 * @property $Empresa_id
 * @property $contactos_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Contacto $contacto
 * @property Detfactura[] $detfacturas
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		'Empresa_id' => '',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NumeroFactura','Valortotal','Estado','MedioPago','ValorEvio','Clientes_id','Empresa_id','contactos_id','Producto_id','Comentarios'];

    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Cliente', 'id', 'Clientes_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contacto()
    {
        return $this->hasOne('App\Contacto', 'id', 'contactos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detfacturas()
    {
        return $this->hasMany('App\Detfactura', 'facturas_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'id', 'Empresa_id');
    }

    public function producto()
    {
        return $this->hasOne('App\Producto', 'id', 'Producto_id');
    }
    

}
