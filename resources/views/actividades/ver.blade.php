@extends('templates.main')

@section('title', 'Actividades')

@section('content')
    <div ng-controller="actividadController" ng-init="get();getmes()" onload="getdata()">
        <div class="contenidos">
            <div class="col-md-6">
                <div class="monthly" id="mycalendar" style="width: 98%;margin:20px auto 20px auto;box-shadow: 5px 5px 5px #888888;"></div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipo">Tipo de Actividad</label>
                    <select class="form-control" id="tipoActi" onchange="tablaBusqueda()">
                        <option value="">Todas</option>
                        <option value="Curricular">Curricular</option>
                        <option value="Extracurricular">Extracurricular</option>
                        <option value="Cocurricular">Co-curricular</option>
                    </select>
                </div>
                <div class="actividades">
                    <div class="hed">
                        <span id="fec">Lista de actividades</span>
                    </div>
                    <section style="padding: 15px">
                        <div id="results"></div>
                    </section>
                </div>
            </div>
         @if ( Auth::user()->usuariotipo_id == 2 || Auth::user()->usuariotipo_id == 3 || Auth::user()->usuariotipo_id == 4)
            <div class="col-md-12">
                <div class="cart">
                    <h2 class="titulo">Mis Actividades</h2>
                    <table class="myTable table-hover">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Titulo</th>
                                <th>Acción</th>       
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="y in actividades | filter : tipoAc " ng-if="{{Auth::user()->id}} ==  y.usuario_id ">

                                <td>@{{ y.fecha_inicio }}</td>
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
                                        <label for="responsable">Responsable, Nro contacto</label>
                                        <input type="text" class="form-control" id="responsable" ng-model="responsable" placeholder="Escriba su nombre, y su número" name="responsable" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="titulo">Título</label>
                                        <input type="text" class="form-control" id="titulo" ng-model="titulo" placeholder="" name="titulo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha_inicio">Fecha y hora (Inicio)</label>
                                        <input type="datetime-local" class="form-control" id="fecha_inicio" ng-model="fecha_inicio" placeholder="2016-01-01 12:00" name="fecha_inicio" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha_fin">Fecha y hora (Fin)</label>
                                        <input type="datetime-local" class="form-control" id="fecha_fin" ng-model="fecha_fin" placeholder="2016-01-01 12:00" name="fecha_fin" required>
                                    </div>
                                    <div class="form-group">
                                            <b for="descripcion">Descripción</b>
                                            <textarea  cols="50" id="act-des" rows="10" class="edit"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tipo">Tipo</label>
                                        <select class="form-control" name="tipo" id="tipo" ng-model="tipo" required>
                                            <option value="Curricular">Curricular</option>
                                            <option value="Extracurricular">Extracurricular</option>
                                            <option value="Cocurricular">Co-curricular</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="lugar">Lugar</label>
                                        <input type="text" class="form-control" id="lugar" ng-model="lugar" placeholder="" name="lugar" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="participantes">Participantes</label>
                                        <input type="text" class="form-control" id="participantes" ng-model="participantes" placeholder="" name="participantes" required>
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
    var f = new Date();
        fe = f.getFullYear() + "-" + (f.getMonth() +1) + "-" + f.getDate();
    $(window).load( function() {
            $('#mycalendar').monthly({
                
            });
            switch(window.location.protocol) {
            case 'http:':
            case 'https:':
            // running on a server, should be good.
            break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
            }
            ds();
    });
            function ds(){
                setTimeout('traerD()',500);
            }
            function traerD(){
                $.ajax({
                    type:'get',
                    url:'../app/ac/'+fe,
                    dataType:'json',
                    success:function(ht)
                    {   
                        impr2(ht);
                    }
                });
            }
            function impr2(data){
                for (var i = 0; i < data.length; i++) {
                    rd = data[i].fecha.split(' ');
                    a = rd[0].split('-');
                    dia = parseInt(a[2])+'-'+ parseInt(a[1]) + '-' + a[0];
                    $("#"+dia).append( "<p><div class='alert-num'>"+ data[i].cantidad +"</div class='alert-num'></p>" );
                }
                    
            }
        nx = 1;
        function antes() {
            setTimeout('cambiarm()',500);
            nx = 1;
        }
        function despues() {
            setTimeout('cambiarm()',500);
            nx = 0;
        }
        function cambiarm(){
            nf = fe.split('-');
            if (nx == 1) {
                fe = f.getFullYear() + "-" + (parseInt(nf[1]) + 1) + "-01" ;
            }
            else{
                fe = f.getFullYear() + "-" + (parseInt(nf[1]) - 1) + "-01" ;
            }
            $.ajax({
                type:'get',
                url:'../app/ac/'+fe,
                dataType:'json',
                success:function(ht)
                {   
                    impr2(ht);
                    console.log(ht);
                }
            });

        }
        var m = new Array();
        var dt = new Array();
        function buscar(dia,mes,año)
        {
            $('.monthly-day-pick').removeClass("activs");
            var fecha2 = año +'-' + (mes) +'-'+dia;
            var fecha = dia +'-' + (mes) +'-'+año;
            var titulo = "Actividades del día: "+ fecha;
            $('#fec').html(titulo);
            $('#'+fecha).addClass("activs");
            $.ajax({
                type:'get',
                url:'../app/acti/'+fecha2,
                dataType:'json',
                success:function(ht)
                {   
                    dt = ht;
                    tablaBusqueda();
                }
            });
            
        }
        function tablaBusqueda()
        {   
            m = [];
            $('#results').html('');
            nm = dt.length;
            c=1;
            if (nm == 0) {
                html="<h2 class='text-center nc'>No se encontraron actividades</h2>"
            }
            else
            {
                inp = $('#tipoActi').val();
                if(inp == ''){
                    //alert('con todo');
                    m = dt;
                    imprimir(nm,m); 
                }
                else
                {

                    for (var i = 0; i < nm; i++) {
                        if(dt[i]['tipo'] == inp){
                            m.push(dt[i]);
                        }
                    }
                    console.log(m);
                    imprimir(m.length,m); 
                }   
            }
           
            $('#results').html(html);
        }
        function imprimir(nm,m){
            c=m.length;
            html="<div class='ac'>";
                if(c == 0){
                    t =$('#tipoActi').val();
                    if(t == 'Cocurricular'){
                        e = t.split('o');
                        t = "Co-"+e[1];
                    }
                    html="<h2 class='text-center nc'>No se encontraron actividades "+t+"es </h2>"
                }
                else{
                    for(i=0;i<nm;i++)
                    {   
                        var hora= m[i]['fecha_inicio'].split(" ");

                        html+="<button class='activity cla' type='button' data-toggle='collapse' data-target='#cont"+i+"' aria-expanded='false' aria-controls='collapseExample'><div class='col-md-4 col-xs-4'><i class='fa fa-share-alt' aria-hidden='true'></i> "+m[i]['tipo']+"</div><div class='col-md-4 col-xs-4 mid'><i class='fa fa-clock-o'></i> "+hora[1]+"</div> <div class='col-md-4 col-xs-4'><i class='fa fa-flag' aria-hidden='true'></i> "+m[i]['titulo']+"</div>    </button><div class='collapse' id='cont"+i+"'><div class='well'><ul class='listas'><li><i class='fa fa-user' aria-hidden='true'></i> &nbsp <b>Responsable :</b> "+m[i]['responsable']+"</li><li><i class='fa fa-clock-o' aria-hidden='true'></i> &nbsp <b>Fecha inicio :</b> "+m[i]['fecha_inicio']+"</li><li><i class='fa fa-clock-o' aria-hidden='true'></i> &nbsp <b>Fecha término :</b> "+m[i]['fecha_fin']+"</li><li><i class='fa fa-map-marker' aria-hidden='true'></i> &nbsp <b>Lugar :</b> "+m[i]['lugar']+"</li><li><i class='fa fa-users' aria-hidden='true'></i> &nbsp <b>Participantes :</b> "+m[i]['participantes']+"</li></ul><p class='pes'>"+m[i]['descripcion']+"</p></div></div>";
                        c++;
                    }
                    html+="</div>" 
                }
                $('#results').html(html); 
        }
        $( ".monthly-event-list" ).change(function() {
          alert( "Handler for .change() called." );
        });
        
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