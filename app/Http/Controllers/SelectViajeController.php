<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use App\Models\Viaje;
use App\Models\Rutum;
use Illuminate\Http\Request;

class SelectviajeController extends Controller
{
    public function index($id_viaje)
    {
        $bus = Bus::where('id_viaje',$id_viaje)->paginate();
        $viaje = Viaje::where('id_viaje',$id_viaje)->paginate();
        $fecha_inicio = $viaje[0]['fecha_inicio'];
        $fecha_retorno = $viaje[0]['fecha_retorno'];
        $ruta = Rutum::where('id_ruta',$viaje[0]['id_ruta'])->paginate();
        $origen = $ruta[0]['origen'];
        $destino = $ruta[0]['destino'];
        $datos = $bus[0];
        $estados = $datos["asientos"];
        $capacidad = $datos["capacidad"];
        return view('selectviaje',compact('estados','id_viaje',
                                        'capacidad','fecha_inicio',
                                        'fecha_retorno','origen',
                                        'destino'));
    }
}