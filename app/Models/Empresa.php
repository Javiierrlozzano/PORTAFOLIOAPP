<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $Nombre
 * @property $Nit
 * @property $Direccion
 * @property $Telefono
 * @property $celular
 * @property $Logo
 * @property $Eslogan
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'celular' => 'required',
    'Estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Nit','Direccion','Telefono','celular','Logo','Eslogan','Estado'];



}
