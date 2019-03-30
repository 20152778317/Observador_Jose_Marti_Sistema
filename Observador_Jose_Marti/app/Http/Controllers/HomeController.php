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
        return view('home');
    }

    /*public function met_estudiante () 
    {
        return view('Administrador.estudiante');
    }

    public function met_docente () 
    {
        return view('Administrador.docente');
    }

    public function met_Asignatura () 
    {
        return view('Administrador.asignatura');
    }
    public function met_Colegio () 
    {
        return view('colegio');
    }
    public function vista_GestionObservador() 
    {
        return view('Administrador.gestionObservador');
    }
    public function vista_GenerarCitacion() 
    {
        return view('Administrador.generarCitacion');
    }
    public function vista_GestioFaltas() 
    {
        return view('Administrador.gestionFaltas');
    }*/

}
