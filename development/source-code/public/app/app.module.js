(function() {
    'use strict';

    angular.module('minxApp', ['froala', 'ui.bootstrap'])
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