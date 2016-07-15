@extends('templates.main')

@section('title', 'Comunicado')

@section('content')
   
    <div ng-controller="comunicadoController" ng-init="get()" class="tb-colegio" style="height: 100%">

        <div class="contenido">
            <h1 class="titulo">Lista de Comunicados</h1>
            <a href="{{ url('app/comunicados/create') }}" class="btn btn-colegio">Crear comunicado</a>
        	<table class="table table-hover font">
        		<thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Asunto</th>
                        <th>Nombre</th>
                        <th>Destinatario</th> 
                        <th>Acciones</th>      
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="x in comunicados">
                        <td>@{{ x.fecha_pub }}</td>
                        <td>@{{ x.asunto }}</td>
                        <td>@{{ x.nombre }}</td>
                        <td>@{{ x.destinatario }}</td>
                        <td>
                            <a href="" ng-click="dataEditar(x);" data-toggle="modal" data-target="#editar" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                            <button ng-click="eliminar(x.id);" class="btn btn-danger"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                        </td>
                    </tr>
                </tbody>
        	</table>
        </div>
    	
        <!-- Modal de Edición -->
        <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Editar Estudiante</h4>
                    </div>
                    <div class="modal-body">
                        <form ng-submit="editar()">
                            <div class="form-group">
                                <label for="nombres">Nombres</label>
                                <input type="text" class="form-control" id="nombres" ng-model="nombres" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" ng-model="apellidos" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="dni">DNI</label>
                                <input type="text" class="form-control" id="dni" ng-model="dni" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="nombres">NIvel</label>
                                <select class="form-control" ng-model="nivel">
                                    <option>Inicial</option>
                                    <option>Primaria</option>
                                    <option>Secundaria</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nombres">Grado</label>
                                <select class="form-control" ng-model="grado">
                                    <option>1er</option>
                                    <option>2do</option>
                                    <option>3ro</option>
                                    <option>4to</option>
                                    <option>5to</option>
                                    <option>6to</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nombres">Seccion</label>
                                <select class="form-control" ng-model="seccion">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/ng-scripts/controllers/comunicadoController.js') }}"></script>
@endsection