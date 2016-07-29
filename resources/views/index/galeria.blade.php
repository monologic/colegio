@extends('welcome')

@section('title', 'Galeria')

@section('content')
	<div id="main">
		
		<div id="grid-gallery" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid">
					 @foreach ($galerias as $galeria)
						<li>
							<figure>
								<img src="imagen/galeria/{{$galeria->imagen}}" alt="{{$galeria->nombre}} robert gagne"/>
								<figcaption><h3>{{ $galeria->nombre }}</h3></figcaption>
							</figure>
						</li>
						@endforeach 
					</ul>
				</section><!-- // grid-wrap -->
				<section class="slideshow">
					<ul>
					 @foreach ($galerias as $galeria)
						<li>
							<figure>
								<figcaption>
									<h3>{{ $galeria->nombre }}</h3>
									<p>{{ $galeria->descripcion }}</p>
								</figcaption>
								<img src="imagen/galeria/{{$galeria->imagen}}" alt="{{$galeria->nombre}} robert gagne"/>
							</figure>
						</li>
						@endforeach 
					</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					
				</section><!-- // slideshow -->
		</div><!-- // grid-gallery -->

	</div>


	<script src="assets/GridGallery/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/GridGallery/js/masonry.pkgd.min.js"></script>
	<script src="assets/GridGallery/js/classie.js"></script>
	<script src="assets/GridGallery/js/cbpGridGallery.js"></script>
	<script>
		new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
	</script>
@endsection