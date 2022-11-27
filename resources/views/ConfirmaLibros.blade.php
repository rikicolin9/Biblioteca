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
        text-align: center;
    }

</style>   
<h1 class=" text-center mb-5 mt-5 fw-bold">ELIMINAR LIBRO</h1>

<div class="container mt-6 col-md-6" >
    
    <div class="card text-left mb-4">
        <div class="card-header fw-bold">
           <h2>¿Seguro que deseas eliminar? </h2>
        </div>

        <div class="card-body">
            <form class="mb-2" method="POST" action="{{route('libro.destroy',$consulElimina->idLibro)}}">
                @csrf 
                
                {!!method_field('PUT')!!}
                    
                <div class="mb-3 d-flex text-align-center">
                <label class="form-label fw-bold mx-2 my-2 ">Autor: </label>
                <input class="form-control mx-2 my-2" type="text" name="txtisbn" 
                value="{{$consulElimina->id_autor}}" readonly> </input>
                </div>

                <div class="mb-3 d-flex">
                <label class="form-label fw-bold mx-2 my-2">TITULO: </label>
                <input class="form-control" type="text" name="txttitulo" 
                value="{{$consulElimina->titulo}}" readonly> </input>
                </div>

                <div class="mb-3 d-flex">
                <label class="form-label fw-bold mx-2 my-2">EDITORIAL:</label>
                <input class="form-control" type="text" name="txteditorial"
                value="{{$consulElimina->editorial}}" readonly > </input> 
                </div>

        </div>
        <div class="card-footer text-center">
            <a href="{{route('libro.mostrar')}}" class="btn btn-primary">
                REGRESAR
            </a>
                <button type="submit" class="btn btn-danger">CONFIRMAR</button>
            </form>
        </div>

    </div>
</div>

@endsection