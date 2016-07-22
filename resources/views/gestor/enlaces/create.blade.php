@extends('templates.main')

@section('title', 'Crear Enlace')

@section('content')
	<div class="contenidos">
		<div class="cart" style="max-width: 600px">
			<h1 class="titulo">Crear Enlace</h1>
	    		<div class="formulariok">
	    			<form  method="POST" action="{{ url('app/enlaces') }}" accept-charset="UTF-8" enctype="multipart/form-data">
	    				{{ csrf_field() }}
	    				<div class="form-group">
						    <label for="nombre">Nombres</label>
						    <input type="text" class="form-control" id="nombre" placeholder="" name="nombre" required>
						</div>
						<div class="form-group">
						    <label for="direccion">Dirección</label>
						    <input type="text" class="form-control" id="direccion"  name="direccion" required>
						</div>
						<div class="form-group">
						    <b><p for="imagen">Imagen</p></b>
						    <input type="file" name="imagen">
						</div>
						
						<button type="submit" class="btn btn-colegio">Guardar</button>
	    			</form>
	    		</div>
	    	</div>
		</div>
	</div>
	
@endsection