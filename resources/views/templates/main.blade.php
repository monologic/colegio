<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>@yield('title')</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/component.css') }}" />
		<script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
		<script src="{{ asset('assets/angular/jquery.min.js') }}"></script>

		
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styleAdmin.css') }}" />
		<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

		<script src="{{ asset('assets/SweetAlert/sweetalert.min.js') }}"></script> 
    	<link rel="stylesheet" type="text/css" href="{{ asset('assets/SweetAlert/sweetalert.css') }}">
    	<link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" />
	</head>
	<body>
		<div class="contenedor">
			<div class="nav">
				<ul id="gn-menu" class="gn-menu-main">
					<li class="gn-trigger">
						<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
						<nav class="gn-menu-wrapper">
							<div class="gn-scroller">
								<ul class="gn-menu">
									<li class="gn-search-item"><a href="/" class="gn-icon gn-icon-search"><span>Buscar</span></a></li>
									<li><a class="gn-icon gn-icon-download">slider</a></li>
									<li><a class="gn-icon gn-icon-cog">Noticias</a></li>
									<li><a class="gn-icon gn-icon-help" href="{{ url('app/comunicados') }}">Comunicados</a></li>
									<li><a class="gn-icon gn-icon-archive">Novedades</a></li>
								</ul>
							</div><!-- /gn-scroller -->
						</nav>
					</li>
					<li><a class="codrops-icon codrops-icon-prev"> <span class="color">Colegio Robert Gagne</span></a></li>
					<li><a><span class="color">Yo</span></a></li>
					<li><a class="codrops-icon codrops-icon-drop " ><span class="color">Salir</span></a></li>
				</ul>
			</div><!-- /nav -->

			
			<div class="content" ng-app="robertApp">
			
				<script src="{{ asset('assets/angular/angular.min.js') }}"></script>
				<script src="{{ asset('assets/js/ng-scripts/app.js') }}"></script>

            	@yield('content')

            	
        	</div>

		</div><!-- /container -->
		
		<script src="{{ asset('assets/js/classie.js') }}"></script>
		<script src="{{ asset('assets/js/gnmenu.js') }}"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>