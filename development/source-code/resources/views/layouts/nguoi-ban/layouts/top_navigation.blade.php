 
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
              @if (Auth::guard('nguoi_ban')->check())
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{Storage::url(Auth::guard('nguoi_ban')->user()->anh_dai_dien)}}" alt="">{{ Auth::guard('nguoi_ban')->user()->ten_dang_nhap }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  
                    <li><a href="{{URL::Route('nguoiban-thongtin.index')}}">Thông tin cá nhân </a></li>
                    <li><a href="{{ URL::Route('dangxuat.nguoiban.index') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                   
                  </ul>
                </li>
                 @endif
              </ul>
            </nav>
          </div>
        