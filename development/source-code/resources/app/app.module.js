(function() {
    'use strict';

    angular.module('minxApp', []).config(appConfig);

    appConfig.$inject = ['$interpolateProvider'];

    function appConfig($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    };
})();