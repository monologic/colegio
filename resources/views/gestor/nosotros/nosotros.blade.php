@extends('templates.main')

@section('title', 'Editar nosotros')

@section('content')
<div ng-controller="docentesController" ng-init="todos()">
	
	<div class="" style="width: 80%;margin: 30px auto 50px auto">	
	<form  action="{{ url('app/nosotros/1') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
	{{ csrf_field() }}
		<ul class="nav nav-tabs">
			<button type="submit" class="gr">Guardar</button>
			<li class="active"><a  href="#1" data-toggle="tab">Bienvenida</a></li>
			<li><a href="#2" data-toggle="tab">Visión</a></li>
			<li><a href="#3" data-toggle="tab">Misión</a></li>
			<li><a href="#4" data-toggle="tab">Historia</a></li>
			<li><a href="#5" data-toggle="tab">Directivos</a></li>
		</ul>
		@foreach ($nosotros[0] as $nosotro)
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
			@endforeach 
			<div class="tab-pane" id="5" >
				<div style=" width: 80%; margin:40px auto 20px auto; max-width: 600px">
					<table class="table">
						<a href="" class="btn btn-primary" style="margin-bottom: 30px"> + Agregar</a>
						<thead>
							<tr>
								<th>Título</th>
								<th>Nombre</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
						
							<tr ng-repeat="x in doc">
								<td>@{{x.titulo}} </td>
								<td>@{{x.nombre}}</td>
								<td><a ng-click="plus(x);" data-toggle="modal" data-target="#editar" class="btn"><i class="glyphicon glyphicon-pencil"></i></a></td>
							</tr>
						</tbody>
						
					</table>
				</div>
			    
			</div>
		</div>
	</form>
	</div>
	<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Editar Directorio</h4>
                        </div>
                        <div class="modal-body">
                            <div class="formulariok">
                                <form role="form" action="@{{formUrl}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" id="formEdit">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group">
                                        <label for="titulo">Título</label>
                                        <input type="text" class="form-control" id="titulo"  name="titulo" ng-model="titulo"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" ng-model="nombre"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cargo">Cargo</label>
                                        <input type="text" class="form-control" id="cargo"  name="cargo" ng-model="cargo"  required>
                                    </div>
                                    <div class="form-group">
                                        <b for="mas">Mas</b>
                                        <textarea  cols="50" rows="10" id="mas" name="mas" class="edit"></textarea>
                                    </div>
                                    
									

                                    <div class="form-group">
                                        <b for="archivo">Foto</b>
                                        <input type="file" name="imagen">
                                    </div>
                                    <a ng-click='editarNoticia()' class="btn btn-colegio">Guardar</a>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
     </div>
      <script src="{{ asset('assets/js/ng-scripts/controllers/docentesController.js') }}"></script>

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
</div>

@endsection