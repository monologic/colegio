@extends('templates.main')

@section('title', 'Comunicado')

@section('content')
    <div ng-controller="estadisticaController" ng-init="get()">
        <h1>Hello world!</h1>
   </div>
     <!-- Modal de Edición -->
    <script src="{{ asset('assets/js/ng-scripts/controllers/estadisticaController.js') }}"></script>
@endsection