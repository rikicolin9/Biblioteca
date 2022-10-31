@extends('plantilla')

@section('content')
<style>
    h1{
        color: rgb(104, 104, 224);
        font-family: Arial, Helvetica, sans-serif;
        font-size:45px; 
            }
    h2{
        color: rgb(167, 209, 100);
        font-family: inherit;
        font-size: 20px;
    }
    label{
        text-align: left;
    }
</style>   
<h1 class=" text-center mb-5 mt-5 fw-bold">REGISTRO DE LIBROS</h1>

<div class="container mt-8 col-md-8" >
    <div class="card text-center mb-4">
        <div class="card-header fw-bold">
           <h2>Ingrese los datos que se solicitan </h2>
        </div>

        <div class="card-body">
            <form class="mb-2" method="POST" action="{{route('Biblioteca.usarBiblioteca')}}">
                @csrf 

                <div class="mb-3">
                <label class="form-label fw-bold">ISBN</label>
                <input class="form-control" type="text" name="txtisbn" ></input>
                </div>

                <div class="mb-3">
                <label class="form-label fw-bold">TITULO</label>
                <input class="form-control" type="text" name="txttitulo"></input>
                </div>

                <div class="mb-3">
                <label class="form-label fw-bold">AUTOR</label>
                <input class="form-control" type="text" name="txtautor" ></input>                
                </div>

                <div class="mb-3">
                <label class="form-label fw-bold">PAGINAS</label>
                <input class="form-control" type="number" name="txtpaginas"></input>                
                </div>

                <div class="mb-3">
                <label class="form-label fw-bold">EDITORIAL</label>
                <input class="form-control" type="text" name="txteditorial"></input>                
                </div>

                <div class="mb-3">
                <label class="form-label fw-bold">EMAIL EDITORIAL</label>
                <input class="form-control" type="text" name="txtemail"></input>                
                </div>

        </div>
        <div class="card-footer">
                <button type="submit" class="btn btn-danger">Guardar</button>
            </form>
        </div>

    </div>
</div>

@endsection