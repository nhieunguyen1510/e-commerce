(function() {
    'use strict';

    angular
        .module('minxApp')
        .controller('FormThemSanPhamCtrl', FormThemSanPhamCtrl);

    FormThemSanPhamCtrl.$inject = ['$scope'];

    function FormThemSanPhamCtrl($scope) {
        $scope.txt_giaban = 1;
        $scope.txt_phantramKM = 0;
        $scope.txt_soluongton = 1;
        $scope.isSubmitted = false;

        //Cấu hình cho textarea 
        $scope.froalaOptions = {
            toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', '|', 'color', 'emoticons', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'quote', 'insertHR', '-', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html'],
            height: 300
        };


        $scope.submitSanPham = submitSanPham;
        $scope.getGiaBanHienTai = getGiaBanHienTai;

        function submitSanPham(isValid, event) {
            if (isValid == false) {
                // Nếu dữ liệu nhập bị sai thì dừng sự kiện submit của form
                event.preventDefault();
                // Chuyển giá trị của isSubmitted sang true để các thông báo lỗi hiển thị
                $scope.isSubmitted = true;
            }
        }

        function getGiaBanHienTai(giaBanHientai) {
            return parseInt(giaBanHientai);
        }
    }
})();