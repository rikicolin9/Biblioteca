@extends('plantilla')

@section('content')
<div class="container mt-8 col-md-8" >

    <div class="card text-center mb-6">
        <div class="card-header fw-bold">
           <h2>Ingrese los datos que se solicitan </h2>
        </div>

        <div class="card-body">
            <form class="mb-2" method="POST" action="">
                @csrf 

            <div class="mb-3">
            <label class="form-label fw-bold">ISBN</label>
            <input class="form-control" type="text" name="txtTitulo" value=""></input>
            
            </div>
            <div class="mb-3">
            <label class="form-label fw-bold">TITULO</label>
            <input class="form-control" type="text" name="txtRecordatorio" value=""></input>

            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">AUTOR</label>
                <input class="form-control" type="text" name="txtLugar" value=""></input>                
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">PAGINAS</label>
                <input class="form-control" type="number" name="txtLugar" value=""></input>                
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">EDITORIAL</label>
                <input class="form-control" type="text" name="txtLugar" value=""></input>                
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">EMAIL EDITORIAL</label>
                <input class="form-control" type="text" name="txtLugar" value=""></input>                
            </div>

        </div>
        <div class="card-footer">
                <button type="submit" class="btn btn-danger">Guardar</button>
            </form>
        </div>

    </div>
</div>



@endsection