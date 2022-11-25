<?php

use App\Http\Controllers\controladorBD;
use App\Http\Controllers\ControladorViews;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

//INDEX
/* route::view('Principal','principal')->name('principal');*/
route::get('Inicio',[controladorBD::class,'index'])->name('inicio.index');

/* ----------LIBROS---------- */
//CREATED
route::get('libro/create',[controladorBD::class,'create'])->name('libro.create');
/* route::view('Registro','registrar')->name('registrar'); */

//STORE
route::post('Libro',[controladorBD::class,'store'])->name('libro.store');

//showLibros
route::get('libros',[controladorBD::class,'showLibros'])->name('libro.mostrar');

/* ----------AUTORES---------- */
//CREATED
route::get('autor/create',[controladorBD::class,'createAutor'])->name('autor.create');

//showLibros
route::get('autores',[controladorBD::class,'showAutores'])->name('autores.mostrar');

//STORE
route::post('Autor',[controladorBD::class,'storeAutores'])->name('autor.store');



route::view('Autores','autores')->name('autores');

route::post('Bibliotecas', [ControladorViews::class,'usarBiblioteca'])->name('Bibliotecas.usarBiblioteca');
route::post('Autores', [ControladorViews::class,'validaAutores'])->name('Autores.validaAutores');
