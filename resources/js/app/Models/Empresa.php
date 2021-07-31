<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $nombres
 * @property $descripcion
 * @property $direccion
 * 
 * 
 * 
 * 
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'descripcion' => 'required',
		'direccion' => 'required',
		
    ];
    public $timestamps = false;
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','descripcion','direccion'];

    public function user()
    {
        return $this->hasMany('App\Models\User', 'id', 'empresa_id');
    }



}
