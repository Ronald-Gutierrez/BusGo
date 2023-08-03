<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Viaje;
use App\Models\Rutum;
class ConfirmardatosController extends Controller
{
    public function index($id_viaje, Request $informacion_asientos)
    {   $bus = Bus::where('id_viaje',$id_viaje)->paginate();
        $viaje = Viaje::where('id_viaje',$id_viaje)->paginate();
        $fecha_inicio = $viaje[0]['fecha_inicio'];
        $fecha_retorno = $viaje[0]['fecha_retorno'];
        $ruta = Rutum::where('id_ruta',$viaje[0]['id_ruta'])->paginate();
        $origen = $ruta[0]['origen'];
        $destino = $ruta[0]['destino'];
        return view('confirmardatos',compact('id_viaje','informacion_asientos',
                                            'fecha_inicio','fecha_retorno',
                                            'origen','destino')); 
    }
}