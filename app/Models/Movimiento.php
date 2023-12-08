<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movimiento
 *
 * @property $id
 * @property $Consecutivo
 * @property $idEntrada
 * @property $Origen
 * @property $Destino
 * @property $CodigoMovimiento
 * @property $CreadorMovimiento_id
 * @property $Actualizacion_id
 * @property $TipoMovimiento
 * @property $Estado
 * @property $Comentarios1
 * @property $Comentarios2
 * @property $created_at
 * @property $updated_at
 *
 * @property Tipomovimiento $tipomovimiento
 * @property User $user
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movimiento extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Consecutivo','idEntrada','Origen','Destino','CodigoMovimiento','CreadorMovimiento_id','Actualizacion_id','TipoMovimiento','Estado','Comentarios1','Comentarios2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipomovimiento()
    {
        return $this->hasOne('App\Models\Tipomovimiento', 'id', 'TipoMovimiento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'CreadorMovimiento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function useres()
    {
        return $this->hasOne('App\Models\User', 'id', 'Actualizacion_id');
    }
    

}
