@extends('welcome')

@section('title', 'Nosotros')

@section('content')
	<div id="main">
		<div class="container">
			<div class="row">
		        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
		            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
		              <div class="list-group">
		                <a href="#" class="list-group-item active text-center">
		                  <h4 class="glyphicon glyphicon-star-empty"></h4> Bienvenida
		                </a>
		                <a href="#" class="list-group-item text-center">
		                  <h4 class="glyphicon glyphicon-eye-open"></h4> Visión
		                </a>
		                <a href="#" class="list-group-item text-center">
		                  <h4 class="fa fa-child"></h4> Misión
		                </a>
		                <a href="#" class="list-group-item text-center">
		                  <h4 class="fa fa-folder-open"></h4> Historia
		                </a>
		                <a href="#" class="list-group-item text-center">
		                  <h4 class="glyphicon glyphicon-education"></h4> Directorio y Docentes
		                </a>
		              </div>
		            </div>
		            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
					@foreach ($nosotros as $nosotro)
		                <!-- train section -->
		                <div class="bhoechie-tab-content">
		                      <h1 class="text-center" style="font-size:1.4em;color:#96281B;margin-top: 30px">Bienvenida</h1>
		                      <p class="texts">{!! $nosotro->bienvenida !!}</p>
		                </div>
		                <div class="bhoechie-tab-content">
		                      <h1 class="text-center" style="font-size:1.4em;color:#96281B;margin-top: 30px">Visión</h1>
		                      <p>{!!$nosotro->vision!!}</p>
		                </div>
		                <div class="bhoechie-tab-content">
		                      <h1 class="text-center" style="font-size:1.4em;color:#96281B;margin-top: 30px">Misión</h1>
		                      <p>{!!$nosotro->mision!!}</p>
		                </div>
		                <div class="bhoechie-tab-content">
		                      <h1 class="text-center" style="font-size:1.4em;color:#96281B;margin-top: 30px">Historia</h1>
		                      <p>{!!$nosotro->historia!!}</p>
		                </div>
		    		@endforeach 
		            
		            </div>
		        </div>
		  	</div>
		</div>
	</div>
	<script src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>
	<script>
		$(document).ready(function() {
		    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
		        e.preventDefault();
		        $(this).siblings('a.active').removeClass("active");
		        $(this).addClass("active");
		        var index = $(this).index();
		        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
		        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
		    });
		});
	</script>
@endsection