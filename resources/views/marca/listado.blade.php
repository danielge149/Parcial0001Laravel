

@extends('layouts.app')

@section('title', 'Marcas')

@section('content')
   <div>
    <br><br><br>
   </div>
 
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brand as $m)
                <tr>
                    <td>{{$m->idMarca}}</td>
                    <td>{{$m->descripcion}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
