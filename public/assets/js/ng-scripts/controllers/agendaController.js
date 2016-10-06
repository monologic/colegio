app.controller('agendaController', function($scope,$http) {

    $scope.get = function () {
        $http.get('getEntradas').then(function successCallback(response) {
                if (!response.data[0].hasOwnProperty('agenda'))
                    $scope.entradas = response.data;
                else
                    $scope.hijos = response.data;
                
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    $scope.dataEditar = function (data) {
        $scope.id = data.id;
        $scope.formUrl = 'agenda/' + data.id;
        $scope.fecha_pub = data.fecha_pub.replace(" ","T");
        $scope.fecha = data.fecha_pub;
        $scope.nombres = data.nombres;
        $scope.apellidos = data.apellidos;
        $scope.nombre = data.nombre;
        $scope.puesto_cargo = data.puesto_cargo;
        $scope.asunto = data.asunto;
        $scope.cuerpo = data.cuerpo;
        $scope.nivel = data.nivel;
        $scope.grado = data.grado;
        $scope.seccion = data.seccion;
        $scope.imagen = data.imagen;
        $scope.asignatura = data.asignatura;
    }

    $scope.editarNoticia = function () {
        $( "#formEdit" ).submit();
    }

    $scope.eliminar = function (id) {
        swal({   title: "",
            text: "Está seguro que desea eliminar este registro?",
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Sí, estoy seguro!",
            closeOnConfirm: false,
            cancelButtonText:"Cancelar", }, 
            function(){
                $http.delete( 'agenda/'+id ).then(function successCallback(response) {
                    swal("Eliminado!", 
                        "La entrada se ha eliminado.", 
                        "success"); 

                    if (!response.data[0].hasOwnProperty('agenda'))
                        $scope.entradas = response.data;
                    else
                        $scope.hijos = response.data;
                }, function errorCallback(response) {
                    swal({   
                        title: "Ha ocurrido un error!",   
                        text: "No se puede borrar datos utilizados para otros registros.",   
                        timer: 3000,   
                        showConfirmButton: false 
                    });
                });
            }
        );
    }

    $scope.data = {
        'Inicial': {
            '4 años': ['Los Geniales'],
            '5 años': ['Los Exploradores']
        },
        'Primaria': {
            '1er': ['1', '2'],
            '2do': ['1', '2'],
            '3er': ['1', '2'],
            '4to': ['1', '2'],
            '5to': ['1', '2'],
            '6to': ['1', '2']
        },
        'Secundaria': {
            '1er': ['1', '2'],
            '2do': ['1', '2'],
            '3er': ['1', '2'],
            '4to': ['1', '2'],
            '5to': ['1', '2']
        }
    };
    
});