@extends('welcome')

@section('title', 'Home')

@section('content')
	<div id="main">
		<div class="col-md-12">
							<section class="slid" ng-controller="sliderController" ng-init="gets()">
								<div id="owl-demo" class="owl-carousel">
							        <div class="item" ng-repeat="f in slider" on-finish-render="ngRepeatFinished"><img class="elslider"  src="imagen/slider/@{{f.imagen}}" ></div>

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
												<time class="published">@{{k.fecha}}</time>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="imagen/novedades/@{{k.foto}}" alt="" /></a>
										</article>
						</div>	
		</div>	
		<div class="col-md-8 col-xs-10"  ng-controller="noticiaController" ng-init="firstNotice()">
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
				</footer>
			</article>	
		</div>		
		<section >
			<div class="conten">
				<h4 class="text-center">Enlaces</h4>	
			</div>
		</section>
	</div>
@endsection