app.controller('estadisticaController', function($scope,$http) {
    
    $scope.get = function () {
        $http.get('getUsuarios').then(function successCallback(response) {
                data = response.data;
                
                $scope.users = data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
});