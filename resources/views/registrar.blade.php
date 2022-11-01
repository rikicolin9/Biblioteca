@extends('plantilla')

@section('content')

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, Libro {{txttitulo}} agregado correctamente!',
    'Presiona para continuar!',
    'danger'
    )</script> "!!}    
@endif

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

</style>   
<h1 class=" text-center mb-5 mt-5 fw-bold">REGISTRO DE LIBROS</h1>

<div class="container mt-8 col-md-8" >
{{--     @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong>
                {{$error}}
             </strong>
                <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif --}}
    
    <div class="card text-center mb-4">
        <div class="card-header fw-bold">
           <h2>Ingrese los datos que se solicitan </h2>
        </div>

        <div class="card-body">
            <form class="mb-2" method="POST" action="{{route('Bibliotecas.usarBiblioteca')}}">
                @csrf 

                <div class="mb-3">
                <label class="form-label fw-bold">ISBN</label>
                <input class="form-control" type="text" name="txtisbn" value="{{old('txtisbn')}}"></input>
                    <p class="text-danger fst-italic">
                        {{$errors->first('txtisbn')}}
                    </p>
                </div>

                <div class="mb-3">
                <label class="form-label fw-bold">TITULO</label>
                <input class="form-control" type="text" name="txttitulo" value="{{old('txttitulo')}}"></input>
                <p class="text-danger fst-italic">
                    {{$errors->first('txttitulo')}}
                </p>
                </div>

                <div class="mb-3">
                <label class="form-label fw-bold">AUTOR</label>
                <input class="form-control" type="text" name="txtautor" value="{{old('txtautor')}}"></input> 
                <p class="text-danger fst-italic">
                    {{$errors->first('txtautor')}}
                </p>               
                </div>

                <div class="mb-3">
                <label class="form-label fw-bold">PAGINAS</label>
                <input class="form-control" type="number" name="txtpaginas" value="{{old('txtpaginas')}}"></input> 
                <p class="text-danger fst-italic">
                    {{$errors->first('txtpaginas')}}
                </p>               
                </div>

                <div class="mb-3">
                <label class="form-label fw-bold">EDITORIAL</label>
                <input class="form-control" type="text" name="txteditorial"value="{{old('txteditorial')}}"></input> 
                <p class="text-danger fst-italic">
                    {{$errors->first('txteditorial')}}
                </p>               
                </div>

                <div class="mb-3">
                <label class="form-label fw-bold">EMAIL EDITORIAL</label>
                <input class="form-control" type="email" name="txtemail" value="{{old('txtemail')}}"></input> 
                <p class="text-danger fst-italic">
                    {{$errors->first('txtemail')}}
                </p>               
                </div>

        </div>
        <div class="card-footer">
                <button type="submit" class="btn btn-danger">Guardar</button>
            </form>
        </div>

    </div>
</div>

@endsection