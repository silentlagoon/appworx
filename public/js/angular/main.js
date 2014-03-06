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
        modalLogin.result.then(function(){

        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    }
};

var modalLoginCtrl = function($scope, $http, $modalInstance) {
    $scope.credentials = {email: '',password: ''};
    $scope.login = function () {
        $http({
            method: 'POST',
            url: '/verify',
            data: $scope.credentials
        }).
            success(function(){
                $modalInstance.close()
            }).
            error(function(){
            })
    };
    $scope.cancel = function () {
        $modalInstance.close();
    };
};

var modalRegisterCtrl = function($scope, $http, $modalInstance) {
    $scope.credentials = {email: '', password: ''};
    $scope.register = function() {
        $http({
            method: 'POST',
            url: '/proceed',
            data: $scope.credentials
        }).
            success(function() {
                $modalInstance.close()
            }).error(function(){
            })
    }
    $scope.cancel = function () {
        $modalInstance.close();
    };
}