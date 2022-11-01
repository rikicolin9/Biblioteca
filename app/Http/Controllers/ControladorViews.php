<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidaLibro;
use Illuminate\Http\Request;

class ControladorViews extends Controller
{
    //
    public function usarBiblioteca(ValidaLibro $req){
        return redirect('Registro')->with('confirmacion','Guardado Correcto');
    }

    public function verPrincipal(){
        return view('principal');
    }

    public function verRegistro(){
        return view('registrar');
    }
}
