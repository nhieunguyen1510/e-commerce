@extends('layouts.main')

@section('title','Trang chủ')

@section('content')
    <!--Begin Content -->
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
        <!--End_list_sale_product-->
        <!--End_Items-->
    <scroll2top-btn></scroll2top-btn>
@endsection