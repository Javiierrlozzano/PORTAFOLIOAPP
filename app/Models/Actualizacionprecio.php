<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actualizacionprecio
 *
 * @property $id
 * @property $protucto_id
 * @property $PrecioActual
 * @property $Utilidad%
 * @property $ValorUtilidad
 * @property $PrecioPublico
 * @property $OrigenProducto_id
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actualizacionprecio extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['protucto_id','PrecioActual','Utilidad%','ValorUtilidad','PrecioPublico','OrigenProducto_id','Estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'protucto_id');
    }
    

}
