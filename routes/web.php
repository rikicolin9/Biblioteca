<?php

use App\Http\Controllers\controladorBD;
use App\Http\Controllers\ControladorViews;
use Faker\Guesser\Name;
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

//Edit
Route::get('libro/{id}/edit',[controladorBD::class,'edit'])->name('libros.edit');

//Edit:update la ruta put es para actualizacion 
Route::put('libro/{id}',[controladorBD::class,'updateLibro'])->name('libros.update');

//eliminar
Route::get('libro/{id}/show', [controladorBD::class,'showLibro'])->name('libro.show');

//destroy
Route::put('libro/{id}', [controladorBD::class,'destroyLibro'])->name('libro.destroy');

/* ----------AUTORES---------- */
//CREATED
route::get('autor/create',[controladorBD::class,'createAutor'])->name('autor.create');

//showLibros
route::get('autores',[controladorBD::class,'showAutores'])->name('autores.mostrar');

//STORE
route::post('autor',[controladorBD::class,'storeAutores'])->name('autor.store');

//Edit
Route::get('autor/{id}/edit',[controladorBD::class,'editAutor'])->name('autores.edit');

//Edit:update la ruta put es para actualizacion 
Route::put('autor/{id}',[controladorBD::class,'updateAutor'])->name('autores.update');

//eliminar
Route::get('autor/{id}/show', [controladorBD::class,'showAutor'])->name('autor.show');

//destroy
Route::put('autor/{id}', [controladorBD::class,'destroyAutor'])->name('autor.destroy');

route::view('Autores','autores')->name('autores');

route::post('Bibliotecas', [ControladorViews::class,'usarBiblioteca'])->name('Bibliotecas.usarBiblioteca');
route::post('Autores', [ControladorViews::class,'validaAutores'])->name('Autores.validaAutores');
