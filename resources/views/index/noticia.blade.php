@extends('welcome')

@section('title', 'Noticias')

@section('content')
    <div class="row">
    @foreach ($noticias as $noticia)
        <div class="col-md-12">
             <article class="noticia ve" >
                <header>
                    <div class="title">
                        <h2><a>{{ $noticia->titulo }}</a></h2>
                        <blockquote>{{ $noticia->copete }}</blockquote>                      
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-11-01">{{ $noticia->fecha }}</time>
                        <a href="#" class="author"><span class="name">{{ $noticia->autor }}</span><img src="../images/avatar.jpg" alt="" /></a>
                    </div>
                </header>
                <a href="#" class="image featured"><img src="../imagen/noticia/{{ $noticia->foto }}" alt="" /></a>
                <p class="text-center">{{ $noticia->epigrafe }}</p>
                <p>{{ $noticia->cuerpo }}</p>
            </article>
        </div>
        @endforeach
    </div>
    
@endsection