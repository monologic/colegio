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
        $scope.fecha_pub = data.fecha_pub.replace(" ","T");;
        $scope.nombre = data.nombre;
        $scope.puesto_cargo = data.puesto_cargo;
        $scope.asunto = data.asunto;
        $scope.cuerpo = data.cuerpo;
        $scope.nivel = data.nivel;
        $scope.grado = data.grado;
        $scope.seccion = data.seccion;
        $scope.asignatura = data.asignatura;
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