var app = angular.module('appWorx', ['ui.bootstrap']);

var ModalDemoCtrl = function ($scope, $modal, $log) {

    $scope.open = function () {

        var modalInstance = $modal.open({
            templateUrl: 'modal.html',
            controller: ModalInstanceCtrl,
            resolve: {
                items: function () {
                    return $scope.profile;
                }
            }
        });

        modalInstance.result.then(function (selectedItem) {
            $scope.selected = selectedItem;
        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    };
};

var ModalInstanceCtrl = function ($scope, $modalInstance, $http) {
console.log($scope.profile);
    $scope.ok = function () {
        $http({
            method: 'POST',
            url: '/profile/save',
            data: $scope.profile
        }).
            success(function(){
                $modalInstance.dismiss('cancel')
            }).
            error(function(){

            })
    };

    $scope.cancel = function () {
        $modalInstance.dismiss('cancel');
    };
};