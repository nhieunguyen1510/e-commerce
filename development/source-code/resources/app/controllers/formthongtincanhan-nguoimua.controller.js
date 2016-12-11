(function() {
    'use strict';

    angular
        .module('minxApp')
        .controller('FormThongTinCaNhanCtrl', FormThongTinCaNhanCtrl);

    FormThongTinCaNhanCtrl.$inject = ['$scope'];

    function FormThongTinCaNhanCtrl($scope) {
    	$scope.isGiaoHangShow = false;
    	$scope.isLichSuShow=false;
    	$scope.clickGiaoHang = function(){
    		$scope.isGiaoHangShow = true;
    		$scope.isLichSuShow=false;
    	}
    	$scope.clickLichSu=function(){
    		$scope.isLichSuShow = true;
    		$scope.isGiaoHangShow = false;
    	}
    }
})();