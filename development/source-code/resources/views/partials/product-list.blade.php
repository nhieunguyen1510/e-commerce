


<div class="product-list">
   <div class="item-product">

            <div class="product-top">
                

               

                @if (count($dsSanPham) > 0)
        @foreach ($dsSanPham as $sanPham)

                <div class="product-top-item" style="width:23%;margin-top: 20px;">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{$sanPham->getAnh()}}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="{!! url('mua-hang',[$sanPham->id]) !!}">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">{{ number_format( $sanPham->gia_ban_hien_tai  ,0,",",".")}}</span>
                            
                        </div>
                        <div class="product-name">
                            <a href="{{  URL::route('sanpham.show', $sanPham->id) }}" title="{{ $sanPham->ten }}">
                           {{ $sanPham->ten }}
                            </a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="{{ $sanPham->taikhoannguoiban->ten_shop }}"><i class="fa fa-home" aria-hidden="true"></i> {{ $sanPham->taikhoannguoiban->ten_shop }}</a>
                    </div>
                </div>
 @endforeach
    @else
        <p>Hiện không có sản phẩm nào !</p>
    @endif
                
            </div>
        </div>
</div>

