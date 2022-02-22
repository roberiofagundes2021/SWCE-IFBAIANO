<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->is_admin == 1){
            return view('Estagiario.index');
        }

        if(auth()->user()->is_admin == 2){
            return view('Professor_Orientador.index');
        }

         if(auth()->user()->is_admin == 3){
            return view('NRI.index');
        }

        if(auth()->user()->is_admin == 4){
            return view('Coordenacao_Curso.index');
        }
        return view('home');
    }
}
