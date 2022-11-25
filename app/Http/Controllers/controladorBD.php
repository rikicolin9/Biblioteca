<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidaLibro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class controladorBD extends Controller
{

    public function index()
    {
     return view('principal');
    }
//Libros
    public function create()
    {
        return view('registrar');
    }
//Autores
    public function createAutor()
    {
        return view('autores');
    }
    
    public function showLibros()
    {
        $consulLibros=DB::table('tb_libros')->get();
        return view('consultaLibros',compact('consulLibros'));
    }

    public function store(ValidaLibro $req)
    {
        DB::table('tb_libros')->insert([
            "id_autor"=>$req->input('txtautor'),
            "isbn"=>$req->input('txtisbn'),
            "titulo"=>$req->input('txttitulo'),
            "autor"=>$req->input('txtautor'),
            "paginas"=>$req->input('txtpaginas'),
            "editorial"=>$req->input('txteditorial'),
            "email"=>$req->input('txtemail'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('libro/create')
        ->with('confirmacion','abc')
        ->with('titulo',$req->txttitulo);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
