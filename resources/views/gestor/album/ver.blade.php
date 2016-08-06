@extends('templates.main')

@section('title', 'Album')

@section('content')
     <div class="cart" style="max-width: 600px">
        <h1 class="titulo text-center">Albumes de fotos</h1>
        <a href="{{ url('app/album/create') }}" class="btn-colegio2" style="display: block;position:relative;padding: 7px;max-width: 100px;right: 0"> Crear Album</a>
        <table class="table">
            <thead>

                <tr>
                    <th>Nombre</th>
                    <th>Epigrafe</th>
                    <th>Fotos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albuns as $albun)
                <tr>
                    <td>{{$albun->nombre}}</td>
                    <td>{{$albun->epigrafe}}</td>
                    <td><a href="getAlbum/{{$albun->id}}" class="btn"><i class="glyphicon glyphicon-picture"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection