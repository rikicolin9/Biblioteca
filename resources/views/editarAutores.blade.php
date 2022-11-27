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
<h1 class=" text-center mb-5 mt-5 fw-bold">EDITAR AUTOR</h1>

<div class="container mt-6 col-md-6" >
    
    <div class="card text-left mb-4">
        <div class="card-header fw-bold">
           <h2>Edite los datos que requiera </h2>
        </div>

        <div class="card-body">
            <form class="mb-2" method="POST" action="{{route('autores.update',$consulActu->idAutor)}}">
                @csrf   

                {!!method_field('PUT')!!}  

                <div class="mb-3 d-flex text-align-center">
                    <label class="form-label fw-bold  ">NOMBRE COMPLETO: </label>
                    <input class="form-control" type="text" name="txtnombres" 
                    value="{{$consulActu->nombre}}"></input>
                        <p class="text-danger fst-italic">
                            {{$errors->first('txtnombres')}}
                        </p>
                    </div>
                    <div class="mb-3 d-flex text-align-center">
                        <label class="form-label fw-bold  ">FECHA DE NACIMIENTO: </label>
                        <input class="form-control" type="date" name="txtfecha" 
                        value="{{$consulActu->fecha}}"></input>
                            <p class="text-danger fst-italic">
                                {{$errors->first('txtfecha')}}
                            </p>
                        </div>
                        <div class="mb-3 d-flex text-align-center">
                            <label class="form-label fw-bold  ">No de Libros: </label>
                            <input class="form-control" type="text" name="txtnumero" 
                            value="{{$consulActu->NoLibros}}"></input>
                                <p class="text-danger fst-italic">
                                    {{$errors->first('txtnumero')}}
                                </p>
                            </div>
        
        </div>
        <div class="card-footer text-center">
                <button type="submit" class="btn btn-danger">Actualizar</button>
            </form>
        </div>

    </div>
</div>

@endsection