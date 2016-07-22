@extends('templates.main')

@section('title', 'Añadir archivo a biblioteca')

@section('content')
	<div class="contenidos">
		<div class="cart" style="max-width: 600px">
			<h1 class="titulo">Añadir archivo a biblioteca</h1>
	    	<div>
	    		<div class="formulariok">
	    			<form role="form" method="POST" action="{{ url('app/archivos') }}" accept-charset="UTF-8" enctype="multipart/form-data">
	    				{{ csrf_field() }}
	    				<div class="form-group">
						    <label for="titulo">Título</label>
						    <input type="text" class="form-control" id="nombre"  name="titulo" required>
						</div>
	    				<div class="form-group">
						    <label for="autor">Autor</label>
						    <input type="text" class="form-control" id="autor" name="autor" placeholder="" name="autor" required>
						</div>
						<div class="form-group">
						    <label for="pub_lugar">Lugar de Publicación</label>
						    <input type="text" class="form-control" id="pub_lugar"  name="pub_lugar" required>
						</div>
						<div class="form-group">
						    <label for="pub_editorial">Editorial</label>
						    <input type="text" class="form-control" id="pub_editorial"  name="pub_editorial" required>
						</div>
						<div class="form-group">
						    <label for="pub_year">Año de Publicación</label>
						    <input type="text" class="form-control" id="pub_year"  name="pub_year" required>
						</div>
						<div class="form-group">
						    <label for="edicion">Edición</label>
						    <input type="text" class="form-control" id="edicion"  name="edicion" required>
						</div>
						<div class="form-group">
						    <b for="archivo">Archivo</b>
						    <input type="file" name="archivo">
						
						<div class="form-group">
							<label for="edicion">Tipo de Archivo</label>
							<select class="form-control" name="archivotipo_id" required>
	  							@foreach ($archivoTipos as $at)
	 						    	<option id="{{$at->id}}">{{ $at->tipo }}</option>
	 						    	<option value="{{$at->id}}">{{ $at->tipo }}</option>
	  							@endforeach
  							</select>
						</div>
						<input type="hidden" name="posteador" value="{{Auth::user()->dni}}">
						<button type="submit" class="btn btn-colegio">Guardar</button>
	    			</form>
	    		</div>
	    	</div>
		</div>
	</div>
@endsection