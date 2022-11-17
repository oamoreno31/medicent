<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Centro
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $latitud
 * @property $longitud
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Centro extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
		'latitud' => 'required',
		'longitud' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','latitud','longitud','estado'];



}
