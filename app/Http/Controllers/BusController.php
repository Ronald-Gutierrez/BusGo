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
        $buses = Bus::select('buses.id_bus','buses.num_bus','buses.capacidad','buses.estado','buses.id_viaje','buses.asientos')
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
    public function create()
    {
        $bus = new Bus();
        return view('bus.create', compact('bus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bus::$rules);

        $bus = Bus::create($request->all());

        return redirect()->route('buses.index')
            ->with('success', 'Bus created successfully.');
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

        return view('bus.edit', compact('bus'));
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
        request()->validate(Bus::$rules);

        $bus->update($request->all());

        return redirect()->route('buses.index')
            ->with('success', 'Bus updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bus = Bus::find($id)->delete();

        return redirect()->route('buses.index')
            ->with('success', 'Bus deleted successfully');
    }
}
