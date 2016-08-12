@extends('welcome')

@section('title', 'Colegio Rober Gagne')

@section('content')
	<div id="main" style="margin-top: -50px">
		<div class="row">
			<div class="col-md-12 col-sm-12" id="vf" style="z-index: 1;margin-bottom: 50px">
							
			</div>
			<div class="col-md-4 col-sm-4" style="z-index: 1;margin-bottom: 50px">
							<section id="intro">
								<a href="#" ><img src="images/logo.gif" alt="" class="insig" /></a>
								<header class="text-center">
									<h2><img src="images/txt.png" alt="" width="200" /></h2>
									<p style="font-size: .7rem;margin-top: -60px">Superación y disciplina</a></p>
								</header>
							</section>
							<section ng-controller="comunicadoController" ng-init="getComuni()">
								<br>
								<h3 align="center">Comunicados</h3><br>
									<ul class="posts">
										<li ng-repeat="c in comun">
											<article>
												<header>
													<h3><a href="/comunicado/@{{c.id}}">@{{c.asunto}}</a></h3>
													<time class="published">@{{c.solofe}}</time>
												</header>
												<a href="" class="image"><img src="images/New.png" alt="" /></a>
											</article>
										</li>
									</ul>
									<a href="/comunicados">Ver todos los comunciados</a>
							</section>

							<br><h3 align="center">Novedades</h3><br>
							<div class="mini-posts" ng-controller="novedadesController" ng-init="firstNovedades()">
								
										<!-- Mini Post -->
											<article class="mini-post" ng-repeat="k in allnovedades">
												<header>
													<h3><a href="/novedad/@{{k.id}}">@{{k.titulo}}</a></h3>
													<time class="published">@{{k.fecha}}</time>
												</header>
												<a href="/novedad/@{{k.id}}" class="image"><img src="imagen/novedades/@{{k.foto}}" alt="" /></a>
											</article>
											<a href="/novedades">Ver todas la novedades</a>
							</div>	
			</div>	
			<div class="col-md-8 col-sm-8 col-xs-10"  style="z-index: 1;margin-bottom: 50px">
				<section id="copy" class="slid"  ng-controller="sliderController" ng-init="gets()">
					<div id="owl-demo" class="owl-carousel">
						<div class="item" ng-repeat="f in slider" on-finish-render="ngRepeatFinished"><img class="img-responsive"  src="imagen/slider/@{{f.imagen}}" ><p class="titulo-slider">@{{f.titulo}}</p></div>

					</div>
				</section>
				<section  ng-controller="noticiaController" ng-init="firstNotice()" style="padding-top: 20px">
					<h2>Noticias</h2>
					<article class="noticia" ng-repeat="n in allnot">
						<header>
											<div class="title">
												<h2><a href="noticias/@{{n.id}}">@{{n.titulo}}</a></h2>
												<blockquote>@{{n.copete}}</blockquote>
											</div>
											<div class="meta">
												<time class="published" datetime="2015-11-01">@{{n.solofe}}</time>
												<p class="text-center"><p>@{{n.autor}}</p></p>
											</div>
						</header>
						<a href="noticias/@{{n.id}}" class="image featured"><img src="imagen/noticia/@{{n.foto}}" alt="" /></a>
					</article>	
				</section>
				
				<a href="/noticiasall">Ver todas la noticias</a>
			</div>		

			<section class="col-md-12 col-sm-12"  ng-controller="enlaceController" ng-init="getindexe()">
				<div class="conten">
					<h4 class="text-center">Enlaces</h4>
					<div ng-repeat="en in enlaces" style="margin-top: 70px">
						<a href="@{{en.url}}" target="_blank">
							<div class="col-md-3 col-sm-4 col-xs-6">
								<img class="child" src="imagen/enlace/@{{en.imagen}}" style="width:100%;margin: 0px auto 0px auto" alt="" /><figcaption class="text-center">@{{en.nombre}}</figcaption>
							</div>
						</a>
					</div>	
				</div>
			</section>
		</div>
		
		<script src="{{ asset('assets/js/ng-scripts/controllers/noticiaController.js') }}"></script> 
		<script src="{{ asset('assets/js/ng-scripts/controllers/comunicadoController.js') }}"></script>
		<script src="{{ asset('assets/js/ng-scripts/controllers/novedadesController.js') }}"></script>
		<script src="{{ asset('assets/js/ng-scripts/controllers/enlaceController.js') }}"></script> 
		<script src="{{ asset('assets/js/ng-scripts/controllers/sliderController.js') }}"></script>
		<script>
			$(window).resize(function(){
			   // Código de respuesta
			   		a=$( window ).width()
					if( a <= 768 ){
							//$('#copy').appendTo('#vf');
					} else {
						
					}
			});
		</script>
	</div>
@endsection