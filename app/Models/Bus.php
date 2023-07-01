<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bus
 *
 * @property $id_bus
 * @property $num_bus
 * @property $capacidad
 * @property $estado
 * @property $id_viaje
 * @property $asientos
 *
 * @property Viaje $viaje
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bus extends Model
{
    protected $primaryKey = 'id_bus';
    static $rules = [
		'id_bus' => 'required',
		'num_bus' => 'required',
		'capacidad' => 'required',
		'estado' => 'required',
		'id_viaje' => 'required',
		'asientos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_bus','num_bus','capacidad','estado','id_viaje','asientos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function viaje()
    {
        return $this->hasOne('App\Models\Viaje', 'id_viaje', 'id_viaje');
    }
    

}
