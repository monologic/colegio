@extends('templates.main')

@section('title', 'Actividades')

@section('content')
    <div ng-controller="actividadController" ng-init="get();">
        <div class="contenidos">
        @if ( Auth::user()->usuariotipo_id == 1 || Auth::user()->usuariotipo_id == 6)
            <div class="col-md-6">
                <div class="monthly" id="mycalendar" style="width: 80%;margin:20px auto 20px auto;max-width: 400px;box-shadow: 5px 5px 5px #888888;"></div>
            </div>
            <div class="col-md-6">
                <div class="actividades">
                    <div class="hed">
                        Lista de actividades
                    </div>
                    <section style="padding: 15px">
                        <div id="results"></div>
                    </section>
                </div>
            </div>
        @endif


         @if ( Auth::user()->usuariotipo_id == 2 || Auth::user()->usuariotipo_id == 3 || Auth::user()->usuariotipo_id == 4)
            <div class="col-md-6">
                <div class="monthly" id="mycalendar" style="width: 80%;margin:20px auto 20px auto;max-width: 400px;box-shadow: 5px 5px 5px #888888;"></div>
            </div>
            <div class="col-md-6">
                <div class="actividades">
                    <div class="hed">
                        Lista de actividades
                    </div>
                    <section style="padding: 15px">
                        <div id="results"></div>
                    </section>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cart">
                    <h2 class="titulo">Mis Actividades</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Nivel, Grado y Sección</th>       
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="y in actividades" ng-if="{{Auth::user()->id}} ==  y.usuario_id ">

                                <td>@{{ y.fecha }}</td>
                                <td>@{{ y.titulo }}</td>
                                <td>
                                    <a ng-click="plus(y);" data-toggle="modal" data-target="#editar"><i class="glyphicon glyphicon-pencil" style="color:black"></i></a>
                                    <a ng-click="eliminar(y.id);"> <i class="glyphicon glyphicon-trash" style="color:black;margin-left: 10px"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ url('app/actividades/create') }}" class="btn btn-colegio">Añadir Actividad</a>
                </div>
            </div>
         @endif
            
        </div>
        <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Editar Actividad</h4>
                        </div>
                        <div class="modal-body">
                            <div class="formulariok">
                                <form role="form" ng-submit='editar()'>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="titulo">Título</label>
                                        <input type="text" class="form-control" id="titulo" ng-model="titulo" placeholder="" name="titulo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha_inicio">Fecha y hora (Inicio)</label>
                                        <input type="datetime-local" class="form-control" id="fecha_inicio" ng-model="fecha_inicio" placeholder="" name="fecha_inicio" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha_fin">Fecha y hora (Fin)</label>
                                        <input type="datetime-local" class="form-control" id="fecha_fin" ng-model="fecha_fin" placeholder="" name="fecha_fin" required>
                                    </div>
                                    <div class="form-group">
                                            <b for="descripcion">Descripción</b>
                                            <textarea  id="" cols="50" rows="10" name="descripcion" ng-model="descripcion" class="edit"></textarea>
                                        </div>
                                    <div class="form-group">
                                        <label for="lugar">Lugar</label>
                                        <input type="text" class="form-control" id="lugar" ng-model="lugar" placeholder="" name="lugar" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombres">NIvel</label>
                                        <select class="form-control" ng-model="nivel" name="nivel" required>
                                            <option>Inicial</option>
                                            <option>Primaria</option>
                                            <option>Secundaria</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombres">Grado</label>
                                        <select class="form-control" ng-model="grado" name="grado" required>
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
                                        <select class="form-control" ng-model="seccion" name="seccion" required>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="usuario_id" value="{{Auth::user()->id}}">
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
                            <span ng-bind="epigrafem"></span>
                            <h2 class="modal-title" id="myModalLabel" ng-bind="titulo"></h2>
                            <br>
                            <blockquote class="bro">
                                <div><b>Fecha y hora de inicio: </b><span ng-bind="fecha_inicio"></span></div>
                                <div><b>Fecha y hora de fin: </b><span ng-bind="fecha_fin"></span></div>
                                <div><b>Lugar: </b><span ng-bind="lugar"></span></div>
                                <div><b>Nivel, Grado y Seción: </b><span>@{{ nivel + ", " + grado + " " + seccion }}</span></div>
                                <div><b>Responsable: </b><span ng-bind="responsable"></span></div>
                            </blockquote>
                        
                            <div><p ng-bind="descripcion" style="display:block;position:relative;padding:20px"></p></div>
                            
                        </div>
                    </div>
            </div>
        </div>
   </div>
     <!-- Modal de Edición -->
    <script src="{{ asset('assets/js/ng-scripts/controllers/actividadController.js') }}"></script>
    <script src="{{ asset('assets/calendar/js/monthly.js') }}"></script>
    <script type="text/javascript">
    $(window).load( function() {
            $('#mycalendar').monthly({
                
            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

        switch(window.location.protocol) {
        case 'http:':
        case 'https:':
        // running on a server, should be good.
        break;
        case 'file:':
        alert('Just a heads-up, events will not work when run locally.');
        }

        });
    </script>
    <script>
        var m=new Array();
        function buscar(dia,mes,año)
        {
            $('.monthly-day-pick').removeClass("activs");
            var fecha2 = año +'-' + (mes) +'-'+dia;
            var fecha = dia +'-' + (mes) +'-'+año;
            $('#'+fecha).addClass("activs");
            $.ajax({
                type:'get',
                url:'../app/acti/'+fecha2,
                dataType:'json',
                success:function(ht)
                {   
                    m=ht;
                    tablaBusqueda();
                }
            });
            
        }
        function tablaBusqueda()
        {   nm=m.length;
            c=1;
            html="<div class='ac'>"
            for(i=0;i<nm;i++)
            {   
                var hora= m[i]['fecha_inicio'].split(" ");

                html+="<button class='activity cla' type='button' data-toggle='collapse' data-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'><div class='col-md-6'><i class='fa fa-clock-o'></i> "+hora[1]+"</div> <div class='col-md-6'><i class='fa fa-flag' aria-hidden='true'></i> "+m[i]['titulo']+"</div>    </button><div class='collapse' id='collapseExample'><div class='well'><ul class='listas'><li><i class='fa fa-clock-o' aria-hidden='true'></i> &nbsp <b>Responsable :</b> "+m[i]['usuario']['nombres']+" "+m[i]['usuario']['apellidos']+"</li><li><i class='fa fa-clock-o' aria-hidden='true'></i> &nbsp <b>Fecha inicio :</b> "+m[i]['fecha_inicio']+"</li><li><i class='fa fa-clock-o' aria-hidden='true'></i> &nbsp <b>Fecha término :</b> "+m[i]['fecha_fin']+"</li><li><i class='fa fa-map-marker' aria-hidden='true'></i> &nbsp <b>Lugar :</b> "+m[i]['lugar']+"</li><li><i class='fa fa-bars' aria-hidden='true'></i> &nbsp <b>Nivel :</b> "+m[i]['nivel']+"</li><li><i class='fa fa-tachometer' aria-hidden='true'></i> &nbsp <b>Grado :</b> "+m[i]['grado']+"</li><li><i class='fa fa-leaf' aria-hidden='true'></i> &nbsp <b>Sección :</b> "+m[i]['seccion']+"</li></ul><p class='pes'>"+m[i]['descripcion']+"</p></div></div>";
                c++;
            }
            html+="</div>"
            $('#results').html(html);
        }
    </script>

    <script type="text/javascript" src="{{ asset('assets/froala/js/froala_editor.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/align.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/code_beautifier.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/code_view.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/draggable.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/image.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/image_manager.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/link.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/lists.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/paragraph_format.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/paragraph_style.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/table.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/url.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/froala/js/plugins/entities.min.js') }}"></script>
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