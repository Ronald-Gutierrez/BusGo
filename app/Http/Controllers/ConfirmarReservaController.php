<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;
use App\Events\SelectviajeChangedEvent;

class ConfirmarreservaController extends Controller
{
    public function index($id_viaje, Request $informacion_asientos)
    {
        return view('confirmarreserva', compact('id_viaje','informacion_asientos')); 
    }


    public function reservar($id_viaje, Request $informacion_asientos)
    {
        $i = 0;
        $bus = Bus::where('id_viaje',$id_viaje)->paginate();
        $estados =  $bus[0]['asientos'];
        while($i < 30){
            if($informacion_asientos['asiento'.strval($i+1)] == "1"){
                $estados[$i+2] = '0';
            }
            ++$i;
        }
        Bus::where('id_viaje',$id_viaje)->update(['asientos' => $estados]);
        $actualizar = new SelectviajeChangedEvent($id_viaje,$estados);
        event($actualizar);
        return redirect()->route('home');
    }
}
