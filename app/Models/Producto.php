<?php

namespace App\Models;;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $NombreProducto
 * @property $Estado
 * @property $Valor
 * @property $Imagen
 * @property $Descuento
 * @property $ValorEvio
 * @property $Categoria_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Detfactura[] $detfacturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'NombreProducto' => 'required',
		'Estado' => 'required',
		'Valor' => 'required',
		'Imagen' => '',
        'Imagen2' => '',
        'Imagen3' => '',
        'Imagen4' => '',
        'Oferta' => '',
		'Descuento' => '',
        'CantidadExitente'=>'',
		'Categoria_id' => 'required',
        'agregarcomentario'=>'',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreProducto','Estado','Valor', 
    'Imagen2',
    'Imagen3',
    'Imagen4',
    'Oferta','Imagen','Descuento','ValorEvio','Categoria_id','Descripcion','CantidadExitente','agregarcomentario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Categoria', 'id', 'Categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detfacturas()
    {
        return $this->hasMany('App\Detfactura', 'protucto_id', 'id');
    }
    

}
