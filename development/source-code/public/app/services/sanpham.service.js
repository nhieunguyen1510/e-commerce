(function() {
'use strict';

    angular
        .module('minxApp')
        .service('SanPhamService', SanPhamService);

    SanPhamService.$inject = ['$scope'];
    function SanPhamService($scope) {
        var vm=this;


        
        vm.exposedFn = exposedFn;
        
        ////////////////

        function exposedFn() { }
        }
})();