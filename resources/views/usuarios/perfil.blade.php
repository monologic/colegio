@extends('templates.main')

@section('title', 'Perfil de Usuario')

@section('content')
	<div class="container">
		<div class="cart"  style="max-width: 600px">
		<h1 class="titulo">Editar Usuario</h1>
    		<div ng-controller="usuarioController">
    			<form ng-submit="editar()">
    				{{ csrf_field() }}
					<div class="form-group">
					    <label for="usuario">Usuario</label>
					    <input type="text" class="form-control" id="usuario" placeholder="" name="usuario" required value="{{ Auth::user()->usuario }}" >
					</div>
					<div class="form-group">
					    <label for="dni">Contraseña</label>
					    <input type="password" class="form-control" id="dni" placeholder="Dejar en blanco a menos que desee cambiar la contraseña" name="dni" ng-model="pass1">
					</div>
					<div class="form-group">
					    <label for="dni">Vuelva a escribir la Contraseña</label>
					    <input type="password" class="form-control" id="dni" placeholder="Dejar en blanco a menos que desee cambiar la contraseña" name="dni" ng-model="pass2">
					</div>
					<button type="submit" class="btn btn-colegio">Editar</button>
    			</form>
    		</div>
    	</div>
	</div>
	 <script src="{{ asset('assets/js/ng-scripts/controllers/usuarioController.js') }}"></script>
@endsection