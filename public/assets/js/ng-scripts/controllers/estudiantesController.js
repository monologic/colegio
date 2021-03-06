app.controller('estudiantesController', function($scope,$http) {
    
    $scope.get = function () {
        $http.get('getEstudiantes').then(function successCallback(response) {
                $scope.estudiantes = response.data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.guardar = function () {

        $http.post('../estudiantes',
            {   'nombres':$scope.nombres,
                'apellidos':$scope.apellidos,
                'dni':$scope.dni,
                'nivel':$scope.nivel,
                'grado':$scope.grado,
                'seccion':$scope.seccion
            }).then(function successCallback(response) {
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
    }

    $scope.dataEditar = function (data) {

        $scope.id = data.id;
        $scope.nombres = data.nombres;
        $scope.apellidos = data.apellidos;
        $scope.dni = data.dni;
        $scope.nivel = data.nivel;
        $scope.grado = data.grado;
        $scope.seccion = data.seccion;

    }
    $scope.editar = function () {
        $http.put('estudiantes/' + $scope.id,
            {   'nombres':$scope.nombres,
                'apellidos':$scope.apellidos,
                'dni':$scope.dni,
                'nivel':$scope.nivel,
                'grado':$scope.grado,
                'seccion':$scope.seccion
            }).then(function successCallback(response) {
                $scope.estudiantes = response.data;
                $('#editar').modal('toggle');
                swal("Editado!", 
                    "El registro se ha editado.", 
                    "success"); 
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
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

                swal("Eliminado!", 
                    "El registro se ha eliminado.", 
                    "success"); 

                $http.delete( 'estudiantes/'+id ).then(function successCallback(response) {
                    $scope.estudiantes = response.data;
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
    $scope.cambiarEstado = function (id, estado) {
        swal({  title: "",
                text: "Deseas cambiar el estado del Usuario?",
                type: "warning",   
                showCancelButton: true,   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Sí",
                closeOnConfirm: false,
                cancelButtonText:"Cancelar", }, 
                function(){
                    if (estado == 'Activo')
                        estado = 'Inactivo';
                    else if (estado == 'Inactivo')
                        estado = 'Activo';

                    $http.get('cambiarEstado/' + id + '/' + estado).then(function successCallback(response) {
                            window.location.reload();
                        }, function errorCallback(response) {
                        // called asynchronously if an error occurs
                        // or server returns response with an error status.
                    });

                }
            );
    }

});