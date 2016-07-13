@extends('templates.main')

@section('title', 'Estudiantes')

@section('content')
    <h1>Vista de Estudiantes</h1>
    <div ng-controller="estudiantesController" ng-init="getEstudiantes()">
    	
    </div>
    <script src="{{ asset('assets/js/ng-scripts/controllers/estudiantesController.js') }}"></script>
@endsection