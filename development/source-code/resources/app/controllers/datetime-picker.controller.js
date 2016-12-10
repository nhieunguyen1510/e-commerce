(function() {
    'use strict';

    angular
        .module('minxApp')
        .controller('DateTimePickerCtrl', DateTimePickerCtrl);

    DateTimePickerCtrl.$inject = ['$scope'];

    function DateTimePickerCtrl($scope) {
        $scope.thoiDiemDatHangFrom;
        $scope.thoiDiemDatHangTo;
        $scope.isOpen = false;
        $scope.altInputFormats = ['M!/d!/yyyy'];
        $scope.format = 'dd-MM-yyyy';
        $scope.dateOptions = {
            formatYear: 'yy',
            maxDate: new Date(),
        };

        $scope.openFrom = openFrom;
        $scope.openTo = openTo;
        $scope.initThoiDiemDatHang = initThoiDiemDatHang;

        function openFrom() {
            $scope.isOpenFrom = true;
        }

        function openTo() {
            $scope.isOpenTo = true;
        }

        function initThoiDiemDatHang(date) {
            return new Date(date);
        }
    }
})();