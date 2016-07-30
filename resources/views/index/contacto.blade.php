@extends('welcome')

@section('title', 'Contacto')

@section('content')
	<div id="main">
		<section class="row">
			<div class="ctn col-md-6">
				<div class="card">
					<h3 class="tituloadd">Contactenos</h3>
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
							<textarea name="contenido" id="" cols="30" rows="4" ></textarea>
						</div>
						<input type="submit" value="Enviar">
					</form>
				</div>
			</div>
			
			<div class="ctn col-md-6">
				<div class="card" ng-controller="colegioController" ng-init="get()">
					<div class="info" ng-repeat="o in colegio" >
						<h3 class="tituloadd">Información</h3>
						<h4 style="margin-top: 25px">Visitanos en:</h4>
						<p> <i class="fa fa-bookmark" aria-hidden="true"></i> Perú - @{{o.region}} - @{{o.ciudad}}</p>
						<h4>Buscanos en:</h4>
						<p> <i class="fa fa-map-marker" aria-hidden="true"></i> @{{o.direccion}}</p>
						<h4>Escribenos a:</h4>
						<p> <i class="fa fa-envelope" aria-hidden="true"></i> @{{o.email}}</p>
						<h4>Llamanos al:</h4>
						<p> <i class="fa fa-volume-control-phone" aria-hidden="true"></i> @{{o.telefono}}</p>
						
					</div>
					
				</div>	
			</div>
		</section>
		<section class="col-md-12 card" style="margin-top: 50px;padding-top: 50px">
			<h3 class="tituloadd">Ubicación</h3>
			<map id="map" style="display: block;width: 90%;height: 400px;margin:50px auto 30px auto"></map>
		</section>
		<script>
	      function initMap() {
	        // Create a map object and specify the DOM element for display.
	        var pos = {lat: -17.196075, lng: -70.933936};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          center:pos ,
	          scrollwheel: false,
	          zoom: 16
	        });
	        var marker = new google.maps.Marker({
			    map: map,
			    position: pos,
			    title: 'Hello World!'
			  });
	      }

	    </script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPUa-hhhm8i0ndVv-vHifEy6yeko8wQv8&callback=initMap"
    async defer></script>
		
	</div>
@endsection