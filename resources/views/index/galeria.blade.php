@extends('welcome')

@section('title', 'Galeria')

@section('content')
	<div id="main">
		<h1 class="text-center" style="font-size: 1.7rem">Album de fotos</h1>
		<div style="width: 90% ;margin:30px auto 30px auto">
			@foreach ($todo[0] as $info)
		 	<h3>{{ $info->nombre }}</h3>
		 	<p>{{ $info->descripcion }}</p>
			<div id="grid-gallery{{ $info->id }}" class="grid-gallery">
						<section class="grid-wrap">
							<ul class="grid">
							 @foreach ($info->album as $galeria)
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
							 @foreach ($info->album as $galeria)
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
			</div>
			 @endforeach 
		</div>
		 
		<!-- // grid-gallery -->

		<h1 class="text-center" style="font-size: 1.7rem">Videos</h1>
		<div style="width: 90% ;margin:30px auto 30px auto">
			<div id="grid-video" class="grid-gallery">
					<section class="grid-wrap">
						<ul class="grid">
						 @foreach ($todo[1] as $video)
							<li>
								<figure>
									<div class="vdo">
								    	<iframe width="100%" height="100%" src="{{ $video->url }}?autoplay=0" frameborder="0"></iframe>
								    </div>
									<figcaption><h3>{{ $video->nombre }}</h3></figcaption>
								</figure>
							</li>
							@endforeach 
						</ul>
					</section><!-- // grid-wrap -->
					<section class="slideshow">
						<ul>
						 @foreach ($todo[1]as $video)
							<li>
								<figure>
									<figcaption>
										<h3>{{ $video->nombre }}</h3>
										<p>{{ $video->descripcion }}</p>
									</figcaption>
									<div class="vdo">
								    	<iframe width="100%" src="{{ $video->url }}" frameborder="0" style="height:400px"></iframe>
								    </div>
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
			</div>
		</div>
		
		
	</div>


	<script src="assets/GridGallery/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/GridGallery/js/masonry.pkgd.min.js"></script>
	<script src="assets/GridGallery/js/classie.js"></script>
	<script src="assets/GridGallery/js/cbpGridGallery.js"></script>
	<script>

		for (var i = 1; i < 100; i++) {
			new CBPGridGallery( document.getElementById( 'grid-gallery'+i ) );
		}
		
	</script>
	<script>
		new CBPGridGallery( document.getElementById( 'grid-video') );
	</script>
@endsection