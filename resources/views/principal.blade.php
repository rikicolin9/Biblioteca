@extends('plantilla')
@section('content')
<style>
    h1{
        text-align: center;
        color: rgb(207, 100, 39);
        font-family: Arial, Helvetica, sans-serif;
        font-size:35px; 
            }
    h5{
        color:darkred;
        font-family:inherit;
        font-size: 10px;
    }
    img{
        width: 30%;
        height: 30%;
    
    }
    p{
        text-justify: distribute;
    }
</style> 

<div class="container mt-3 cold-md-8">
    <div class="card mb-3">
        <div class="card-header fw-bold">
            <h1>!!!Luisito Comunica publica nuevo libro de terror¡¡¡</h1>
         </div>
        
            <div class="card-body">
                <div class="d-flex justify-content-center">
                   <img src="/imgs/imglibro1.jpg" >
                   <img src="/imgs/imglibro2.jpg" >
                </div>
                
            <div class="container mt-3 cold-md-8">
                <p class="text-justify">Fue a través de sus redes sociales que Luisito Comunica anunció su nuevo proyecto, 
                    el cual actualmente se encuentra en el lugar número 1 en la sección de búsquedas 
                    de libros de horror en Amazon.
                </p>

                <div class="d-flex justify-content-center">
                    <img src="/imgs/imglibro3.jpg" >
                    <img src="/imgs/imglibro4.jpg" >   
                </div>
                <p class="text-justify">
                    Se trata de "Historias Perturbadoras", el segundo escrito hecho por el youtuber, 
                    el cual relata tres historias de terror, "que se adentrarán en tu mente y no podrán salir", 
                    posteó el mexicano a través de su Instagram.
                </p>
            </div>
                    <br>
                    <h5>Luisito Comunica lanza nuevo libro: “Historias Perturbadoras”, con sorpresa incluída. 
                        (2022, octubre 29). Diario de Yucatán.
                        https://www.yucatan.com.mx/espectaculos/2022/10/29/luisito-comunica-lanza-nuevo-libro-historias-perturbadoras-con-sorpresa-incluida-357589.html
                    </h5>

            </div>
    </div>

</div>


@endsection