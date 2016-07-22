@extends('templates.main')

@section('title', 'Crear Comunicado')

@section('content')
	<div class="contenidos">
		<div class="cart" style="max-width: 600px">
			<h1 class="titulo">Crear Comunicado</h1>
	    	<div ng-controller="estudiantesController">
	    		<div class="formulariok">
	    			<form role="form" method="POST" action="{{ url('app/comunicados') }}" accept-charset="UTF-8" enctype="multipart/form-data">
	    				{{ csrf_field() }}
	    				<div class="form-group">
						    <label for="nombre">Nombres</label>
						    <input type="text" class="form-control" id="nombre" placeholder="" name="nombre" required>
						</div>
						<div class="form-group">
						    <label for="puesto_cargo">Cargo</label>
						    <input type="text" class="form-control" id="puesto_cargo"  name="puesto_cargo" required>
						</div>
						<div class="form-group">
						    <label for="destinatario">Destinatario</label>
						    <input type="text" class="form-control" id="destinatario" name="destinatario" required>
						</div>
						<div class="form-group">
						    <label for="asunto">Asunto</label>
						    <input type="text" class="form-control" id="asunto" name="asunto" placeholder="" name="asunto" required>
						</div>
						
						<div class="form-group">
						    <b><p for="cuerpo">Cuerpo</p></b>
						    <textarea name="cuerpo" id="cuerpo" class="form-control" cols="70" rows="10"></textarea>
						</div>
						<div class="form-group">
						    <label for="fecha_pub">Fecha de publicación</label>
						    <input type="date" class="form-control" id="fecha_pub" placeholder="" name="fecha_pub" required>
						</div>
						<input type="text" name="posteador" value="{{Auth::user()->dni}}">
						<div class="form-group">
						    <b><p for="archivo">Archivo</p></b>
						    <input type="file" name="imagen">
						</div>
						
						<button type="submit" class="btn btn-colegio">Guardar</button>
	    			</form>
	    		</div>
	    	</div>
		</div>
	</div>
	
@endsection