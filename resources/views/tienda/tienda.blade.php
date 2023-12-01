
@extends('layouts.app')

@section('title', 'Otra Vista')

@section('content')
<!DOCTYPE html>
<html lang="es">
    <style>
       .hola{
           background-color: rgb(13, 25, 25);
       }
    </style>
</head>
<body class="black-background hola">
   
    <main>
        <section class="jumbotron text-center white">
            <h1 class="jumbotron-heading" style="color: #ffff;">Bienvenidos a Nuestra Tienda</h1>
            <h3 class="jumbotron-heading" style="color: #ffff; ">"El secreto para seguir adelante es empezar."</h3> 
        </section>
        <div>
            <br>
            <br>
            <br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/nike1.jpg') }}" alt="Foto del artículo" width="50">
                        <div class="card-body">
                            <h5 class="card-title" style="color:black">ZAPATOS NIKE</h5>
                            <p class="card-text" style="color:black">Bonitos zapatos deportivos</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/gorra4.jpg') }}" alt="Foto del artículo" width="50">
                        <div class="card-body">
                            <h5 class="card-title" style="color:black">GORRA</h5>
                            <p class="card-text" style="color:black">Descubre la elegancia con nuestras gorras</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/nike5.jpg') }}" alt="Foto del artículo" width="50">
                        <div class="card-body">
                            <h5 class="card-title" style="color:black">Chaqueta</h5>
                            <p class="card-text" style="color:black">Lo mas buscado de la semana</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
@endsection