<!-- Javascript Packages -->
<script type="text/javascript" src="{{ URL::asset('packages/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('packages/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('packages/angular/angular.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('packages/froala-editor/js/froala_editor.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('packages/angular-froala/src/angular-froala.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('packages/angular-ui-bootstrap/dist/ui-bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('packages/angular-ui-bootstrap/dist/ui-bootstrap-tpls.js')}}"></script>


<!-- Angular App -->
<script type="text/javascript" src="{{ URL::asset('app/app.module.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('app/controllers/sanpham.controller.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('app/services/sanpham.service.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('app/directives/scroll2top-btn.directive.js')}}"></script>


<!-- Angular App -->
<script type="text/javascript" src="{{ URL::asset('app/app.module.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('app/controllers/sanpham.controller.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('app/controllers/formdangnhap.controller.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('app/controllers/formdangky.controller.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('app/controllers/formdangnhap-nguoiban.controller.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('app/controllers/formdangky-nguoiban.controller.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('app/services/sanpham.service.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('app/directives/scroll2top-btn.directive.js')}}"></script>

    <script src="{{ URL::asset('assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.prettyPhoto.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('assets/js/main.js')}}"></script>
 <script src="{{ URL::asset('assets/js/shopping.js')}}"></script>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        $("area[rel^='prettyPhoto']").prettyPhoto();
        
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
    
        $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
          custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
          changepicturecallback: function(){ initialize(); }
        });

        $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
          custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
          changepicturecallback: function(){ _bsap.exec(); }
        });
      });
      </script>