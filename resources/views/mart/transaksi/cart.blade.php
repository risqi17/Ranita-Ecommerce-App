@extends('mart.master')

@section('css-content')

@endsection

@section('content')


<div class="banner-wrapper has_background">
    <img src="{{ asset('mart/images/components/header-picture.png') }}"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Flycatch</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href=""><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Keranjang</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="furgan">
                        <div class="furgan-notices-wrapper"></div>
                        <form class="furgan-cart-form">
                            <table class="shop_table shop_table_responsive cart furgan-cart-form__contents"
                                   cellspacing="0" id="data-cart">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Produk</th>
                                    <th class="product-price">Harga</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                
                                {{-- <tr>
                                    <td colspan="6" class="actions">
                                       <div class="coupon">
                                            <label for="coupon_code">Coupon:</label> <input type="text"
                                                                                            name="coupon_code"
                                                                                            class="input-text"
                                                                                            id="coupon_code" value=""
                                                                                            placeholder="Coupon code">
                                            <button type="submit" class="button" name="apply_coupon"
                                                    value="Apply coupon">Apply coupon
                                            </button>
                                        </div> 
                                        <button type="submit" class="button" name="update_cart" value="Update cart"
                                                disabled="">Update cart
                                        </button>
                                        <input type="hidden" id="furgan-cart-nonce" name="furgan-cart-nonce"
                                               value="f41b5bf554"><input type="hidden" name="_wp_http_referer"
                                                                         value="/furgan/cart/"></td>
                                </tr> --}}

                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart totals</h2>
                                <table class="shop_table shop_table_responsive" cellspacing="0">
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">Rp. </span><strong id="subtotal-price">00</strong> </span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total"><strong><span
                                                class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">Rp. </span><strong id="total-price">00</strong> </span></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="furgan-proceed-to-checkout">
                                    <a href="{{ url('/checkout') }}"
                                       class="checkout-button button alt furgan-forward">
                                        Checkout Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 dreaming_crosssell-product">
                            <div class="block-title">
                                <h2 class="product-grid-title">
                                    <span>Lagi Promo! Buruan Ambil...</span>
                                </h2>
                            </div>
                            <div class="owl-slick owl-products equal-container better-height"
                                 data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                                @foreach ($terbaru as $tb)
                                <div class="product-item style-01 post-278 page type-page status-publish hentry">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                                href="{{ url('product/detail/'.$tb->pd_id) }}" tabindex="0">
                                                @if ($tb->pc_file == null)
                                                <img class="img-responsive"
                                                    src="{{ asset('mart/images/components/no-picture.png') }}"
                                                    alt="Prix Chair" width="600" height="778">
                                                    @else
                                                        <img class="img-responsive"
                                                            src="{{ asset('images/produk/'.$tb->pc_file) }}"
                                                            alt="{{ $tb->pd_name }}" width="600" height="778">
                                                    @endif
                                                </a>
                                            <div class="flash">
                                                {{-- <span class="onsale"><span class="number">-21%</span></span> --}}
                                                <span class="onnew"><span class="text">New</span></span></div>
                                            <div class="group-button">
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="{{ url('product/detail/'.$tb->pd_id) }}"
                                                   tabindex="0">{{ $tb->pd_name }}</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                                <span class="price"><del><span class="furgan-Price-amount amount"><span
                                                    class="furgan-Price-currencySymbol">Rp. </span>@php
                                                    echo number_format($tb->pd_harga_jual+3500,2,",",".");
                                                    @endphp</span></del> <ins><span
                                                    class="furgan-Price-amount amount"><span
                                                    class="furgan-Price-currencySymbol">Rp. </span>
                                                    @php
                                                        echo number_format($tb->pd_harga_jual,2,",",".");
                                                    @endphp</span></ins>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection

@section('js-content')

<script>
    renderKeranjang();
</script>

@endsection