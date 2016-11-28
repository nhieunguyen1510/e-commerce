@extends('layouts.main')

@section('title','Trang chủ')

@section('content')
    <!--Begin Content -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ URL::asset('assets/img/mua1.jpg') }}" alt="Chania" width="460" height="345">

                <div class="carousel-caption">
                    <h2>Uthappizza
                        <span class="label label-danger label-xs">Hot</span>
                        <span class="badge">$4.99</span>
                    </h2>
                    <p>A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
                    <p><a class="btn btn-primary btn-xs" href="#">Xem thêm &raquo;</a></p>
                </div>

            </div>

            <div class="item">
                <img src="{{ URL::asset('assets/img/mua2.jpg') }}" alt="Chania" width="460" height="345">
            </div>

            <div class="item">
                <img src="{{ URL::asset('assets/img/mua3.jpg') }}" alt="Flower" width="460" height="345">
            </div>

            <div class="item">
                <img src="{{ URL::asset('assets/img/mua4.jpg') }}" alt="Flower" width="460" height="345">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        <!--Begin_list_new_product-->
        <div class="item-product">
            <div class="category-title">
                <center>
                    <h2>SẢN PHẨM MỚI</h2>
                </center>
                <p><a href="#">Xem thêm &raquo;</a></p>
            </div>

            <div class="product-top">
                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/demo.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>

                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/hmprod.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>

                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/demo-small.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>

                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/ao_nu_004.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">
                            @if(isset($sanpham))
                             @foreach ($sanpham  as $sp) 
                           {{ $sp->mo_ta }} 
                           @endforeach
                            
                            @endif
                            </a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>

                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/ao_nu_004.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>
            </div>
        </div>
        <!--End_list_new_product-->

        <!--Begin_list_hot_product-->
        <div class="item-product">
            <div class="category-title">
                <center>
                    <h2>SẢN PHẨM BÁN CHẠY</h2>
                </center>
                <p><a href="#">Xem thêm &raquo;</a></p>
            </div>

            <div class="product-top">
                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/ao_nu_004.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>

                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/ao_nu_004.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>

                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/ao_nu_004.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>

                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/ao_nu_004.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>

                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/ao_nu_004.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>
            </div>
        </div>
        <!--End_list_hot_product-->

        <!--Begin_list_sale_product-->
        <div class="item-product">
            <div class="category-title">
                <center>
                    <h2>SẢN PHẨM KHUYẾN MÃI</h2>
                </center>
                <p><a href="#">Xem thêm &raquo;</a></p>
            </div>

            <div class="product-top">
                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/ao_nu_004.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>

                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/ao_nu_004.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>

                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/ao_nu_004.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>

                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/ao_nu_004.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>

                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ URL::asset('assets/img/ao_nu_004.jpg') }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">200000 đ</span>
                            <span class="old-price">100000 đ</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="AÓ TRỄ VAI PHỐI BÈO XINH - LOẠI QUẢNG CHÂU HẠNG 1">áo trễ vai phối bèo xinh - loại quảng châu hạng 1</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>
            </div>
        </div>

         @if(isset($sanpham))
                             @foreach ($sanpham  as $sp) 
                           {!! $sp->mo_ta !!} 
                           @endforeach
                            
                            @endif
        <!--End_list_sale_product-->
        <!--End_Items-->
    <scroll2top-btn></scroll2top-btn>
@endsection