<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipomovimiento
 *
 * @property $id
 * @property $Nombre
 * @property $Codigo
 * @property $DescuentoExistencia
 * @property $AñadeExistencia
 * @property $Bloquea
 * @property $Alertar
 * @property $created_at
 * @property $updated_at
 *
 * @property Movimiento[] $movimientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipomovimiento extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Codigo','DescuentoExistencia','AñadeExistencia','Bloquea','Alertar','Estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento', 'TipoMovimiento', 'id');
    }
    

}
