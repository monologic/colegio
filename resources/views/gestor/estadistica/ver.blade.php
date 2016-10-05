@extends('templates.main')

@section('title', 'Comunicado')

@section('content')
    <div ng-controller="estadisticaController" ng-init="get()">
        <div class="row cont-est">
        	<p style="margin-left:20px">Seleccione usuario :</p>
        	<div class="col-md-8">
	        	<select  ng-model="user" class="form-control">
	        		<option ng-repeat="us in users | orderBy:'apellidos'" value="@{{us.dni}}">@{{us.apellidos}} , @{{us.nombres}} </option>
	        	</select>	
        	</div>
        	<div class="col-md-4">
        		<button class="btn btn-colegio"><i class="fa fa-search"></i> &nbsp;Buscar</button>
        	</div>
        	
        </div>
   </div>
     <!-- Modal de Edición -->
    <script src="{{ asset('assets/js/ng-scripts/controllers/estadisticaController.js') }}"></script>
@endsection