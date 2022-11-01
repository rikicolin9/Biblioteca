<?php

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

route::view('Principal','principal')->name('principal');
route::view('Registro','registrar')->name('registrar');

route::post('Bibliotecas', [ControladorViews::class,'usarBiblioteca'])->name('Bibliotecas.usarBiblioteca');