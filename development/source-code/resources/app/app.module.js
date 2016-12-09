(function() {
    'use strict';

    angular.module('minxApp', ['froala', 'ngMessages'])
        .config(appConfig)
        .value('froalaConfig', {
            toolbarInline: false,
            placeholderText: 'Enter Text Here'
        });

    appConfig.$inject = ['$interpolateProvider'];

    function appConfig($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    };
})();