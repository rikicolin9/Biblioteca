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
<h1 class=" text-center mb-5 mt-5 fw-bold">REGISTRO DE AUTORES</h1>
<div class="container mt-6 col-md-6" >

<div class="card text-left mb-4 mt-3">
    <div class="card-header fw-bold">
        <h2>Ingrese los datos que se solicitan </h2>
     </div>

    <div class="card-body">
        
        <form class="mb-2" method="POST" action="{{route('Autores.validaAutores')}}">

            @csrf 


            @if (session()->has('confirmacion'))
            
            <div class="alert alert-primary" role="alert" >
                Guardado correctamente
            </div>
         
            @endif

            <div class="mb-3 d-flex text-align-center">
            <label class="form-label fw-bold  ">NOMBRE COMPLETO: </label>
            <input class="form-control" type="text" name="txtnombres" value="{{old('txtnombres')}}"></input>
                <p class="text-danger fst-italic">
                    {{$errors->first('txtnombres')}}
                </p>
            </div>
            <div class="mb-3 d-flex text-align-center">
                <label class="form-label fw-bold  ">FECHA DE NACIMIENTO: </label>
                <input class="form-control" type="date" name="txtfecha" value="{{old('txtfecha')}}"></input>
                    <p class="text-danger fst-italic">
                        {{$errors->first('txtfecha')}}
                    </p>
                </div>
                <div class="mb-3 d-flex text-align-center">
                    <label class="form-label fw-bold  ">No de Libros: </label>
                    <input class="form-control" type="text" name="txtnumero" value="{{old('txtnumero')}}"></input>
                        <p class="text-danger fst-italic">
                            {{$errors->first('txtnumero')}}
                        </p>
                    </div>


    </div>
    <div class="card-footer text-center">
            <button type="submit" class="btn btn-danger">Guardar</button>
        </form>
    </div>

</div>
</div>
</div>

@endsection