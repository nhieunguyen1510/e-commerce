(function() {
    'use strict';

    angular
        .module('minxApp')
        .controller('FormDangKyNguoiBanCtrl', FormDangKyNguoiBanCtrl);

    FormDangKyNguoiBanCtrl.$inject = ['$scope'];

    function FormDangKyNguoiBanCtrl($scope) {
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