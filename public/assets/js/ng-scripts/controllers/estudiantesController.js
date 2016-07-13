app.controller('estudiantesController', function($scope,$http) {
    
    $scope.getEstudiantes = function () {
        $http.get('getEstudiantes').then(function successCallback(response) {
                $scope.estudiantes = response.data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
});