@extends('templates.main')

@section('title', 'Agenda')

@section('content')
    
    <div class="contenidos" ng-controller="agendaController" ng-init="get()">

        <div class="cart">
            <h1 class="titulo">Entradas de Agenda</h1>
            @if (Auth::user()->usuariotipo_id == 2)
                <a href="{{ url('app/agenda/create') }}" class="btn btn-colegio">Crear Entrada</a>
            @endif
            <div style="margin-top: 20px"1`>
                <div style="width: 310px;float: right" id="bsq">
                    <input type="text" class="form-control" ng-model="buscar" style="width: 320px"><i class="glyphicon glyphicon-search" style="top:-25px;float: right;color: black"></i>
                </div>
                @if (Auth::user()->usuariotipo_id == 5)
                    <div ng-repeat="y in hijos">
                        <h3>Agenda de @{{ y.nombres + " " + y.apellidos }}</h3>
                        <table class="myTable table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha publicación</th>
                                    <th>Asunto</th>
                                    <th>Docente</th>
                                    <th>Asignatura</th>
                                    <th>Acción</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="x in y.agenda | filter:buscar ">
                                    <td>@{{ $index+1 }}</td>
                                    <td>@{{ x.fecha_pub }}</td>
                                    <td>@{{ x.asunto }}</td>
                                    <td>@{{ x.nombres  }} @{{ x.apellidos  }}</td>
                                    <td>@{{ x.asignatura  }}</td>
                                    <td>
                                        <a href="" ng-click="dataEditar(x);" data-toggle="modal" data-target="#editar" class="btn"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ver</a>
                                        @if (Auth::user()->usuariotipo_id == 2)
                                            <a href="" ng-click="dataEditar(x);" data-toggle="modal" data-target="#editar" class="btn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                            <button ng-click="eliminar(x.id);" class="btn"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                        @endif
                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @else
                    <table class="myTable table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Fecha publicación</th>
                                <th>Asunto</th>
                                <th>Docente</th>
                                <th>Asignatura</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="x in entradas | filter:buscar ">
                                <td>@{{ $index+1 }}</td>
                                <td>@{{ x.fecha_pub }}</td>
                                <td>@{{ x.asunto }}</td>
                                <td>@{{ x.nombres  }} @{{ x.apellidos  }}</td>
                                <td>@{{ x.asignatura }}</td>
                                <td>
                                    <a href="" ng-click="dataEditar(x);" data-toggle="modal" data-target="#editar" class="btn"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ver</a>
                                    @if (Auth::user()->usuariotipo_id == 2)
                                        <a href="" ng-click="dataEditar(x);" data-toggle="modal" data-target="#editar" class="btn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <button ng-click="eliminar(x.id);" class="btn"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @endif
                
            </div>
        	
        </div>
    	
        <!-- Modal de Edición -->
        <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Editar Administrativo</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="POST" action="{{ url('app/agenda') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="asunto">Asunto</label>
                                <input type="text" class="form-control" id="asunto" ng-model="asunto" placeholder="" name="asunto" required>
                            </div>
                            <div class="form-group">
                                <b><p for="cuerpo">Cuerpo</p></b>
                                <textarea name="cuerpo" id="cuerpo" ng-model="cuerpo" class="form-control" cols="70" rows="10" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="fecha_pub">Fecha de publicación</label>
                                <input type="datetime-local" class="form-control" id="fecha_pub" ng-model="fecha_pub" placeholder="" name="fecha_pub" required>
                            </div>
                            <div class="form-group">
                                <label for="nombres">Nivel</label>
                                <select class="form-control" id="nivel" ng-model="grados" name="nivel" ng-options="nivel for (nivel, grados) in data" required>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nombres">Grado</label>
                                <select class="form-control" id="grado" ng-disabled="!grados" ng-model="secciones" name="grado" ng-options="grado for (grado, secciones) in grados">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nombres">Sección</label>
                                <select class="form-control" id="seccion" ng-disabled="!secciones" ng-model="seccion" name="seccion" ng-options="seccion for seccion in secciones track by seccion">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nombres">Asignatura</label>
                                <select class="form-control" ng-model="asignatura" name="asignatura" required>
                                    <option>Comunicación</option>
                                    <option>Matemática</option>
                                    <option>Ciencia Tecnología y Ambiente</option>
                                    <option>Ciencias Sociales</option>
                                </select>
                            </div>
                            
                            <input type="hidden" name="posteador" value="{{Auth::user()->dni}}">
                            
                            
                            <button type="submit" class="btn btn-colegio">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/ng-scripts/controllers/agendaController.js') }}"></script>
@endsection
