<!DOCTYPE HTML>
<html>
	<head>
		<title>Colegio Robert Gagne</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!--Carrusel-->
		<link href="assets/css/owl.carousel.css" rel="stylesheet">
		<link href="assets/css/owl.carousel.css" rel="stylesheet">
    	<link href="assets/css/owl.theme.css" rel="stylesheet">
    	<link href="assets/css/owl.transitions.css" rel="stylesheet">

    	<link rel="stylesheet" href="assets/css/kira.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	
		
		<link rel="stylesheet" type="text/css" href="assets/GridGallery/css/component.css" />
		<script src="assets/GridGallery/js/modernizr.custom.js"></script>



	</head>
	
	<body ng-app="robertApp">
		<!-- Wrapper -->
			<div id="wrapper" style="" >

				<!-- Header -->
					<header id="header">
						<h1><a href="/">Robert Gagne</a></h1>
						<nav class="links">
							<ul>
								
								<li><a href="{{ url('/institucional') }}">Institucional</a></li>
								<li><a href="{{ url('/galeria') }}">Galeria</a></li>
								<li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
								<li><a href="{{ url('/contacto') }}">Contacto</a></li>
							</ul>
						</nav>
						<nav class="main" >
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="me">
									<a href="/login" class="fa fa-user">login</a>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="#">
											<h3>Lorem ipsum</h3>
											<p>Feugiat tempus veroeros dolor</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Dolor sit amet</h3>
											<p>Sed vitae justo condimentum</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Feugiat veroeros</h3>
											<p>Phasellus sed ultricies mi congue</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Etiam sed consequat</h3>
											<p>Porta lectus amet ultricies</p>
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions vertical">
									<li><a href="#" class="button big fit">Log In</a></li>
								</ul>
							</section>

					</section>
				<!-- Slider-->
					
				<!-- Main -->
				<script src="assets/js/jquery-1.9.1.min.js"></script>
				
					@yield('content')
		

			
			</div>

			
			<script src="{{ asset('assets/js/main.js') }}"></script>
			<script src="{{ asset('assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>

			<script src="{{ asset('assets/angular/angular.min.js') }}"></script>
			<script src="{{ asset('assets/js/ng-scripts/app.js') }}"></script>



			<script src="{{ asset('assets/js/ng-scripts/controllers/noticiaController.js') }}"></script> 
			<script src="{{ asset('assets/js/ng-scripts/controllers/comunicadoController.js') }}"></script>
			<script src="{{ asset('assets/js/ng-scripts/controllers/novedadesController.js') }}"></script>
			<script src="{{ asset('assets/js/ng-scripts/controllers/enlaceController.js') }}"></script> 
			<script src="{{ asset('assets/js/ng-scripts/controllers/sliderController.js') }}"></script>
			<script src="{{ asset('assets/js/ng-scripts/directivas/onFinishRender.js') }}"></script>  



   			<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
   			<script>
			   var cw = $('#owl-demo').width();
			   var res= cw/2.4;
			      $('.elslider').css({'height':res+'px'});
			</script>  
		<!-- Scripts -->
			
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	</body>
</html>