(function() {
    'use strict';

    angular
        .module('minxApp')
        .controller('FormThemSanPhamCtrl', FormThemSanPhamCtrl);

    FormThemSanPhamCtrl.$inject = ['$scope'];

    function FormThemSanPhamCtrl($scope) {
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