@extends('templates.main')

@section('title', 'Crear Directivo')

@section('content')
	<div class="container">
		<h1>Crear Directivo</h1>
    	<div>
    		<div class="formulariok">
    			<form role="form" method="POST" action="{{ url('app/directivos') }}">
    				{{ csrf_field() }}
    				<div class="form-group">
					    <label for="nombres">Nombres</label>
					    <input type="text" class="form-control" id="nombres" placeholder="" name="nombres" required>
					</div>
					<div class="form-group">
					    <label for="apellidos">Apellidos</label>
					    <input type="text" class="form-control" id="apellidos" placeholder="" name="apellidos" required>
					</div>
					<div class="form-group">
					    <label for="dni">DNI</label>
					    <input type="text" class="form-control" id="dni" placeholder="" name="dni" required>
					</div>
					<button type="submit" class="btn btn-default">Guardar</button>
    			</form>
    		</div>
    	</div>
	</div>
@endsection