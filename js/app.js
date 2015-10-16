var app = angular.module('app', ["ngTouch", "angucomplete-alt"]);

app.controller('MainController', ['$scope', '$http',
    function MainController($scope, $http) {

        $scope.remoteUrlRequestFn = function (str) {
            return {q: str};
        };

        $http.get("json.php").success(function(data) {

                $scope.locations = data;
            }).error(function() {alert('no Data uploaded.')
    });
    }
]);
