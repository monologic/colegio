@extends('templates.main')

@section('title', 'Galeria')

@section('content')
    <div ng-controller="galeriaController" ng-init="get()">
        <div class="contenidos">
            <div class="col-md-12">
                <div class="cart" style="max-width: 650px">
                    <h1 class="titulo">Galeria de fotos</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Imagen</th> 
                                <th>Acción</th>       
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galeria as $foto)
                            <tr>
                                <td>{{ $foto->nombre }}</td>
                                <td>{{ $foto->estado }}</td>
                                <td><img src="../../imagen/galeria/{{ $foto->imagen }}" width="80" height="50"></td>
                                <td>
                                    <a ng-click="dataEditar(x);" data-toggle="modal" data-target="#editar"><i class="glyphicon glyphicon-pencil" style="color:black"></i></a>

                                    <a ng-click="eliminar(x.id);"> <i class="glyphicon glyphicon-trash" style="color:black;margin-left: 10px"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="" data-toggle="modal" data-target="#mas" class="btn btn-colegio">Añadir fotos</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            <h3>Añadiendo foto</h3>
                        </div>
                        <div class="modal-body" style="padding: 20px">
                            <div class="formulariok">
                                <form  method="POST" action="{{ url('app/galeria') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nombre">Nombres</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="" name="nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="direccion">Descripción</label>
                                        <textarea class="form-control" id="direccion"  name="descripcion" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="estado">Estado</label>
                                        <select name="estado" class="form-control">
                                            <option value="Activo">Activo</option>
                                            <option value="Inactico">Inactico</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <b><p for="imagen">Imagen</p></b>
                                        <input type="file" name="imagen">
                                    </div>
                                    <input type="hidden" name="albun_id" value="{{$idalbum}}">
                                    
                                    <button type="submit" class="btn btn-colegio">Guardar</button>
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
    <script src="{{ asset('assets/js/ng-scripts/controllers/galeriaController.js') }}"></script>
@endsection