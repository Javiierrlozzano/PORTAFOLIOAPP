<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movimientosdetallado
 *
 * @property $id
 * @property $producto_id
 * @property $Cantidad
 * @property $CantidadExistencias
 * @property $Total
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movimientosdetallado extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto_id','Cantidad','CantidadExistencias','Total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    

}
