<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidaLibro;
use App\Http\Requests\validAutor;
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
    $consulAutores=DB::table('tb_autores')->get(); 
        return view('registrar',compact('consulAutores'));
    }

    public function showLibros()
    {
        $consulLibros=DB::table('tb_libros')->get();
        return view('consultaLibros',compact('consulLibros'));
    }

    public function store(ValidaLibro $req)
    {
        DB::table('tb_libros')->insert([
            "id_autor"=>$req->input('autor'),
            "isbn"=>$req->input('txtisbn'),
            "titulo"=>$req->input('txttitulo'),
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

    public function edit($id)
    {
        $consulAutores=DB::table('tb_autores')->get(); 
        $consulActu=DB::table('tb_libros')->where('idLibro',$id)->first();
        return view('editarLibros',compact('consulActu','consulAutores'));
    }

    public function updateLibro(ValidaLibro $req,$id)
    {
    DB::table('tb_libros')->where('idLibro',$id)->update([
        "id_autor"=>$req->input('autor'),
        "isbn"=>$req->input('txtisbn'),
        "titulo"=>$req->input('txttitulo'),
        "paginas"=>$req->input('txtpaginas'),
        "editorial"=>$req->input('txteditorial'),
        "email"=>$req->input('txtemail'),
        "updated_at"=>Carbon::now()
      ]);
/*           abc no importa, solo se tiene que poner*/
    return redirect('libros')->with('actualizacion','abc')
    ->with('titulo',$req->txttitulo); 
    }

    public function showLibro($id)
    {
        $consulElimina=DB::table('tb_libros')->where('idLibro',$id)->first();
        return view('confirmaLibros',compact('consulElimina'));
    }

    public function destroyLibro($id)
    {
        DB::table('tb_libros')->where('idLibro',$id)->delete();
        return redirect('libros')->with('eliminacion','abc'); 
    }
//Autores
    public function createAutor()
    {
        return view('autores');
    }

    public function showAutores()
    {
        $consulAutores=DB::table('tb_autores')->get();
        return view('consultaAutores',compact('consulAutores'));
    }

    public function storeAutores(validAutor $req)
    {
        DB::table('tb_autores')->insert([
            "nombre"=>$req->input('txtnombres'),
            "fecha"=>$req->input('txtfecha'),
            "NoLibros"=>$req->input('txtnumero'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('autor/create')
        ->with('confirmacion','abc')
        ->with('nombres',$req->txtnombres);
    }

    public function editAutor($id)
    {
        $consulActu=DB::table('tb_autores')->where('idAutor',$id)->first();
        return view('editarAutores',compact('consulActu'));
    }

    public function updateAutor(validAutor $req,$id)
    {
    DB::table('tb_autores')->where('idAutor',$id)->update([
        "nombre"=>$req->input('txtnombres'),
        "fecha"=>$req->input('txtfecha'),
        "NoLibros"=>$req->input('txtnumero'),
        "updated_at"=>Carbon::now()
      ]);
/*           abc no importa, solo se tiene que poner*/
    return redirect('autores')->with('actualizacion','abc')
    ->with('nombres',$req->txtnombres);
    }

    public function showAutor($id)
    {
        $consulElimina=DB::table('tb_autores')->where('idAutor',$id)->first();
        return view('confirmaAutores',compact('consulElimina'));
    }

    public function destroyAutor($id)
    {
        DB::table('tb_autores')->where('idAutor',$id)->delete();
        return redirect('autores')->with('eliminacion','abc'); 
    }
}
