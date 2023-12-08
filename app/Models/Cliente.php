<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $doc
 * @property $apellido1
 * @property $apellido2
 * @property $nombre1
 * @property $nombre2
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Contacto[] $contactos
 * @property Factura[] $facturas
 * @property Factura[] $facturas
 * @property Factura[] $facturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'doc' => 'required',
		'apellido1' => 'required',
		'nombre1' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['doc','apellido1','apellido2','nombre1','nombre2','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactos()
    {
        return $this->hasMany('App\Contacto', 'clientes_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Factura', 'Clientes_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function factura()
    {
        return $this->hasMany('App\Factura', 'contactos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function factur()
    {
        return $this->hasMany('App\Factura', 'Empresa_id', 'id');
    }
    

}
