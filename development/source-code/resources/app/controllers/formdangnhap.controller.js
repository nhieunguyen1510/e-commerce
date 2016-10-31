(function() {
    'use strict';

    angular
        .module('minxApp')
        .controller('FormDangNhapCtrl', FormDangNhapCtrl);

    FormDangNhapCtrl.$inject = ['$scope'];

    function FormDangNhapCtrl($scope) {
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