@extends('templates.main')

@section('title', 'Visualizando')

@section('content')
	<div>
		@if ($archivo->archivotipo_id == 3)
		    <iframe width="100%" src="{{ $archivo->archivo }}" frameborder="0" style="height:400px"></iframe>
		@else
			<div class="cinta">	
			</div>
			<iframe id="frame" src="https://drive.google.com/viewerng/viewer?url=http://robert.runait.com/archivos/{{ $archivo->archivo }}?pid=explorer&efh=false&a=v&chrome=false&embedded=true" width="90%" style="height: 600px"></iframe>
		@endif
	</div>
@endsection