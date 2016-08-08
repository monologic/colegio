app.controller('usuarioController', function($scope,$http) {
    
    $scope.editar = function () {
        if ($scope.pass1 != $scope.pass2) {
            swal("", "No coinciden las contraseñas", "warning");
        }
        else{
            $http.post('perfil',
            {   'usuario':$("#usuario").val(),
                'password':$scope.pass1,
                
            }).then(function successCallback(response) {
                if (response.data.error == 0) {
                    swal("", "Se ha modificado la información de Usuario", "success");
                }
                else{
                    swal("", "Este nombre de Usuario no está disponible", "warning");
                }
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
        }

    }

});