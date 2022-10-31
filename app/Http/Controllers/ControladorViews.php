<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorViews extends Controller
{
    //
    public function usarBiblioteca(Request $req){
        return "Se ha guardado el Libro";
    }

    public function verPrincipal(){
        return view('principal');
    }

    public function verRegistro(){
        return view('registrar');
    }
}
