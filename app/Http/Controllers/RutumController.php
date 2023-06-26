<?php

namespace App\Http\Controllers;

use App\Models\Rutum;
use Illuminate\Http\Request;

/**
 * Class RutumController
 * @package App\Http\Controllers
 */
class RutumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruta = Rutum::paginate();

        return view('rutum.index', compact('ruta'))
            ->with('i', (request()->input('page', 1) - 1) * $ruta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rutum = new Rutum();
        return view('rutum.create', compact('rutum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Rutum::$rules);

        $rutum = Rutum::create($request->all());

        return redirect()->route('ruta.index')
            ->with('success', 'Rutum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rutum = Rutum::find($id);

        return view('rutum.show', compact('rutum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rutum = Rutum::find($id);

        return view('rutum.edit', compact('rutum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Rutum $rutum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rutum $rutum)
    {
        request()->validate(Rutum::$rules);

        $rutum->update($request->all());

        return redirect()->route('ruta.index')
            ->with('success', 'Rutum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rutum = Rutum::find($id)->delete();

        return redirect()->route('ruta.index')
            ->with('success', 'Rutum deleted successfully');
    }
}
