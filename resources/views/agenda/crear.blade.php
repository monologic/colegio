@extends('templates.main')

@section('title', 'Crear Entrada')

@section('content')
	<div class="contenidos">
		<div class="cart" style="max-width: 600px">
			<h1 class="titulo">Crear entrada a Agenda</h1>
	    	<div ng-controller='menuController'>
	    		<div class="formulariok">
	    			<form role="form" method="POST" action="{{ url('app/agenda') }}" accept-charset="UTF-8" enctype="multipart/form-data">
	    				{{ csrf_field() }}
	    				<div class="form-group">
						    <label for="nombre">Emisor</label>
						    <input type="text" class="form-control" id="nombre" placeholder="" name="nombre">
						</div>
						<div class="form-group">
						    <label for="puesto_cargo">Cargo</label>
						    <input type="text" class="form-control" id="puesto_cargo"  name="puesto_cargo">
						</div>
						<div class="form-group">
						    <label for="asunto">Asunto</label>
						    <input type="text" class="form-control" id="asunto" name="asunto" placeholder="" name="asunto" required>
						</div>
						<div class="form-group">
						    <b><p for="cuerpo">Cuerpo</p></b>
						    <textarea name="cuerpo" id="cuerpo" class="form-control" cols="70" rows="10" required></textarea>
						</div>
						<div class="form-group">
					    	<label for="nombres">Nivel</label>
					    	<select class="form-control" id="nivel" ng-model="grados" name="nivel" ng-options="nivel for (nivel, grados) in data" required>
					        </select>
						</div>
						<div class="form-group">
						    <label for="nombres">Grado</label>
						    <select class="form-control" id="grado" ng-disabled="!grados" ng-model="secciones" name="grado" ng-options="grado for (grado, secciones) in grados">
						    </select>
						</div>
						<div class="form-group">
						    <label for="nombres">Sección</label>
						    <select class="form-control" id="seccion" ng-disabled="!secciones" ng-model="seccion" name="seccion" ng-options="seccion for seccion in secciones track by seccion">
						    </select>
						</div>
						<div class="form-group">
						    <label for="nombres">Asignatura</label>
						    <select class="form-control" ng-model="asignatura" name="asignatura" required>
						    	<option>Comunicación</option>
						    	<option>Matemática</option>
						    	<option>Ciencia Tecnología y Ambiente</option>
						    	<option>Ciencias Sociales</option>
						    </select>
						</div>
						<div class="form-group">
						    <label for="fecha_pub">Fecha de publicación</label>
						    <input type="datetime-local" class="form-control" id="fecha_pub" placeholder="" name="fecha_pub" required>
						</div>
						<div class="form-group">
						    <b for="archivo">Imagen</b>
						    <input type="file" name="imagen">
						</div>
						<input type="hidden" name="posteador" value="{{Auth::user()->dni}}">
						
						
						<button type="submit" class="btn btn-colegio">Guardar</button>
	    			</form>
	    		</div>
	    	</div>
		</div>
	</div>
	<script type="text/javascript">
		app.controller('menuController', function($scope) {
			$scope.data = {
		        'Inicial': {
		            '4 años': ['Los Geniales'],
		            '5 años': ['Los Exploradores']
		        },
		        'Primaria': {
		            '1er': ['1', '2'],
		            '2do': ['1', '2'],
		            '3er': ['1', '2'],
		            '4to': ['1', '2'],
		            '5to': ['1', '2'],
		            '6to': ['1', '2']
		        },
		        'Secundaria': {
		            '1er': ['1', '2'],
		            '2do': ['1', '2'],
		            '3er': ['1', '2'],
		            '4to': ['1', '2'],
		            '5to': ['1', '2']
		        }
		    };
		});
	</script>
	<script type="text/javascript">
		$( document ).ready(function() {
			var hoy = new Date();
			a = hoy.getFullYear() + "-" + ( (hoy.getMonth()+1) < 10 ? '0' + (hoy.getMonth()+1) : (hoy.getMonth()+1) ) + "-" + (hoy.getDate() < 10 ?  '0' + hoy.getDate() : hoy.getDate()) + "T12:00";
			$('#fecha_pub').val(a);
		});
	</script>
@endsection