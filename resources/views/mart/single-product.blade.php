@extends('mart.master')

@section('css-content')
    
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/sizestyle.css') }}">
    
@endsection

@section('content')
<div class="banner-wrapper has_background">
    <img src="{{ asset('mart/images/components/header-picture.png') }}"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        
    </div>
</div>

@foreach ($produk as $pd)

<div class="jarak-atas">
    <div class="banner-wrapper-inner">
        <nav class="furgan-breadcrumb"><a href="{{url('/')}}">Home</a><i class="fa fa-angle-right"></i><a href="{{ url('/shop') }}">Shop</a>
            <i class="fa fa-angle-right"></i>{{ $pd->pd_name }}
        </nav>
    </div>
</div>

<div class="single-thumb-vertical main-container shop-page no-sidebar">
    <div class="container">

        <div class="row">
            <div class="main-content col-md-12" >
                <div class="furgan-notices-wrapper"></div>
                <div id="product-27"
                     class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="main-contain-summary">
                        <div class="contain-left has-gallery">
                            <div class="single-left">
                                <div class="furgan-product-gallery furgan-product-gallery--with-images furgan-product-gallery--columns-4 images">
                                    <a href="#" class="furgan-product-gallery__trigger">
                                        <img draggable="false" class="emoji" alt="🔍"
                                             src="https://s.w.org/images/core/emoji/11/svg/1f50d.svg"></a>
                                    <div class="flex-viewport">
                                        <figure class="furgan-product-gallery__wrapper">

                                            @if (isset($pd->pc_file))
                                                @foreach ( $foto as $ft )
                                                    <div class="furgan-product-gallery__image">
                                                        <img src="{{ asset('images/produk/'.$ft->pc_file) }}"
                                                            alt="img">
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="furgan-product-gallery__image">
                                                    <img src="{{ asset('mart/images/components/no-picture.png') }}"
                                                        alt="img">
                                                </div>
                                            @endif
                                            
                                        </figure>
                                    </div>
                                    <ol class="flex-control-nav flex-control-thumbs">
                                        @if (isset($pd->pc_file))
                                            @foreach ( $foto as $ft )
                                            <li><img
                                                    src="{{ asset('images/produk/'.$ft->pc_file) }}"
                                                    alt="img">
                                            </li>
                                            @endforeach
                                            
                                        @else
                                            <li><img
                                                src="{{ asset('mart/images/components/no-picture.png') }}"
                                                alt="img">
                                            </li>
                                        @endif
                                        
                                       
                                    </ol>
                                </div>
                            </div>
                            <div class="summary entry-summary">
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <h1 class="product_title entry-title">{{ $pd->pd_name }}</h1>
                                <p class="price"><del><span class="furgan-Price-amount amount"><span
                                        class="furgan-Price-currencySymbol">Rp. </span>@php
                                        echo number_format($pd->pd_harga_jual+3500,2,",",".");
                                    @endphp</span></del> – <span
                                        class="furgan-Price-amount amount"><span
                                        class="furgan-Price-currencySymbol">Rp. </span>@php
                                        echo number_format($pd->pd_harga_jual,2,",",".");
                                    @endphp</span></p>
                                <p class="stock in-stock">
                                    Availability: <span> @if ($pd->pd_status == 'on')
                                        Ada
                                    @else
                                        Kosong
                                    @endif </span>
                                </p>
                                <div class="furgan-product-details__short-description">
                                    @php
                                        echo $pd->pd_description;
                                    @endphp
                                </div>

                                

                                <form class="variations_form cart" id="input_form" onsubmit="saveCart(); return false;" >
                                    {{ csrf_field() }}

                                    @if (isset($size))  
                                        @foreach ($size as $s)
                                            @php
                                                $a = 1;
                                            @endphp
                                                <input class="checkbox-tools" type="radio" name="size" id="{{ $s->sz_name }}" value="{{ $s->sz_name }}">
                                                <label class="for-checkbox-tools" id='isAda' for="{{ $s->sz_name }}">
                                                    {{ $s->sz_name }}
                                                </label>
                                            @php
                                                $a++;
                                            @endphp
                                        @endforeach
                                    @endif
                                    

                                    <div class="single_variation_wrap">
                                        <div class="furgan-variation single_variation"></div>
                                        <div class="furgan-variation-add-to-cart variations_button" data-name="{{ $pd->pd_name }}" data-price="{{ $pd->pd_harga_jual }}" data-id="{{ $pd->pd_sku }}" data-picture="{{ $pd->pc_file }}">
                                            <div class="quantity">
                                                <span class="qty-label">Quantiy:</span>
                                                <div class="control">
                                                    <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                    <input type="text" id="sku" name="sku" value="{{ $pd->pd_sku }}" hidden>
                                                    <input type="text" id="id" name="id" value="{{ $pd->pd_id }}" hidden>
                                                    <input type="text" id="nama" name="nama" value="{{ $pd->pd_name }}" hidden>
                                                    <input type="text" id="qty" data-step="1" min="0" max="" name="quantity" value="1" title="Qty" class="count input-qty input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                    <input type="text" id="harga" name="harga" value="{{ $pd->pd_harga_jual }}" hidden>
                                                    <input type="text" id="foto" name="foto" 
                                                    @if(isset($pd->pc_file))
                                                        value="images/produk/{{ $pd->pc_file }}"
                                                    @else
                                                        value="mart/images/components/no-picture.png"
                                                    @endif
                                                    hidden>
                                                    <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                </div>
                                            </div>
                                            {{-- 1595608950_13.png --}}
                                            <button class="single_add_to_cart_button button alt furgan-variation-selection-needed">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                
                                <div class="clear"></div>
                                <div class="product_meta">
                                    
                                    <span class="sku_wrapper">SKU: <span class="sku">{{ $pd->pd_sku }}</span></span>
                                    <span class="posted_in">Categories: <a
                                            href="#"
                                            rel="tag">{{ $pd->ct_name }}</a></span>
                                    <span class="tagged_as">Tags: <a href="{{ url('/shop') }}"
                                                                     rel="tag">Arutala</a></span>
                                </div>
                                <div class="furgan-share-socials">
                                    <h5 class="social-heading">Share: </h5>
                                    <a target="_blank" class="facebook" href="#">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                    <a target="_blank" class="twitter"
                                       href="#"><i class="fa fa-twitter"></i>
                                    </a>
                                    <a target="_blank" class="pinterest"
                                       href="#"> <i class="fa fa-pinterest"></i>
                                    </a>
                                    <a target="_blank" class="googleplus"
                                       href="#"><i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>

