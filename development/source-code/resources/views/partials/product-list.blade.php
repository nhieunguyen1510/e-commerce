<div class="sort-list">
<h2>Lọc tìm kiếm</h2>
<hr>

<h3>Chiều dài</h3>
<ul>
<li><a href="#">36</a></li>
<li><a href="#">37</a></li>
<li><a href="#">38</a></li>
<li><a href="#">39</a></li>
</ul>




</div>

<div class="product-list">
    @if (count($dsSanPham) > 0)
        @foreach ($dsSanPham as $sanPham)
            <div class="product-box">
                <div class="content">
                    <div class="inner-content product-image">
                        <img src="{{ $sanPham->anh_dai_dien }}" alt="product-image" />
                    </div>
                    <div class="inner-content product-name">
                        <a href="{{  URL::route('sanpham.show', $sanPham->slug) }}">{{ $sanPham->ten }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>I don't have any records!</p>
    @endif
</div>