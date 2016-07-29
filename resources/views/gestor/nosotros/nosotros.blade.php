@extends('templates.main')

@section('title', 'Editar nosotros')

@section('content')
	<div class="" style="width: 80%;margin: 30px auto 50px auto">	
	<form  action="{{ url('app/nosotros/1') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
	{{ csrf_field() }}
		<ul class="nav nav-tabs">
			<button type="submit" class="gr">Guardar</button>
			<li class="active"><a  href="#1" data-toggle="tab">Bienvenida</a></li>
			<li><a href="#2" data-toggle="tab">Visión</a></li>
			<li><a href="#3" data-toggle="tab">Misión</a></li>
			<li><a href="#4" data-toggle="tab">Historia</a></li>
		</ul>
		@foreach ($nosotros as $nosotro)
		<div class="tab-content ">
			<div class="tab-pane active" id="1">
			        <div id="editor">
					      <textarea class='edit'  name="bienvenida" style="margin-top: 30px;width: 80%">
					      {{$nosotro->bienvenida}}
					      </textarea>
					</div>
			</div>
			<div class="tab-pane" id="2">
			    <div id="editor">
					<textarea class='edit' name="vision"  style="margin-top: 30px;width: 80%">
					{{$nosotro->vision}}
					</textarea>
				</div>
			</div>
			<div class="tab-pane" id="3">
			    <div class="editor">
					<textarea class='edit' name="mision" style="margin-top: 30px;width: 80%"> 
					{{$nosotro->mision}}   
					</textarea>
				</div>
			</div>
			<div class="tab-pane" id="4">
			    <div id="editor">
					<textarea class='edit' name="historia"  style="margin-top: 30px;width: 80%"> 
					{{$nosotro->historia}}
					</textarea>
				</div>
			</div>
		</div>
		@endforeach 
	</form>
	</div>
	<script type="text/javascript" src="../assets/froala/js/froala_editor.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/align.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/code_beautifier.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/code_view.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/draggable.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/image.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/image_manager.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/link.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/lists.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/paragraph_format.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/paragraph_style.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/table.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/video.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/url.min.js"></script>
  	<script type="text/javascript" src="../assets/froala/js/plugins/entities.min.js"></script>
  	<script>
	      $(function(){
	        $('.edit')
	          .on('froalaEditor.initialized', function (e, editor) {
	            $('#edit').parents('form').on('submit', function () {
	              console.log($('#edit').val());
	              return false;
	            })
	          })
	          .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
	      });
	</script>
@endsection