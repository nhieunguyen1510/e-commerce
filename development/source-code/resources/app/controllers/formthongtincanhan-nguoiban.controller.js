(function() {
    'use strict';

    angular
        .module('minxApp')
        .controller('FormThongTinCaNhanCtrl', FormThongTinCaNhanCtrl);

    FormThongTinCaNhanCtrl.$inject = ['$scope'];

    function FormThongTinCaNhanCtrl($scope) {
        $scope.isSubmitted = false;
        $scope.phoneNumberPattern = '^0[0-9]{9}';
        $scope.submitThongTin = submitThongTin;

        function submitThongTin(isValid, event) {
            if (isValid == false) {
                // Nếu dữ liệu nhập bị sai thì dừng sự kiện submit của form
                event.preventDefault();
                // Chuyển giá trị của isSubmitted sang true để các thông báo lỗi hiển thị
                $scope.isSubmitted = true;
            }
        }

    }
})();