<!DOCTYPE html>
<html lang="en">

<head>
    <title>CÔNG TY MINX</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <!--Begin_navbar_top-->
    <nav class="navbar navbar-default navbar-light" role="navigation">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="#">Kênh Người Bán</a></li>
                <li><a href="#">Trợ Giúp</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
            @if (!Auth::guard('web')->user())
                <li><a href="{{ URL::Route('dangky.index') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng Ký</a></li>
                <li><a href="{{ URL::Route('dangnhap.index') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng Nhập</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::guard('web')->user()->ten_dang_nhap }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ URL::Route('dangxuat.post') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Đăng xuất
                            </a>

                            <form id="logout-form" action="{{ URL::Route('dangxuat.post') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
            </ul>
        </div>
    </nav>
    <!--End_navbar_top-->

    <!--Begin Content -->
    <div class="container">
        <div class="header">
            <div class="header-block logo-block">
                <img src="assets/img/logo.png" alt="Minx">
            </div>

            <div class="header-block right-header-block">
                <!--Begin_input-group -->
                <div class=" search-lite">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span></button>
                            <div class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </span>
                    </div>
                </div>
                <!--End_input-group -->

                <!--Begin_four-button -->
                <div class=" right-button-group">
                    <div class="item">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ Hàng <span class="num cart_qty">0</span></button>
                        <div class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </div>
                    </div>

                    <div class="item">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell" aria-hidden="true"></i> Thông Báo <span class="num cart_qty">0</span></button>
                        <div class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </div>
                    </div>

                    <div class="item">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-heart" aria-hidden="true"></i> Yêu Thích <span class="num cart_qty">0</span></button>
                        <div class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </div>
                    </div>

                    <div class="item">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-check" aria-hidden="true"></i> Thanh Toán</button>
                        <div class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </div>
                    </div>
                </div>
                <!--End_four-button -->
            </div>

        </div>

        <!--Begin_navbar_category_banner-->
        <div class="banner">

            <!--Begin_navbar_category-->
            <nav class="navbar">
                <div class="categories-main"><i class="fa fa-bars" aria-hidden="true"></i>
                    <a class="" href="#"> DANH MỤC SẢN PHẨM</a>
                </div>
                <div class="channel-entrance">
                    <a href="#">GIỚI THIỆU</a>
                    <a href="#">KHUYẾN MÃI</a>
                    <a href="#">BÁN CHẠY</a>
                    <a href="#">XU HƯỚNG MỚI</a>
                </div>
            </nav>

            <nav class="main-nav">
                <ul>
                    <li class="nav-item">
                        <a href="#">
                            <div>
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span>Thời Trang Nữ</span>
                            </div>
                            <i class="fa fa-angle-right icon-arrow" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <div>
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span>Thời Trang Nam</span>
                            </div>
                            <i class="fa fa-angle-right icon-arrow" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <div>
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span>Giày Dép</span>
                            </div>
                            <i class="fa fa-angle-right icon-arrow" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <div>
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span>Túi Xách</span>
                            </div>
                            <i class="fa fa-angle-right icon-arrow" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <div>
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span>Đồng Hồ</span>
                            </div>
                            <i class="fa fa-angle-right icon-arrow" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <div>
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span>Phụ Kiện</span>
                            </div>
                            <i class="fa fa-angle-right icon-arrow" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!--End_navbar_category-->

            <!--Begin_Carousel-->
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
                        <img src="assets/img/mua1.jpg" alt="Chania" width="460" height="345">

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
                        <img src="assets/img/mua2.jpg" alt="Chania" width="460" height="345">
                    </div>

                    <div class="item">
                        <img src="assets/img/mua3.jpg" alt="Flower" width="460" height="345">
                    </div>

                    <div class="item">
                        <img src="assets/img/mua4.jpg" alt="Flower" width="460" height="345">
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
            <!--End_Carousel-->
        </div>
        <!--End_navbar_category_banner-->

        <!--Begin_list_item_product-->

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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
                                <img src="assets/img/ao_nu_004.jpg" alt="Áo trễ vai mã 001">
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
        <!--End_list_sale_product-->
        <!--End_Items-->
    </div>
    <!--End_Content-->


    <!--Begin_footer-->
    <footer>
        <!--Begin_delivery-->
        <div class="row addition-info" id="footer-pay">
            <div class="container">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-5">
                        <h4>CÁCH THỨC THANH TOÁN</h4>
                        <div class="row">
                            <div class="col-xs-12 col-md-2">
                                <img src="assets/img/Visa.png">
                            </div>

                            <div class="col-xs-12 col-md-2">
                                <img src="assets/img/master_card.png">
                            </div>

                            <div class="col-xs-12 col-md-2">
                                <img src="assets/img/master_card.png">
                            </div>

                            <div class="col-xs-12 col-md-2">
                                <img src="assets/img/Visa.png">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <h4>DỊCH VỤ GIAO HÀNG</h4>
                        <div class="row">
                            <img src="assets/img/giaohangnhanh.jpg">
                        </div>

                        <p style="padding-top:5px;"></p>

                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <img src="assets/img/vietnampost.jpg">
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <img src="assets/img/logo-247.png">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <h4>CHỨNG NHẬN</h4>
                        <div class="row">
                            <img src="assets/img/registered.png">
                        </div>

                        <p style="padding-top:5px;"></p>
                        <div class="row">
                            <img src="assets/img/announced.png">
                        </div>

                        <p style="padding-top:5px;"></p>
                        <div class="row">
                            <span class="icon icon-footer-norton"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End_delivery-->
        <div class="footer">
            <div class="inner-footer">
                <div class="nav-footer">
                    <div class="footer-category">
                        <h4>Về chúng tôi</h4>
                        <ul>
                            <li><a href="#">Quy chế hoạt động</a></li>
                            <li><a href="#">Các mức chế tài vi phạm</a></li>
                            <li><a href="#">Tuyển dụng</a></li>
                            <li>Hotline: <strong>1900 1600</strong></li>
                        </ul>
                    </div>
                    <div class="footer-category">
                        <h4>DÀNH CHO NGƯỜI MUA</h4>
                        <ul>
                            <li><a href="#">Quy định đối với người mua</a></li>
                            <li><a href="#">Hướng dẫn mua hàng</a></li>
                        </ul>
                        <h4>DÀNH CHO NGƯỜI BÁN</h4>
                        <ul>
                            <li><a href="#">Quy định đối với người bán</a></li>
                            <li><a href="#">Hướng dẫn mở shop và bán</a></li>
                        </ul>
                    </div>
                    <div class="footer-category">
                        <h4>BẢN ĐỒ</h4>
                        <div class="embedded-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.761794027897!2d106.6322253143502!3d10.752832992337556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e812a713aa9%3A0x607f4a13d2101f92!2sVascara+retail+store!5e0!3m2!1svi!2s!4v1475426894549"
                                frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="footer-category">
                        <h4>KẾT NỐI VỚI CHÚNG TÔI</h4>
                        <ul>
                            <a class="btn btn-xs btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                            <a class="btn btn-xs btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-xs btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-xs btn-social-icon btn-instagram" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        </ul>

                        <ul class="list-unstyled">
                            <li>
                                <h4>CÔNG TY MINX</h4>
                            </li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> PHONE: 01212176980</li>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> ĐỊA CHỈ: 234 Nguyễn Văn Luông phường 5 quận 6 TPHCM</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL: minxcorp.help@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End_footer-->
    
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('packages/normalize/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('packages/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('packages/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('packages/bootstrap-social/bootstrap-social.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/app.css')}}">

    <script type="text/javascript" src="{{ URL::asset('packages/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('packages/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('packages/angular/angular.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('app/app.module.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('app/controllers/sanpham.controller.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('app/services/sanpham.service.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('app/directives/scroll2top-btn.directive.js')}}"></script>
</body>

</html>