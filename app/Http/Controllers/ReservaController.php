<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\SelectviajeChangedEvent;
use App\Models\Reserva;
use App\Models\Bus;

class ReservaController extends Controller
{
    protected function obtener_reservas(){
        $datos = Reserva::select('viajes.id_viaje','reserva.num_asiento',
                    'ruta.origen','ruta.destino',
                    'viajes.fecha_inicio','viajes.fecha_retorno')
                    ->join('viajes','reserva.id_viaje','=','viajes.id_viaje')
                    ->join('ruta','ruta.id_ruta','=','viajes.id_ruta')
                    ->where('reserva.id_cliente',Auth::id());
        return $datos;
    }
    public function buscar_reservas(Request $requisitos)
    {
        $datos = $this->obtener_reservas();
        if($requisitos['origen'] != ''){
            $datos = $datos->where('ruta.origen',$requisitos['origen']);
        }
        if($requisitos['destino']!=''){
            $datos = $datos->where('ruta.destino',$requisitos['destino']);
        }
        if($requisitos['fecha_inicio']!=''){
            $datos = $datos->where('viajes.fecha_inicio',$requisitos['fecha_inicio']);
        }
        if($requisitos['fecha_retorno']!=''){
            $datos = $datos->where('viajes.fecha_retorno',$requisitos['fecha_retorno']);
        }
        $datos = $datos->paginate();
        return view('reserva.index',compact('datos'));
    }
    public function cancelar($id_viaje, $num_asiento){
        $datos = $this->obtener_reservas();
        $datos = $datos->where('reserva.id_viaje',$id_viaje)
                ->where('reserva.num_asiento',$num_asiento);
        $datos->delete();
        $bus = Bus::where('id_viaje',$id_viaje)->paginate();
        $asientos =  $bus[0]['asientos'];
        $asientos[(int)$num_asiento + 1] = '1';
        Bus::where('id_viaje',$id_viaje)->update(['asientos' => $asientos]);
        event(new SelectviajeChangedEvent($id_viaje,$asientos));
        return redirect()->route('administrarreservas');
    }
    public function index()
    {
        $datos = $this->obtener_reservas();
        $datos = $datos->paginate();
        return view('reserva.index',compact('datos'));
    }
}
