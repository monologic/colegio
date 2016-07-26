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
		
		<script src="{{ asset('assets/angular/jquery.min.js') }}"></script>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard.css') }}" />
		<!-- Libreria inmovibles-->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" />
		<link href="{{asset('assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" />
		<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

		<script src="{{ asset('assets/SweetAlert/sweetalert.min.js') }}"></script> 
    	<link rel="stylesheet" type="text/css" href="{{ asset('assets/SweetAlert/sweetalert.css') }}">
    	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styleAdmin.css') }}" />
    	

	</head>
	<body>
	
		<div class="wrapper">
		    <div class="sidebar" data-color="robert" data-image="{{asset('assets/img/sidebar-5.jpg')}}">

		    <!--

		        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
		        Tip 2: you can also add an image using data-image tag

		    -->

		    	<div class="sidebar-wrapper">
		            <div class="logo">
		                <a  class="simple-text">
		                    <img src="{{asset('images/logo.png')}}" width="100" height="90">
		                </a>
		            </div>
					@if (Auth::user()->usuariotipo_id == "1")
				        @include('templates.menu.estudiante')
				    @endif
				    @if (Auth::user()->usuariotipo_id == "2")
				        @include('templates.menu.docente')
				    @endif
				    @if (Auth::user()->usuariotipo_id == "3")
				        @include('templates.menu.administrativo')
				    @endif
				    @if (Auth::user()->usuariotipo_id == "4")
				        @include('templates.menu.directivo')
				    @endif
				    @if (Auth::user()->usuariotipo_id == "5")
				        @include('templates.menu.padre')
				    @endif
				    @if (Auth::user()->usuariotipo_id == "6")
				        @include('templates.menu.admin')
					@endif
		    	</div>
		    </div>

		    <div class="main-panel">
		        <nav class="navbar navbar-default navbar-fixed">
		            <div class="container-fluid">
		                <div class="navbar-header">
		                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
		                        <span class="sr-only">Toggle navigation</span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                    </button>
		                    <a class="navbar-brand" href="#">Robert Gagne</a>
		                </div>
		                <div class="collapse navbar-collapse">
							 <ul class="nav navbar-nav navbar-right">
							 	<li>
		                            <a href="#">
		                                {{Auth::user()->nombres}}
		                            </a>
		                        </li>
		                        <li>
		                            <a href="/logout">
		                                Salir
		                            </a>
		                        </li>
		                    </ul>
		                </div>
		            </div>
		        </nav>
		        <div class="content">
					<div class="" ng-app="robertApp">
					
						<script src="{{ asset('assets/angular/angular.min.js') }}"></script>
						<script src="{{ asset('assets/js/ng-scripts/app.js') }}"></script>
						<script src="{{ asset('assets/js/dashboard.js') }}"></script>
		            	@yield('content')
		        	</div>
				</div><!-- /container -->
		    </div>
		</div>

		
	</body>
</html>