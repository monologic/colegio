@extends('templates.main')

@section('title', 'Administrativos')

@section('content')
    <h1>Vista de Administrativos</h1>
    <div ng-controller="administrativosController" ng-init="get()">

        <div>
        	<table class="table table-hover">
        		<thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="x in administrativos">
                        <td>@{{ $index+1 }}</td>
                        <td>@{{ x.nombres }}</td>
                        <td>@{{ x.apellidos }}</td>
                        <td>@{{ x.dni }}</td>
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
                        <h4 class="modal-title" id="myModalLabel">Editar Docente</h4>
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
                            <button type="submit" class="btn btn-colegio">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/ng-scripts/controllers/administrativosController.js') }}"></script>
@endsection