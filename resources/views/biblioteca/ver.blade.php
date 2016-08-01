@extends('templates.main')

@section('title', 'Biblioteca')

@section('content')
    <div ng-controller="archivoController">
        <div class="contenidosa">
            @if ( Auth::user()->usuariotipo_id == 1 || Auth::user()->usuariotipo_id == 6)
                <div class="">
                    <h1 class="titulo text-center">Biblioteca Virtual</h1>
                    @foreach ($archivos as $archivo)
                        <div class="cartA">
                            <div class="ta">{{ $archivo->titulo }}</div>
                           <blockquote class="bro">
                                
                                <div> <b>Autor :</b>  {{ $archivo->autor }}</div>
                                <div> <b>Publicacion :</b>  {{ $archivo->created_at }}</div>
                                <div> <b>Tipo :</b>  {{ $archivo->archivotipo->tipo }}</div>
                           </blockquote>
                           <div> <b>Descripción :</b></div>
                            <div> {{ $archivo->decripcion }}</div>
                            <button class="btn-colegio2" ng-click="plus({{ $archivo }});" data-toggle="modal" data-target="#mas"><i class="glyphicon glyphicon-plus"></i> Información</button>
                        </div>
                    @endforeach 
                    {!! $archivos->render() !!} 
                </div>  
            @endif
            @if ( Auth::user()->usuariotipo_id == 2 || Auth::user()->usuariotipo_id == 3 || Auth::user()->usuariotipo_id == 4)
            <div class="col-md-8">
                <div class="cart">
                    <h1 class="titulo">Biblioteca</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Autor</th>
                                <th>Publicación</th>      
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($archivos as $x)
                            <tr>
                                <td>{{ $x->titulo }}</td>
                                <td>{{ $x->autor }}</td>
                                <td>{{ $x->pub_lugar . ", " . $x->pub_editorial + ", " . $x->pub_year}}</td>
                                <td>
                                    <a ng-click="plus(x);" data-toggle="modal" data-target="#mas"><i class="glyphicon glyphicon-plus" style="color:black"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="cart">
                    <h2 class="titulo">Mis Archivos</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Autor</th>       
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach ($archivos as $y)
                            @if ($y->posteador == Auth::user()->dni)
                            <tr>

                                <td>{{ $y->titulo }}</td>
                                <td>{{ $y->autor }}</td>
                                <td>
                                    <a ng-click="plus({{$y}});" data-toggle="modal" data-target="#editar"><i class="glyphicon glyphicon-pencil" style="color:black"></i></a>
                                    <a ng-click="eliminar(y.id);"> <i class="glyphicon glyphicon-trash" style="color:black;margin-left: 10px"></i></a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        
                        </tbody>
                    </table>
                    <a href="{{ url('app/archivos/create') }}" class="btn btn-colegio">Añadir Archivo</a>
                </div>
            </div>
            @endif
        </div>
        <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Editar Archivo</h4>
                        </div>
                        <div class="modal-body">
                            <div class="formulariok">
                                <form role="form" action="@{{formUrl}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" id="formEdit">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="titulo">Título</label>
                                        <input type="text" class="form-control" id="titulo" name="titulo" required ng-model="titulom">
                                    </div>
                                    <div class="form-group">
                                        <label for="autor">Autor</label>
                                        <input type="text" class="form-control" id="autor" name="autor" placeholder="" name="autor" required ng-model="autorm">
                                    </div>
                                    <div class="form-group">
                                        <label for="pub_lugar">Lugar de Publicación</label>
                                        <input type="text" class="form-control" id="pub_lugar"  name="pub_lugar" required ng-model="pub_lugar">
                                    </div>
                                    <div class="form-group">
                                        <label for="pub_editorial">Editorial</label>
                                        <input type="text" class="form-control" id="pub_editorial"  name="pub_editorial" required ng-model="pub_editorial">
                                    </div>
                                    <div class="form-group">
                                        <label for="pub_year">Año de Publicación</label>
                                        <input type="text" class="form-control" id="pub_year"  name="pub_year" required ng-model="pub_year">
                                    </div>
                                    <div class="form-group">
                                        <label for="edicion">Edición</label>
                                        <input type="text" class="form-control" id="edicion"  name="edicion" required ng-model="edicion">
                                    </div>
                                    <div class="form-group">
                                        <b for="archivo">Archivo</b>
                                        <input type="file" name="archivo">
                                    </div>
                                    <div class="form-group">
                                        <label for="edicion">Tipo de archivo</label>
                                        <select class="form-control" name="archivotipo_id" required ng-model="archivotipo_id" ng-options="at.tipo for at in ats track by at.id">
                                            <option value="">Seleccione...</option>
                                        </select>
                                    </div>

                                    <input type="hidden" name="posteador" value="{{Auth::user()->dni}}">
                                    <a ng-click='editarArchivo()' class="btn btn-colegio">Guardar</a>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="modal fade" id="mas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body" style="padding: 20px">
                            <span ng-bind="epigrafem"></span>
                            <h2 class="modal-title" id="myModalLabel" ng-bind="titulom"></h2>
                            <br>
                            <blockquote class="bro">
                                <div><b>Autor : </b><span ng-bind="autorm"></span></div>
                                <div><b>Fecha : </b><span ng-bind="fecham"></span></div>
                                   
                            </blockquote>
                            
                            <div ng-bind="cuerpom"></div>
                            <figure class="imgnot">
                                <a href="../archivos/@{{archivo}}" alt="archivo" class="imgn" />Descargar</a> 
                            </figure>
                            
                        </div>
                    </div>
            </div>
        </div>
   </div>
     <!-- Modal de Edición -->
    <script src="{{ asset('assets/js/ng-scripts/controllers/archivoController.js') }}"></script>
@endsection