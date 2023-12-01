@extends('layouts.app')

@section('title', 'Otra Vista')

@section('content')
    <div>
        <br><br><br>
   </div>
    <div class="row">
        @foreach($articule as $a)
            <div class="col-md-6 mb-4">
                <div class="card mb-6">
                    <img src="{{ asset($a->foto) }}" class="card-img-top" alt="Foto del artículo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $a->nombre }}</h5>
                        <p class="card-text">{{ $a->descripcion }}</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Referencia:</strong> {{ $a->referencia }}</li>
                            <li class="list-group-item"><strong>Color:</strong> {{ $a->color }}</li>
                            <li class="list-group-item"><strong>Precio Unitario:</strong> {{ $a->precioUnitario }}</li>
                            <li class="list-group-item"><strong>Observación:</strong> {{ $a->observacion }}</li>
                            <li class="list-group-item"><strong>Marca:</strong> {{ $a->nombre_marca }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
