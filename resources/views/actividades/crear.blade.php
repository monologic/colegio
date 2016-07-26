@extends('templates.main')

@section('title', 'Crear Actividad')

@section('content')
	<div class="container">
		
    	<div ng-controller="actividadesController">
    		<div class="cart" style="max-width: 600px">
    			<h1 class="titulo">Crear Actividad</h1>
    			<form role="form" method="POST" action="{{ url('app/actividades') }}">
    				{{ csrf_field() }}
    				<div class="form-group">
					    <label for="titulo">Título</label>
					    <input type="text" class="form-control" id="titulo" ng-model="titulo" placeholder="" name="titulo" required>
					</div>
					<div class="form-group">
					    <label for="fecha_inicio">Fecha y hora (Inicio)</label>
					    <input type="datetime-local" class="form-control" id="fecha_inicio" ng-model="fecha_inicio" placeholder="" name="fecha_inicio" required>
					</div>
					<div class="form-group">
					    <label for="fecha_fin">Fecha y hora (Fin)</label>
					    <input type="datetime-local" class="form-control" id="fecha_fin" ng-model="fecha_fin" placeholder="" name="fecha_fin" required>
					</div>
					<div class="form-group">
						    <b for="descripcion">Descripción</b>
						    <textarea  id="" cols="50" rows="10" name="descripcion" class="form-control"></textarea>
						</div>
					<div class="form-group">
					    <label for="lugar">Lugar</label>
					    <input type="text" class="form-control" id="lugar" ng-model="lugar" placeholder="" name="lugar" required>
					</div>
					<div class="form-group">
					    <label for="nombres">Grado</label>
					    <select class="form-control" ng-model="grado" name="grado" required>
					    	<option>1er</option>
					    	<option>2do</option>
					    	<option>3ro</option>
					    	<option>4to</option>
					    	<option>5to</option>
					    	<option>6to</option>
					    </select>
					</div>
					<div class="form-group">
					    <label for="nombres">Seccion</label>
					    <select class="form-control" ng-model="seccion" name="seccion" required>
					    	<option>1</option>
					    	<option>2</option>
					    </select>
					</div>
					<input type="hidden" name="usuario_id" value="{{Auth::user()->id}}">
					<button type="submit" class="btn btn-colegio">Guardar</button>
    			</form>
    		</div>
    	</div>
	</div>
    
    <script src="{{ asset('assets/js/ng-scripts/controllers/actividadesController.js') }}"></script>
@endsection