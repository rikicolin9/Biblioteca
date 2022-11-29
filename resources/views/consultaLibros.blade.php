@extends('plantilla')

@section('content')
<?php
$titul = session()->get('titulo')
?>

@if (session()->has('actualizacion'))
{!!"<script> Swal.fire(
    'Perfecto!',
    'El Libro: {$titul}, se ha actualizado!',
    'success'
    )</script> "!!}    
@endif

@if (session()->has('eliminacion'))
{!!"<script> Swal.fire(
    'Perfecto!',
    'Tu libro se ha elimando!',
    'success'
    )</script> "!!}    
@endif               
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
                   <h5 class="card-text" >ESCRITOR/A: {{$consul->id_autor}}</h5>
                   <h5 class="card-text">EDITORIAL: {{$consul->editorial}}</h5>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('libros.edit',$consul->idLibro)}}" class="btn btn-primary">
                        Editar
                    </a>
                    <a href="{{route('libro.show',$consul->idLibro)}}" class="btn btn-success">
                        Eliminar</a>
                </div>
            
            </div>
        </div>
    @endforeach
@endsection