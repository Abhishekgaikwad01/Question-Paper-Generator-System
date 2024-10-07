angular.module('numberValidationApp', [])
    .controller('NumberValidationController', ['$scope', function($scope) {
        $scope.numbers = [null, null, null, null, null, null];
        $scope.showError = [false, false, false, false, false, false];

        $scope.validateNumber = function(index) {
            if ($scope.numbers[index] < 1 || $scope.numbers[index] > 3) {
                $scope.showError[index] = true;
            } else {
                $scope.showError[index] = false;
            }
        };
    }]);
