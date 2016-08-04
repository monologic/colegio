@extends('templates.main')

@section('title', 'Usuarios')

@section('content')
    
    <div class="" style="width: 80%;margin: 20px auto 20px auto">
        <div class="col-md-3 menux">
            <div class="headuser">
                ESTUDIANTES
            </div>
            <div class="bodyuser">
                <a href="{{ url('app/estudiantes') }}">Lista de estudiantes</a>
                <a href="{{ url('app/estudiantes/create') }}">Agregar estudiantes</a>
            </div>
        </div>
        <div class="col-md-3 menux">
            <div class="headuser">
                DOCENTES
            </div>
            <div class="bodyuser">
                <a href="{{ url('app/docentes') }}">Lista de docentes</a>
                <a href="{{ url('app/docentes/create') }}">Agregar docente</a>
            </div>
        </div>
        <div class="col-md-3 menux">
            <div class="headuser">
                ADMINSTRATIVOS
            </div>
            <div class="bodyuser">
                <a href="{{ url('app/administrativos') }}">Lista de adminstrativos</a>
                <a href="{{ url('app/administrativos/create') }}">Agregar adminstrativo</a>
            </div>
        </div>
        <div class="col-md-3 menux">
            <div class="headuser">
                DIRECTIVOS
            </div>
            <div class="bodyuser">
                <a href="{{ url('app/directivos') }}">Ver padres</a>
                <a href="{{ url('app/directivos/create') }}">Agregar padres</a>
            </div>
        </div>
        <div class="col-md-3 menux">
            <div class="headuser">
                PADRES
            </div>
            <div class="bodyuser">
                <a href="{{ url('app/padres') }}">Ver padres</a>
                <a href="{{ url('app/padres/create') }}">Agregar padres</a>
                <a href="{{ url('app/asignarHijos') }}">Asignar hijos</a>
            </div>
        </div>
    </div>
    
@endsection