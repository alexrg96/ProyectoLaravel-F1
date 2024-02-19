<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Piloto
 *
 * @property $id
 * @property $escuderia_id
 * @property $img_piloto
 * @property $nombre
 * @property $apellido
 * @property $nacionalidad
 * @property $dorsal
 * @property $created_at
 * @property $updated_at
 *
 * @property Escuderia $escuderia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Piloto extends Model
{
    
    static $rules = [
		'escuderia_id' => 'required',
		'img_piloto' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'nacionalidad' => 'required',
		'dorsal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['escuderia_id','img_piloto','nombre','apellido','nacionalidad','dorsal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function escuderia()
    {
        return $this->hasOne('App\Models\Escuderia', 'id', 'escuderia_id');
    }
    

}
