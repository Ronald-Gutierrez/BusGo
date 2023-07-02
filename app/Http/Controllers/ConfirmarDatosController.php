<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ConfirmardatosController extends Controller
{
    public function index($id_viaje, Request $informacion_asientos)
    {
        return view('confirmardatos',compact('id_viaje','informacion_asientos')); 
    }
}
