@extends('welcome')

@section('title', 'Institucional')

@section('content')
	<div id="main">
		<div class="container">
			<div class="row">
		        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
		            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
		              <div class="list-group">
		                <a href="#" class="list-group-item active text-center">
		                  <h4 class="glyphicon glyphicon-star-empty"></h4> Nivel inicial
		                </a>
		                <a href="#" class="list-group-item text-center">
		                  <h4 class="glyphicon glyphicon-eye-open"></h4> Nivel Primaria
		                </a>
		                <a href="#" class="list-group-item text-center">
		                  <h4 class="fa fa-child"></h4> Nivel Secundaria
		                </a>
		              </div>
		            </div>
		            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
		                <!-- flight section -->
		                <div class="bhoechie-tab-content active">
		                    <center>
		                      <h5 class="" style="font-size:1.4em;color:#96281B;margin-top: 30px">Nivel Inicial</h5>
		                      <p class="text-justify" style="padding: 7%">La Educación Inicial es el primer nivel de la Educación Básica Regular. Atiende a niños y niñas menores de 6 años de edad, con enfoque intercultural e inclusivo, promoviendo el desarrollo y aprendizaje infantil mediante acciones educativas. <br>

Contribuye a un adecuado proceso de transición del hogar al sistema educativo, a través de diferentes tipos y formas de servicios educativos, con estrategias que funcionan con la participación de la familia, agentes comunitarios y autoridades de los gobiernos locales. <br>

Desde muy temprana, se enfatiza la obligación de las familias de hacer participar a los niños en servicios escolarizados o no escolarizados de Educación Inicial. La atención se sustenta en un enfoque que considera al niño o niña como persona, que interactúa e influye en su entorno, protagonista de su aprendizaje, con derecho a aprender y desarrollarse en forma integral, gradual y oportuna y en coherencia con los principios de la Educación Inicial.</p>
		                     <h5 class="" style="font-size:1em;color:#96281B;margin-top: 30px">Nivel Inicial 2015 - COLEGIO ROBERT GAGNE</h5>
		                     <img src="images/INICIAL.jpg" style="width: 80%;margin:10px auto 30px auto" alt="">
		                    </center>
		                </div>
		                <!-- train section -->
		                <div class="bhoechie-tab-content">
		                    
		                      <h1 class="text-center" style="font-size:1.4em;color:#96281B;margin-top: 30px"> NIVEL PRIMARIA</h1>
		                      <p style="padding: 7%">Es el segundo nivel de la Educación Básica Regular. Atiende con enfoque inclusivo e intercultural a niños y niñas a partir de los 6 años de edad.</p>
		                      <h5 class="" style="font-size:1em;color:#96281B;margin-top: 30px">Nivel Inicial 2015 - COLEGIO ROBERT GAGNE</h5>
		                     <img src="images/INICIAL.jpg" style="width: 80%;margin:10px auto 30px auto" alt="">
		                </div>
		    
		                <!-- hotel search -->
		                <div class="bhoechie-tab-content">
		                      <h1 class="text-center" style="font-size:1.4em;color:#96281B;margin-top: 30px"> NIVEL SECUNDARIA</h1>
		                      <p style="padding: 7%"> Es el tercer nivel de la Educación Básica Regular. Atiende en las instituciones educativas a los adolescentes que hayan aprobado el sexto grado de Educación Primaria.</p>
		                      <h5 class="" style="font-size:1em;color:#96281B;margin-top: 30px">Nivel Inicial 2015 - COLEGIO ROBERT GAGNE</h5>
		                     <img src="images/INICIAL.jpg" style="width: 80%;margin:10px auto 30px auto" alt="">
		                </div>
		                <div class="bhoechie-tab-content">
		                    <center>
		                    <br>
		                      <h1 class="fa fa-spinner" style="font-size:10em;color:#96281B"></h1>
		                      <h2 style="margin-top: 0;color:#96281B">Estamos trabajando</h2>
		                    </center>
		                </div>
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