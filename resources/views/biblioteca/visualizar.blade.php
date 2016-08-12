@extends('templates.main')

@section('title', 'Visualizando')

@section('content')
	<div>
			<div class="cinta">
				
			</div>
		<iframe id="frame" src="https://drive.google.com/viewerng/viewer?url=http://robert.runait.com/archivos/{{ $archivo->archivo }}?pid=explorer&efh=false&a=v&chrome=false&embedded=true" width="90%" height="700px"></iframe>
			
		</iframe>
	</div>
@endsection