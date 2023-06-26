<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rutum
 *
 * @property $id_ruta
 * @property $origen
 * @property $destino
 * @property $encargado
 *
 * @property Business $business
 * @property Viaje[] $viajes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rutum extends Model
{
    
    static $rules = [
		'id_ruta' => 'required',
		'origen' => 'required',
		'destino' => 'required',
		'encargado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ruta','origen','destino','encargado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function business()
    {
        return $this->hasOne('App\Models\Business', 'id_usuario', 'encargado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function viajes()
    {
        return $this->hasMany('App\Models\Viaje', 'id_ruta', 'id_ruta');
    }
    

}
