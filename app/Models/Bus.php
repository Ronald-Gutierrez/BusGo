<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    static $rules = [
		'num_bus' => 'required',
		'capacidad' => 'required',
		'estado' => 'required',
		'id_viaje' => 'required',
    ];
    protected $perPage = 20;
    public $timestamps = false;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_bus','num_bus','capacidad','estado','id_viaje','asientos'];
}
