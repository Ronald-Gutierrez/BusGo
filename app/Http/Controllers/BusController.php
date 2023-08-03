<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Rutum;
use App\Models\Viaje;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

/**
 * Class BusController
 * @package App\Http\Controllers
 */
class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buses = Bus::select('buses.id_bus','buses.num_bus',
                            'buses.capacidad','buses.estado',
                            'buses.id_viaje','buses.asientos')
                ->join('viajes','buses.id_viaje','=','viajes.id_viaje')
                ->join('ruta','ruta.id_ruta','=','viajes.id_ruta')
                ->where('ruta.encargado',Auth::id())
                ->paginate();

        return view('bus.index', compact('buses'))
            ->with('i', (request()->input('page', 1) - 1) * $buses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function actualizar_bus_viaje(int $idviaje){
        $viaje = Viaje::find($idviaje);
        if(Bus::where('id_viaje',$idviaje)->where('estado',1)->count()){
            $viaje->update(['estado' => 1]);
        }
        else{
            $viaje->update(['estado' => 0]);
        }
    }
    public function create()
    {
        $bus = new Bus();
        $viajes = Viaje::select('viajes.id_viaje','viajes.fecha_inicio','viajes.fecha_retorno'
                    ,'ruta.origen','ruta.destino')
                    ->join('ruta','ruta.id_ruta','=','viajes.id_ruta')
                    ->where('ruta.encargado',Auth::id())
                    ->get();
        return view('bus.create', compact('bus','viajes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Bus::$rules);
        $capacidad = intval($request['capacidad']);
        $asientos = "[";
        for($i=0; $i < $capacidad; $i++){
            $asientos = $asientos.'1';
        }
        $asientos = $asientos."]";
        $request['asientos'] = $asientos;
        Bus::create($request->all());
        $this->actualizar_bus_viaje(intval($request['id_viaje']));
        return redirect()->route('buses.index')
            ->with('success', 'Bus registrado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bus = Bus::find($id);

        return view('bus.show', compact('bus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bus = Bus::find($id);
        $viajes = Viaje::select('viajes.id_viaje','viajes.fecha_inicio',
        'viajes.fecha_retorno','ruta.origen','ruta.destino')
                    ->join('ruta','ruta.id_ruta','=','viajes.id_ruta')
                    ->where('ruta.encargado',Auth::id())
                    ->get();
        return view('bus.edit', compact('bus','viajes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bus $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus $bus)
    {
        $request->validate(Bus::$rules);
        $nuevacapacidad = intval($request['capacidad']);
        $antiguacapacidad =  intval($bus->capacidad);
        $asientos = $bus->asientos;
        if($antiguacapacidad < $nuevacapacidad){
            $asientos = substr($asientos, 0, -1);
            for($i = $antiguacapacidad; $i < $nuevacapacidad; $i++){
                $asientos = $asientos.'1';
            }
            $asientos = $asientos."]";
        }
        elseif($antiguacapacidad > $nuevacapacidad){
            $asientos = substr($asientos, 0, -1);
            for($i = $nuevacapacidad; $i < $antiguacapacidad; $i++){
                $asientos = substr($asientos, 0, -1);
            }
            $asientos = $asientos."]";
        }
        $request['asientos'] = $asientos;
        $bus->update($request->all());
        $this->actualizar_bus_viaje(intval($request['id_viaje']));
        return redirect()->route('buses.index')
            ->with('success', 'Bus actualizado de forma exitosa');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Bus::find($id)->delete();
        return redirect()->route('buses.index')
            ->with('success', 'Bus eliminado de forma exitosa');
    }
}
