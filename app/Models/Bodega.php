<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bodega
 *
 * @property $id
 * @property $Nombre
 * @property $Direccion
 * @property $Empresas_id
 * @property $Estado
 * @property $TiendaVirtual
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bodega extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Direccion','Empresas_id','Estado','TiendaVirtual'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'Empresas_id');
    }
    

}
