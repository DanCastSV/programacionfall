<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comunidad
 *
 * @property $id
 * @property $titulo
 * @property $lenguaje
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comunidad extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'lenguaje' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','lenguaje','descripcion'];



}
