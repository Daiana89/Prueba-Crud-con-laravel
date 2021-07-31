<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $correo
 * @property $clave
 * @property $grupo
 * @property $empresa_id
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'correo' => 'required',
		'clave' => 'required',
		'grupo' => 'required',
		'empresa_id' => 'required',
      


    ];
    public $timestamps = false;
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','correo','clave','grupo','empresa_id'];

    public function empresa()
    {
        return $this->belongsTo('App\Models\Empresa', 'empresa_id');
    }


}
