var app = angular.module('appWorx', ['ui.bootstrap']);

var ModalCtrl = function ($scope, $modal, $log) {
    $scope.login = function() {
            var modalLogin = $modal.open({
            templateUrl: 'login.html',
            controller: modalLoginCtrl
        });
        modalLogin.result.then(function(){

        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    };
    $scope.register = function() {
        var modalRegister = $modal.open ({
            templateUrl: 'register.html',
            controller: modalRegisterCtrl
        });
        modalRegister.result.then(function(){

        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    }
};

var modalLoginCtrl = function($scope, $http, $modalInstance, $window) {
    $scope.credentials = {email: '',password: ''};
    $scope.login = function () {
        $http({
            method: 'POST',
            url: '/verify',
            data: $scope.credentials
        }).
            success(function(data){
                if(data === 'Ok') {
                    $modalInstance.close();
                    $window.location.href = '/';
                }
                if(data === 'Bad') {
                    $scope.error = 'Incorrect data provided';
                }
            })
    };
    $scope.cancel = function () {
        $modalInstance.close();
    };
};

var modalRegisterCtrl = function($scope, $http, $modalInstance, $window) {
    $scope.credentials = {email: '', password: ''};
    $scope.register = function() {
        $http({
            method: 'POST',
            url: '/proceed',
            data: $scope.credentials
        }).
            success(function(data) {
                if(data === 'Ok') {
                    $modalInstance.close()
                    $window.location.href = '/';
                }
                if(data === 'Bad') {
                    $scope.error = 'Incorrect data provided';
                }
            })
    };
    $scope.cancel = function () {
        $modalInstance.close();
    };
};