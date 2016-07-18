@extends('templates.main')

@section('title', 'Noticias')

@section('content')
    <div ng-controller="noticiaController" ng-init="get()">
        <div class="contenidos">
            <div class="col-md-8">
                <div class="cart">
                    <h1 class="titulo">Mis Noticias</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Titulo</th>
                                <th>Copete</th>       
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="x in noticias" ng-if="{{Auth::user()->dni}} ==  x.posteador ">
                                <td>@{{ x.solofe }}</td>
                                <td>@{{ x.titulo }}</td>
                                <td>@{{ x.copete }}</td>
                                <td>
                                    <a ng-click="dataEditar(x);" data-toggle="modal" data-target="#editar"><i class="glyphicon glyphicon-pencil" style="color:black"></i></a>

                                    <a ng-click="eliminar(x.id);"> <i class="glyphicon glyphicon-trash" style="color:black;margin-left: 10px"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ url('app/noticias/create') }}" class="btn btn-colegio">Crear Noticia</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cart">
                    <h2 class="titulo">Todos las noticias</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Autor</th>       
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="y in noticias">

                                <td>@{{ y.titulo }}</td>
                                <td>@{{ y.autor }}</td>
                                <td>
                                    <a ng-click="dataEditar(y);" data-toggle="modal" data-target="#editar"><i class="glyphicon glyphicon-plus" style="color:black"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Editar Noticia</h4>
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
     <!-- Modal de Edición -->
    <script src="{{ asset('assets/js/ng-scripts/controllers/noticiaController.js') }}"></script>
@endsection