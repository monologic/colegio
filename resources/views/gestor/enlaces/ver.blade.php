@extends('templates.main')

@section('title', 'Comunicado')

@section('content')
    <div ng-controller="comunicadoController" ng-init="get()">
        <div class="contenidos">
            <div class="col-md-8">
                <div class="cart">
                    <h1 class="titulo">Mis Comunicados</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Asunto</th>
                                <th>Destinatario</th>       
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="x in comunicados">
                                <td>@{{ x.solofe }}</td>
                                <td>@{{ x.asunto }}</td>
                                <td>@{{ x.destinatario }}</td>
                                <td>
                                    <a ng-click="dataEditar(x);" data-toggle="modal" data-target="#editar"><i class="glyphicon glyphicon-pencil" style="color:black"></i></a>

                                    <a ng-click="eliminar(x.id);"> <i class="glyphicon glyphicon-trash" style="color:black;margin-left: 10px"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ url('app/comunicados/create') }}" class="btn btn-colegio">Crear comunicado</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cart">
                    <h2 class="titulo">Todos los Comunicados</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Asunto</th>
                                <th>Destinatario</th>       
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="y in comunicados">

                                <td>@{{ y.asunto }}</td>
                                <td>@{{ y.destinatario }}</td>
                                <td>
                                    <a ng-click="plus(y);" data-toggle="modal" data-target="#mas"><i class="glyphicon glyphicon-plus" style="color:black"></i></a>
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
                            <h4 class="modal-title" id="myModalLabel">Editar Comunicado</h4>
                        </div>
                        <div class="modal-body">
                            <form  action="@{{formUrl}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" id="formEdit">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nombres">Nombres</label>
                                    <input type="text" class="form-control" id="nombres" name="nombre" ng-model="nom">
                                </div>
                                <div class="form-group">
                                    <label for="cargo">Cargo</label>
                                    <input type="text" class="form-control" id="cargo" name="puesto_cargo" ng-model="car">
                                </div>
                                <div class="form-group">
                                    <label for="destinatario">Destinatario</label>
                                    <input type="text" class="form-control" id="destinatario" name="destinatario" ng-model="destinatario">
                                </div>
                                <div class="form-group">
                                    <label for="asunto">Asunto</label>
                                    <input type="text" class="form-control" id="asunto" name="asunto" ng-model="asunto">
                                </div>
                                <div class="form-group">
                                    <b><p for="cuerpo">Cuerpo</p></b>
                                    <textarea name="" id="" cols="30" rows="10" class="form-control" name="cuerpo" ng-model="cuerpo"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="archivo">Archivo</label>
                                    <input type="file" name="imagen">
                                </div>
                                <a ng-click='editarNoticia()' class="btn btn-colegio">Guardar Cambios</a>
                            </form>
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
                            
                            <h2 class="modal-title" id="myModalLabel" ng-bind="asuntom"></h2>
                            <br><p>Remitente : <span ng-bind="nombrem"></span></p>
                            <blockquote class="bro">
                                <div><b>Destinatario : </b><span ng-bind="destinatariom"></span></div>
                                <div><b>Fecha de publicacion: </b><span ng-bind="solofe"></span></div>     
                            </blockquote>
                            <figure class="imgnot">
                                <iframe src="http://docs.google.com/gview?url=http://localhost:8000/imagen/comunicados/as.pdf&embedded=true" style="width:500px; height:375px;" frameborder="0"></iframe>
                                <figcaption ng-bind="copetem"></figcaption> 
                            </figure>
                            <div ng-bind="cuerpom"></div>
                            
                            
                        </div>
                    </div>
            </div>
        </div>
   </div>
     <!-- Modal de Edición -->
    <script src="{{ asset('assets/js/ng-scripts/controllers/comunicadoController.js') }}"></script>
@endsection