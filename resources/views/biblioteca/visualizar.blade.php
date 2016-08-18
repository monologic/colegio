@extends('templates.main')

@section('title', 'Visualizando')

@section('content')
	<div>
		@if ($archivo->archivotipo_id == 3)
		    <iframe width="100%" src="{{ $archivo->archivo }}" frameborder="0" style="height:400px" allowfullscreen></iframe>
		@endif
		@if ($archivo->archivotipo_id == 1)
			<div class="cont-archivo">
				<div class="cinta"> 
					<div class="cont-btns">
						<button  class="btn btn-full" id="btn-n" onclick="normal()" disabled="true"><i class="glyphicon glyphicon-resize-small"></i></button>
					<button  class="btn btn-full" id="btn-f" onclick="full()"><i class="glyphicon glyphicon-fullscreen"></i></button>
					</div>
						
				</div>
				<iframe id="frame" src="https://drive.google.com/viewerng/viewer?url=http://robert.runait.com/archivos/{{ $archivo->archivo }}?pid=explorer&efh=false&a=v&chrome=false&embedded=true"  width="100%"></iframe>
			</div>
		@endif
		@if ($archivo->archivotipo_id == 2)
		    <iframe width="100%" src="http://robert.runait.com/archivos/{{ $archivo->archivo }}" frameborder="0" style="height:400px"></iframe>
		@endif
	</div>
	 <script>
        function full()
        {
    		$('.cont-archivo').addClass('fullScream');
    		$('#frame').css('height','100%');
    		$( "#btn-f" ).css( 'display', 'none' );
    		$( "#btn-f" ).prop( "disabled", true );
    		$( "#btn-n" ).css( 'display', 'block' );
    		$( "#btn-n" ).prop( "disabled", false );

        }
        function normal(){
        	$('.cont-archivo').removeClass('fullScream');
    		$('#frame').css('height','500px');
    		$( "#btn-f" ).css( 'display', 'block' );
    		$( "#btn-n" ).css( 'display', 'none' );
    		$( "#btn-f" ).prop( "disabled", false );
    		$( "#btn-n" ).prop( "disabled", true );
        }
    </script>
@endsection