@endforeach

            <div class="col-md-12 col-sm-12 dreaming_related-product">
                <div class="block-title">
                    <h2 class="product-grid-title">
                        <span>Related Products</span>
                    </h2>
                </div>
                <div class="owl-slick owl-products equal-container better-height"
                     data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    @foreach ($related as $rlt)
                    
                     <div class="product-item style-01 post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock  instock shipping-taxable purchasable product-type-variable has-default-attributes ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="{{ url('product/detail/'.$rlt->pd_id) }}" tabindex="0">
                                    @if ($rlt->pc_file == null)
                                         <img class="img-responsive"
                                             src="{{ asset('mart/images/components/no-picture.png') }}"
                                             alt="Prix Chair" width="600" height="778">
                                     @else
                                         <img class="img-responsive"
                                             src="{{ asset('images/produk/'.$rlt->pc_file) }}"
                                             alt="{{ $rlt->pd_name }}" width="600" height="778">
                                     @endif
                                </a>
                                
                                {{-- <div class="group-button">
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_variable add_to_cart_button" onclick="saveFromProduct(this)" data-nama="{{ $rlt->pd_name }}" data-harga="{{ $rlt->pd_harga_jual }}" data-sku="{{ $rlt->pd_sku }}" 
                                        @if(isset($rlt->pc_file))
                                            data-foto="images/produk/{{ $rlt->pc_file }}" 
                                        @else
                                            data-foto="mart/images/components/no-picture.png"
                                        @endif>Add to
                                            cart</a>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="{{ url('product/detail/'.$rlt->pd_id) }}"
                                       tabindex="0">{{ $rlt->pd_name }}</a>
                                </h3>
                                <div class="rating-wapper ">
                                    <div class="star-rating"><span style="width:100%">Rated <strong
                                            class="rating">5.00</strong> out of 5</span></div>
                                </div>
                                    <span class="price"><del><span class="furgan-Price-amount amount"><span
                                        class="furgan-Price-currencySymbol">Rp. </span>@php
                                        echo number_format($rlt->pd_harga_jual+3500,2,",",".");
                                        @endphp</span></del> <ins><span
                                        class="furgan-Price-amount amount"><span
                                        class="furgan-Price-currencySymbol">Rp. </span>
                                        @php
                                            echo number_format($rlt->pd_harga_jual,2,",",".");
                                        @endphp</span></ins>
                                    </span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-md-12 col-sm-12 furgan_dreaming_upsell-product">
                <div class="block-title">
                    <h2 class="product-grid-title">
                        <span>Upsell Products</span>
                    </h2>
                </div>
                <div class="owl-slick owl-products equal-container better-height"
                     data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">

                     @foreach ($terbaru as $tb)

                    <div class="product-item style-01 post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock  instock shipping-taxable purchasable product-type-variable has-default-attributes ">
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
                                {{-- <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span>
                                </div> --}}
                                {{-- <div class="group-button">
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_variable add_to_cart_button" onclick="saveFromProduct(this)" data-nama="{{ $tb->pd_name }}" data-harga="{{ $tb->pd_harga_jual }}" data-sku="{{ $tb->pd_sku }}" 
                                            @if(isset($tb->pc_file))
                                                data-foto="images/produk/{{ $tb->pc_file }}" 
                                            @else
                                                data-foto="mart/images/components/no-picture.png"
                                            @endif>Add to
                                                cart</a>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="{{ url('product/detail/'.$tb->pd_id) }}" tabindex="0">{{ $tb->pd_name }}</a>
                                </h3>
                                <div class="rating-wapper ">
                                    <div class="star-rating"><span style="width:100%">Rated <strong
                                            class="rating">5.00</strong> out of 5</span></div>
                                    <span class="review">(1)</span>
                                </div>
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

@endsection

@section('js-content')
    <script>
        renderCart();
        function saveCart() {

            var cek = document.getElementById("isAda");
            var cekqty = document.getElementById('qty').value;

            if (cek) {
                var size = $("input[name='size']:checked").val();
            } else {
                var size = 'Flies';
            }

            if(size == undefined){
                alert("Pilih Ukuran Dulu Ya, Flies");
            } else if(cekqty == 0){
                alert("Jumlah Pesananmu Masih 0, Flies");
            }else{
                

                var keys = ['sku', 'nama', 'qty', 'harga', 'foto','id','size'];
                    var obj = {};

                    var sk = document.getElementById("sku").value;
                    var id = document.getElementById("id").value;

                    var cek = document.getElementById("isAda");

                    if (cek) {
                        var size = $("input[name='size']:checked").val();
                    } else {
                        var size = 'Flies';
                    }

                    
                    var cartID = sk+'-'+id+'-'+size;

                    obj['cartId'] = cartID;
                    obj['id'] = document.getElementById("id").value;
                    obj['sku'] = document.getElementById('sku').value;
                    obj['nama'] = document.getElementById('nama').value;
                    obj['qty'] = document.getElementById('qty').value;
                    obj['harga'] = document.getElementById('harga').value;
                    obj['foto'] = document.getElementById('foto').value;
                    obj['size'] = size;

                    // keys.forEach(function (item, index) {
                        
                    //     if(item == 'size'){
                    //         var result = document.getElementByName(item).value;
                    //     }else{
                    //         var result = document.getElementById(item).value;
                    //     }
                    //     if (result) {
                    //         obj[item] = result;
                    //     }
                    // })

                    var carts = getCart();


                    if (Object.keys(obj).length) {
                        var carts = getCart();
                        var sk = document.getElementById("sku").value;
                        var id = document.getElementById("id").value;
                        var size = size;
                        var sku = sk+'-'+id+'-'+size;
                        console.log(sku);

                        var cekCart = carts.find(function (item){
                            return item.cartId == sku;
                        });

                        console.log(cekCart);
                        if(cekCart != undefined){
                            console.log(cekCart.cartId);
                            if(cekCart.cartId == sku){
                                console.log("Dalam if = "+cartID);
                                var storageCart = JSON.parse(localStorage.getItem('carts'));
                                
                                var newCart = [];
                                newCart = storageCart.filter(function (item, index){
                                    return item.cartId != cartID;
                                });
                                console.log(newCart);

                                newCart.push(obj);
                                var data = JSON.stringify(newCart);
                                localStorage.setItem("carts", data);
                                renderCart();
                            } 
                        } else {
                            carts.push(obj);
                            var data = JSON.stringify(carts);
                            localStorage.setItem("carts", data);
                            renderCart();
                        }
                    }

            }


            // alert("Your are a - " + radioValue);

                   
        }
    </script>
    
@endsection