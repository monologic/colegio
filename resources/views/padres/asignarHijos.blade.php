@extends('templates.main')

@section('title', 'Asignar Hijos a Padre')

@section('content')
	<div class="container">
		<div class="cart">
			<div ng-controller="padresController">
				<h1 class="titulo">Asignar hijos a padre</h1>
				<form ng-submit="buscarPadre()" class="form-inline">
					<div class="form-group">
					    <label for="dni">DNI de padre</label>
					    <input type="text" class="form-control" id="dni" placeholder="" ng-model="dni" required>
					</div>
					<button type="submit" class="btn btn-colegio">Buscar</button>
	    		</form>
	    		<div ng-if="padre.length == 1" class="row">
	    			<div class="col-md-6">
	    				<h1 class="titulo">Información (padre)</h1>
		    			<table class="table">
		    				<tr>
		    					<td>Nombre:</td>
		    					<td> @{{ padre[0].nombres + " " +padre[0].apellidos }}</td>
		    				</tr>
		    				<tr>
		    					<td>DNI:</td>
		    					<td> @{{ padre[0].dni }}</td>
		    				</tr>
		    			</table>
		    			<h1 class="titulo2"><strong>Hijos</strong></h1>
		    			<table>
		    				
		    			</table>
	    			</div>
	    			<div class="col-md-6">
	    				<h1 class="titulo">Buscar Hijo</h1>
	    				<form ng-submit="buscarPadre()" class="form-inline">
							<div class="form-group">
							    <label for="dni">DNI de padre</label>
							    <input type="text" class="form-control" id="dni" placeholder="" ng-model="dni" required>
							</div>
							<button type="submit" class="btn btn-colegio">Buscar</button>
			    		</form>
	    			</div>
	    		</div>
			</div>
    	</div>
	</div>
	<script src="{{ asset('assets/js/ng-scripts/controllers/padresController.js') }}"></script>
@endsection