(function () {
    'use strict';

    angular
        .module('minxApp')
        .controller('SanPhamController', SanPhamController);

    SanPhamController.$inject = ['$scope'];
    function SanPhamController($scope) {
        var vm = this;
        // Bindable variable
        vm.name = 1;
        vm.price = 100;

        // Bindable function
        vm.click = click;

        function click() {
            vm.name++;
        }
    }
})();