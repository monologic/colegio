@extends('templates.main')

@section('title', 'Crear Noticia')

@section('content')
	<div class="contenidos">
		<div class="cart" style="max-width: 600px">
			<h1 class="titulo">Crear Noticia</h1>
	    	<div>
	    		<div class="formulariok">
	    			<form role="form" method="POST" action="{{ url('app/noticias') }}" accept-charset="UTF-8" enctype="multipart/form-data">
	    				{{ csrf_field() }}
	    				<div class="form-group">
						    <label for="autor">Autor</label>
						    <input type="text" class="form-control" id="autor" name="autor" placeholder="" name="autor" required>
						</div>
	    				<div class="form-group">
						    <label for="titulo">Titulo</label>
						    <input type="text" class="form-control" id="nombre"  name="titulo" required>
						</div>
						<div class="form-group">
						    <label for="copete">Copete</label>
						    <input type="text" class="form-control" id="copete"  name="copete" required>
						</div>
						
						<div class="form-group">
						    <b for="archivo">Foto</b>
						    <input type="file" name="imagen">
						</div>
						<div class="form-group">
						    <label for="epigrafe">Epigrafe</label>
						    <input type="text" class="form-control" id="destinatario" name="epigrafe" required>
						</div>
						<div class="form-group">
						    <b for="cuerpo">Cuerpo</b>
						    <textarea  id="" cols="50" rows="10" name="cuerpo" class="form-control"></textarea>
						</div>
						<div class="form-group">
						    <label for="fecha">Fecha de publicación</label>
						    <input type="date" class="form-control" id="fecha" placeholder="" name="fecha" required>
						</div>
						<input type="hidden" name="posteador" value="{{Auth::user()->dni}}">
						<button type="submit" class="btn btn-colegio">Guardar</button>
	    			</form>
	    		</div>
	    	</div>
		</div>
	</div>
@endsection