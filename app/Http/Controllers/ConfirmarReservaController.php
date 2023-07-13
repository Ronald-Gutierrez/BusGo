<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;
use App\Models\Viaje;
use App\Models\Reserva;
use App\Models\Rutum;
use App\Events\SelectviajeChangedEvent;
use Illuminate\Support\Facades\Auth;

class ConfirmarreservaController extends Controller
{
    public function index($id_viaje, Request $informacion_asientos)
    {
        $bus = Bus::where('id_viaje',$id_viaje)->paginate();
        $viaje = Viaje::where('id_viaje',$id_viaje)->paginate();
        $fecha_inicio = $viaje[0]['fecha_inicio'];
        $fecha_retorno = $viaje[0]['fecha_retorno'];
        $ruta = Rutum::where('id_ruta',$viaje[0]['id_ruta'])->paginate();
        $origen = $ruta[0]['origen'];
        $destino = $ruta[0]['destino'];
        return view('confirmarreserva', compact('id_viaje','informacion_asientos','fecha_inicio','fecha_retorno','origen','destino')); 
    }


    public function reservar($id_viaje, Request $informacion_asientos)
    {
        $i = 0;
        $bus = Bus::where('id_viaje',$id_viaje)->paginate();
        $estados =  $bus[0]['asientos'];
        $capacidad = $bus[0]['capacidad'];
        $reservaciones = array();
        $j = 0;
        while($i < $capacidad){
            if($informacion_asientos['asiento'.strval($i+1)] == "1"){
                $estados[$i+2] = '0';
                $reservaciones[] = $i+1;
                ++$j;
            }
            ++$i;
        }
        Bus::where('id_viaje',$id_viaje)->update(['asientos' => $estados]);
        for ($k = 0; $k < $j; $k++) { 
            Reserva::create([
                'id_cliente' => Auth::id(),
                'num_asiento' => $reservaciones[$k],
                'id_viaje' => $id_viaje
            ]);
        }
        event(new SelectviajeChangedEvent($id_viaje,$estados));
        return redirect()->route('home');
    }
}