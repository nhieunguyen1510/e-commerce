(function() {
    'use strict';

    angular
        .module('minxApp')
        .service('SanPhamService', SanPhamService);

    SanPhamService.$inject = ['$scope', '$http'];

    function SanPhamService($scope, $http) {
        var service = {
            getSanPham: getSanPham
        };

        return service;

        function getSanPham() {
            return $http.get('api/danh-muc')
                .then(function(data) {
                    return data.response;
                })
                .catch(function(error) {
                    return error;
                });
        }
    }
})();