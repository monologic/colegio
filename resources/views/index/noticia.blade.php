@extends('welcome')

@section('title', 'Noticias')

@section('content')
    <div style="width: 100%;margin: 10px auto 10px auto">
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
                        <span href="#" class="author"><span class="name">{{ $noticia->autor }}</span></span>
                    </div>
                </header>
                <a href="#" class="image featured"><img src="../imagen/noticia/{{ $noticia->foto }}" alt="" /></a>
                <p class="text-center" style="margin-top: -45px">{{ $noticia->epigrafe }}</p>
                <p>{!! $noticia->cuerpo !!}</p>
            </article>
        </div>
        @endforeach
    </div>
    
@endsection