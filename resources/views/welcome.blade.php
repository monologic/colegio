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
	</head>
	
	<body ng-app="robertApp">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="">Colegio Robert Gagne</a></h1>
						<nav class="links">
							<ul>
								<li><a href="#">Inicio</a></li>
								<li><a href="#">Admisión</a></li>
								<li><a href="#">Galeria</a></li>
								<li><a href="#">Nosotros</a></li>
								<li><a href="#">Contacto</a></li>
							</ul>
						</nav>
						<nav class="main">
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
					<div id="main">
						<div class="col-md-12">
							<section class="slid">
								<div id="owl-demo" class="owl-carousel">
							        <div class="item"><img src="assets/slider/fullimage4.jpg" class="elslider"></div>
							        <div class="item"><img src="assets/slider/fullimage5.jpg" class="elslider"></div>
							        <div class="item"><img src="assets/slider/fullimage6.jpg" class="elslider"></div>
							       	<div class="item"><img src="assets/slider/fullimage7.jpg" class="elslider"></div>
							        <div class="item"><img src="assets/slider/fullimage1.jpg" class="elslider" ></div>
							        <div class="item"><img src="assets/slider/fullimage2.jpg" class="elslider"></div>
							      	<div class="item"><img src="assets/slider/fullimage3.jpg" class="elslider"></div>
							    </div>
							</section>
						</div>
					<div class="col-md-4">
						<section id="intro">
							<a href="#" ><img src="images/logo.gif" alt="" class="insig" /></a>
							<header class="text-center">
								<h2>Robert Gagne</h2>
								<p>Calidad y experiencia para la educación</a></p>
							</header>
						</section>
						<section ng-controller="comunicadoController" ng-init="getComuni()">
							<br>
							<h3 align="center">Comunicados</h3><br>
								<ul class="posts">
									<li ng-repeat="c in comun">
										<article>
											<header>
												<h3><a href="#">@{{c.asunto}}</a></h3>
												<time class="published">@{{c.solofe}}</time>
											</header>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
										</article>
									</li>
								</ul>
						</section>

						<br><h3 align="center">Novendades</h3><br>
						<div class="mini-posts" ng-controller="novedadesController" ng-init="firstNovedades()">
							
									<!-- Mini Post -->
										<article class="mini-post" ng-repeat="k in allnovedades">
											<header>
												<h3><a href="#">@{{k.titulo}}</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="imagen/novedades/@{{k.foto}}" alt="" /></a>
										</article>
						</div>	
					</div>	
					<div class="col-md-8 con"  ng-controller="noticiaController" ng-init="firstNotice()">
						<article class="noticia" ng-repeat="n in allnot">
								<header>
									<div class="title">
										<h2><a>@{{n.titulo}}</a></h2>
										
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">@{{n.solofe}}</time>
										<a href="#" class="author"><span class="name">@{{n.autor}}</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="imagen/noticia/@{{n.foto}}" alt="" /></a>
								<blockquote>@{{n.copete}}</blockquote>
								<footer>
									<ul class="actions">
										<li><a href="#" class="button big">Noticia Completa</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
						</article>	
					</div>
					
							
				</div>
			<script src="assets/js/jquery-1.9.1.min.js"></script>
			
			<script src="{{ asset('assets/js/main.js') }}"></script>
			<script src="{{ asset('assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>

			<script src="{{ asset('assets/angular/angular.min.js') }}"></script>
			<script src="{{ asset('assets/js/ng-scripts/app.js') }}"></script>



			<script src="{{ asset('assets/js/ng-scripts/controllers/noticiaController.js') }}"></script> 
			<script src="{{ asset('assets/js/ng-scripts/controllers/comunicadoController.js') }}"></script>
			<script src="{{ asset('assets/js/ng-scripts/controllers/novedadesController.js') }}"></script>  



   			<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>  
		<!-- Scripts -->
			
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->

			<script>
				$(document).ready(function() {
				 
				  $("#owl-demo").owlCarousel({
				    
				    singleItem : true,
				    transitionStyle : "fade"
				  });
				 
				});
			</script>

	</body>
</html>