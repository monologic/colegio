@extends('templates.main')

@section('title', 'Album')

@section('content')
     <div class="cart">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Epigrafe</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albuns as $albun)
                <tr>
                    <td>{{$albun->nombre}}</td>
                    <td>{{$albun->epigrafe}}</td>
                    <td><a href="getAlbum/{{$albun->id}}" class="btn btn-success"><i class="glyphicon glyphicon-picture"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection