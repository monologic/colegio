@extends('templates.main')

@section('title', 'Crear Directivo')

@section('content')
	<div class="contenidos">
		<div class="cart" style="max-width: 600px">
			<h1 class="titulo">Agregando Directivo</h1>
	    		<div class="formulariok">
	    			<form  method="POST" action="{{ url('app/album') }}" accept-charset="UTF-8" enctype="multipart/form-data">
	    				{{ csrf_field() }}
	    				<div class="form-group">
						    <label for="titulo">Título</label>
						    <input type="text" class="form-control" id="titulo" placeholder="" name="titulo" required>
						</div>
						<div class="form-group">
						    <label for="nombre">Nombre</label>
						    <input type="text" class="form-control" id="nombre" placeholder="" name="nombre" required>
						</div>
						<div class="form-group">
						    <label for="cargo">Cargo</label>
						    <input type="text" class="form-control" id="cargo" placeholder="" name="cargo" required>
						</div>
						<div class="form-group">
						    <label for="mas">Información adicional</label>
						    <input type="text" class="form-control" id="mas" placeholder="" name="mas" required>
						</div>
						<div class="form-group">
                                        <b for="archivo">Foto</b>
                                        <input type="file" name="foto">
                                    </div>
						<button type="submit" class="btn btn-colegio">Guardar</button>
	    			</form>
	    		</div>
	    	</div>
		</div>
	</div>
	
@endsection