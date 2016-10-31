(function() {
    'use strict';

    angular
        .module('minxApp')
        .controller('FormDangKyCtrl', FormDangKyCtrl);

    FormDangKyCtrl.$inject = ['$scope'];

    function FormDangKyCtrl($scope) {
        $scope.dangKy = dangKy;

        function dangKy(isValid) {
            if (isValid == true) {
                $scope.txtThongBao = '';
                $('#formDangKy').submit();
            } else {
                $scope.txtThongBao = 'Đăng ký không hợp lệ';
            }
        }
    }
})();