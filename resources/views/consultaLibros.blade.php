@extends('plantilla')

@section('content')
                
<style>
    h1{
        color: rgb(212, 179, 89);
        font-family: Arial, Helvetica, sans-serif;
        font-size:40px; 
            }
    h2{
        color: rgb(100, 129, 209);
        font-family: inherit;
        font-size: 17px;
        text-align: center;
    }

</style>            
<h1 class=" text-center mb-5 mt-5 fw-bold">CONSULTA DE LIBROS</h1>
    @foreach($consulLibros as $consul)

        <div class="container col-md-6" >

            <div class="card text-center">
                <div class="card-header fw-bold">
                    <h5 class="text-primary text-center">{{$consul->titulo}}</h5>
                </div>
                <div class="card-body">
                   <h5 class="card-text">ESCRITOR/A: {{$consul->autor}}</h5>
                   <h5 class="card-text">EDITORIAL: {{$consul->editorial}}</h5>
                </div>
                <div class="card-footer text-muted">
                    <a href="#" class="btn btn-primary">
                        Actualizar
                    </a>
                    <a href="#" class="btn btn-success">E</a>
                </div>
            
            </div>
        </div>
    @endforeach
@endsection