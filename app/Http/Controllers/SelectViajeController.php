<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use Illuminate\Http\Request;

class SelectviajeController extends Controller
{
    public function index($id_viaje)
    {
        $bus = Bus::where('id_viaje',$id_viaje)->paginate();
        $datos = $bus[0];
        $estados = $datos["asientos"];
        $capacidad = $datos["capacidad"];
        return view('selectviaje',compact('estados','id_viaje','capacidad'));
    }
}
