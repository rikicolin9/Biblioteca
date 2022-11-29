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
<h1 class=" text-center mb-5 mt-5 fw-bold">EDITAR LIBRO</h1>

<div class="container mt-6 col-md-6" >
    
    <div class="card text-left mb-4">
        <div class="card-header fw-bold">
           <h2>Edite los datos que requiera </h2>
        </div>

        <div class="card-body">
            <form class="mb-2" method="POST" action="{{route('libros.update',$consulActu->idLibro)}}">
                @csrf   

                {!!method_field('PUT')!!}  

                <div class="mb-3 d-flex text-align-center">
                    <label class="form-label fw-bold mx-2 my-2 ">AUTOR: </label>
                    <select class="custom-select form-control" id="inputGroupSelect01" name="autor">
                        <option selected disabled="disabled" value="">Autor</option>
                            @foreach($consulAutores as $autor)
                                <option value="{{$autor->idAutor}}" 
                                    @if ($autor->idAutor == $consulActu->id_autor)
                                    selected                                      
                                    @endif> 

                                    {{$autor->nombre}}</option>
                            @endforeach
                      </select>
                      <p class="text-danger fst-italic">
                        {{$errors->first('autor')}}
                    </p>
                </div>
                    
                <div class="mb-3 d-flex text-align-center">
                <label class="form-label fw-bold mx-2 my-2 ">ISBN: </label>
                <input class="form-control mx-2 my-2" type="text" name="txtisbn" 
                value="{{$consulActu->isbn}}"></input>
                    <p class="text-danger fst-italic">
                        {{$errors->first('txtisbn')}}
                    </p>
                </div>

                <div class="mb-3 d-flex">
                <label class="form-label fw-bold mx-2 my-2">TITULO: </label>
                <input class="form-control" type="text" name="txttitulo" value="{{$consulActu->titulo}}"></input>
                <p class="text-danger fst-italic">
                    {{$errors->first('txttitulo')}}
                </p>
                </div>

                <div class="mb-3 d-flex">
                <label class="form-label fw-bold mx-2 my-2">PAGINAS:</label>
                <input class="form-control" type="number" name="txtpaginas" value="{{$consulActu->paginas}}"></input> 
                <p class="text-danger fst-italic">
                    {{$errors->first('txtpaginas')}}
                </p>               
                </div>

                <div class="mb-3 d-flex">
                <label class="form-label fw-bold mx-2 my-2">EDITORIAL:</label>
                <input class="form-control" type="text" name="txteditorial"value="{{$consulActu->editorial}}"></input> 
                <p class="text-danger fst-italic">
                    {{$errors->first('txteditorial')}}
                </p>               
                </div>

                <div class="mb-3 d-flex">
                <label class="form-label fw-bold mx-2 my-2 ">EMAIL: </label>
                <input class="form-control " type="email" name="txtemail" value="{{$consulActu->email}}"></input> 
                <p class="text-danger fst-italic">
                    {{$errors->first('txtemail')}}
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