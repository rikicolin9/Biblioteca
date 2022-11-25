<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidaLibro;
use App\Http\Requests\validAutor;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class ControladorViews extends Controller
{
    //
    public function usarBiblioteca(ValidaLibro $req){
        return redirect('Registro')
        ->with('confirmacion','Guardado')
        ->with('titulo',$req->txttitulo);
    }

    public function verPrincipal(){
        return view('principal');
    }

    public function verRegistro(){
        return view('registrar');
    }

    public function validaAutores(validAutor $req){
        return redirect('Autores')
        ->with('confirmacion','Guardado');
    }
}
