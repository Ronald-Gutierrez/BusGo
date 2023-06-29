<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\Cliente;

class HomeController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $pagina = '';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *@return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        if(Route::has('login')){
            $idusuario = Auth::id();
            $result = Business::firstwhere('id_usuario',$idusuario);
            if($result == null){
                return view('home');
            }
            else{
                return view('homebusiness');
            }
        }
        else{
            $this->$pagina = '';
            return route('login');
        }
    }
}
