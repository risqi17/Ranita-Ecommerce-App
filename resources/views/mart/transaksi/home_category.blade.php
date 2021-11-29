@extends('mart.master')

@section('css-content')

@endsection

@section('content')


    <div class="banner-wrapper has_background">
        <img src="{{ asset('mart/images/components/header-picture.png') }}"
            class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner">
            <h1 class="page-title">
                @foreach ($category as $a)
                    {{ $a->ct_name }}
                @endforeach
            </h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin"><a href="{{ url('/') }}"><span>Home</span></a></li>
                    <li class="trail-item trail-end"><span>Shop</span></li>
                    <li class="trail-item trail-end active"><span>
                            @foreach ($category as $a)
                                {{ $a->ct_name }}
                            @endforeach
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-container shop-page no-sidebar">
        <div class="container">
            <div class="row">
                <div class="main-content col-md-12">
                    <div class="shop-control shop-before-control">
                        <div class="grid-view-mode">
                            <form>
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    class="modes-mode mode-grid display-mode active" value="grid">
                                    <span class="button-inner">
                                        Shop Grid
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </a>
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    class="modes-mode mode-list display-mode " value="list">
                                    <span class="button-inner">
                                        Shop List
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </a>
                            </form>
                        </div>
                        <form class="furgan-ordering" method="get">
                            <select title="product_cat" name="orderby" class="orderby">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>
                        <form class="per-page-form">
                            <label>
                                <select class="option-perpage">
                                    <option value="12" selected="">
                                        Show 12
                                    </option>
                                    <option value="5">
                                        Show 05
                                    </option>
                                    <option value="10">
                                        Show 10
                                    </option>
                                    <option value="12">
                                        Show 12
                                    </option>
                                    <option value="15">
                                        Show 15
                                    </option>
                                    <option value="20">
                                        Show All
                                    </option>
                                </select>
                            </label>
                        </form>
                    </div>
                    <div class="auto-clear equal-container better-height furgan-products">
                        <ul class="row products columns-3">
                            @foreach ($produk as $pd)
                                <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple"
                                    data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link" href="{{ url('product/detail/' . $pd->pd_id) }}">
                                                @if ($pd->pc_file == null)
                                                    <img class="img-responsive"
                                                        src="{{ asset('mart/images/components/no-picture.png') }}"
                                                        alt="Prix Chair" width="600" height="778">
                                                @else
                                                    <img class="img-responsive"
                                                        src="{{ asset('images/produk/' . $pd->pc_file) }}"
                                                        alt="{{ $pd->pd_name }}" width="600" height="778">
                                                @endif

                                            </a>
                                            {{-- <div class="flash">
                                        <span class="onsale"><span class="number">-14%</span></span>
                                        <span class="onnew"><span class="text">New</span></span></div> --}}
                                            <div class="group-button">
                                                {{-- <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div> --}}

                                                {{-- <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button" onclick="saveFromProduct(this)" data-nama="{{ $pd->pd_name }}" data-harga="{{ $pd->pd_harga_jual }}" data-sku="{{ $pd->pd_sku }}" 
                                                @if (isset($pd->pc_file))
                                                    data-foto="images/produk/{{ $pd->pc_file }}" 
                                                @else
                                                    data-foto="mart/images/components/no-picture.png"
                                                @endif>Add to
                                                    cart</a>
                                        </div> --}}
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="{{ url('product/detail/' . $pd->pd_id) }}">{{ $pd->pd_name }}</a>
                                            </h3>
                                            <div class="rating-wapper ">
                                                <div class="star-rating"><span style="width:100%">Rated <strong
                                                            class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review">(1)</span>
                                            </div>
                                            <span class="price"><del><span class="furgan-Price-amount amount"><span
                                                            class="furgan-Price-currencySymbol">Rp.
                                                        </span>@php
                                                            echo number_format($pd->pd_harga_jual + 3500, 2, ',', '.');
                                                        @endphp</span></del> <ins><span
                                                        class="furgan-Price-amount amount"><span
                                                            class="furgan-Price-currencySymbol">Rp. </span>
                                                        @php
                                                            echo number_format($pd->pd_harga_jual, 2, ',', '.');
                                                        @endphp</span></ins></span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="shop-control shop-after-control">
                        <nav class="furgan-pagination">
                            <span class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#">Next</a>
                        </nav>
                        {{-- <p class="furgan-result-count">Showing 1–12 of 20 results</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js-content')

@endsection
