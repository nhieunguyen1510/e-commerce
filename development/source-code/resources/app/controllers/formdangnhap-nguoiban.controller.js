(function() {
    'use strict';

    angular
        .module('minxApp')
        .controller('FormDangNhapNguoiBanCtrl', FormDangNhapNguoiBanCtrl);

    FormDangNhapNguoiBanCtrl.$inject = ['$scope'];

    function FormDangNhapNguoiBanCtrl($scope) {
        $scope.dangNhap = dangNhap;

        function dangNhap(isValid) {
            if (isValid == true) {
                $scope.txtThongBao = '';
                $('#formDangNhap').submit();
            } else {
                $scope.txtThongBao = 'Đăng nhập không hợp lệ';
            }
        }
    }
})();