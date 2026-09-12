<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Mostrar la página principal del sistema.
     */
    public function index()
    {
        return view('inicio.index');
    }
}