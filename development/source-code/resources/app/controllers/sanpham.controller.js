(function() {
    'use strict';

    angular
        .module('minxApp')
        .controller('SanPhamController', SanPhamController);

    SanPhamController.$inject = ['$scope', 'SanPhamService'];

    function SanPhamController($scope, SanPhamService) {
        var vm = this;
        // Bindable variable
        vm.name = 1;
        vm.price = 100;
        vm.dssanpham=[];

        // Bindable function
        vm.showSanPhamList = showSanPhamList;

        function showSanPhamList() {
            SanPhamService.getSanPham()
                .then(function(response) {
                    vm.dssanpham = response;
                });
        }
    }
})();