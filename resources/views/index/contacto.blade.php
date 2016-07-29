@extends('welcome')

@section('title', 'Contacto')

@section('content')
	<div id="main">
		<section class="row">
			<div class="ctn col-md-6">
				<div class="card">
					<h3 class="text-center tituloadd">Contactenos</h3>
					<form action="">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" id="nombre" name="nombre" class="form-control">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="contenido">Mensaje</label>
							<textarea name="contenido" id="" cols="30" rows="10" ></textarea>
						</div>
						<input type="submit" value="Enviar">
					</form>
				</div>
			</div>
			
			<div class="ctn col-md-6">
				<div class="card">
					<h3 class="text-center tituloadd">Contactenos</h3>
					<form action="">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" id="nombre" name="nombre" class="form-control">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="contenido">Mensaje</label>
							<textarea name="contenido" id="" cols="30" rows="10" ></textarea>
						</div>
						<input type="submit" value="Enviar">
					</form>
				</div>	
			</div>
		</section>
		
	</div>
@endsection