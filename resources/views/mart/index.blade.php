@extends('mart.master')

@section('css-content')

@endsection

@section('content')


    <div class="fullwidth-template">
        <div class="slide-home-01">
            <div class="response-product product-list-owl owl-slick equal-container better-height"
                data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}"
                data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
                <div class="slide-wrap">
                    <img src="{{ asset('mart/images/slide2222.jpg') }}" alt="image">
                    <div class="slide-info">
                        <div class="container">
                            <div class="slide-inner">
                                <h5>New Arrivals</h5>
                                <h1>Inspired Chair</h1>
                                <h2>Big Sale</h2>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-wrap">
                    <img src="{{ asset('mart/images/slide11new.jpg') }}" alt="image">
                    <div class="slide-info">
                        <div class="container">
                            <div class="slide-inner">
                                <h5>Best Selling</h5>
                                <h1><span>Trend</span> White</h1>
                                <h2>Light</h2>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-wrap">
                    <img src="{{ asset('mart/images/slide333.jpg') }}" alt="image">
                    <div class="slide-info">
                        <div class="container">
                            <div class="slide-inner">
                                <h5>This Week Only</h5>
                                <h1>Mega Sale</h1>
                                <h2>50% Off</h2>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-002">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="furgan-iconbox style-01">
                            <div class="iconbox-inner">
                                <div class="icon">
                                    <span class="flaticon-startup"></span>
                                    <span class="flaticon-startup"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">Fast Shipping.</h4>
                                    <div class="desc">With sites in 5 languages, we ship to over 200
                                        countries</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="furgan-iconbox style-01">
                            <div class="iconbox-inner">
                                <div class="icon">
                                    <span class="flaticon-padlock"></span>
                                    <span class="flaticon-padlock"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">Safe delivery</h4>
                                    <div class="desc">Pay with the world’s most popular, secure payment
                                        methods.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="furgan-iconbox style-01">
                            <div class="iconbox-inner">
                                <div class="icon">
                                    <span class="flaticon-recycle"></span>
                                    <span class="flaticon-recycle"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">365 Days Return</h4>
                                    <div class="desc">Round-the-clock assistance for a shopping experience.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-003">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="furgan-banner style-01 left-center">
                            <div class="banner-inner">
                                <figure class="banner-thumb">
                                    <img src="{{ asset('mart/images/banner11.jpg') }}" class="attachment-full size-full" alt="img">
                                </figure>
                                <div class="banner-info ">
                                    <div class="banner-content">
                                        <div class="title-wrap">
                                            <h6 class="title">
                                                <a target="_self" href="#">Cuckoo Clock</a>
                                            </h6>
                                        </div>
                                        <div class="button-wrap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="furgan-banner style-01 right-top">
                            <div class="banner-inner">
                                <figure class="banner-thumb">
                                    <img src="{{ asset('mart/images/banner12.jpg') }}" class="attachment-full size-full" alt="img">
                                </figure>
                                <div class="banner-info ">
                                    <div class="banner-content">
                                        <div class="title-wrap">
                                            <h6 class="title">
                                                <a target="_self" href="#">Elephant Chair</a>
                                            </h6>
                                        </div>
                                        <div class="button-wrap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="furgan-banner style-01 left-bottom">
                            <div class="banner-inner">
                                <figure class="banner-thumb">
                                    <img src="{{ asset('mart/images/banner13.jpg') }}" class="attachment-full size-full" alt="img">
                                </figure>
                                <div class="banner-info ">
                                    <div class="banner-content">
                                        <div class="title-wrap">
                                            <h6 class="title">
                                                <a target="_self" href="#">Wood Table</a>
                                            </h6>
                                        </div>
                                        <div class="button-wrap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-001">
            <div class="container">
                <div class="furgan-heading style-01">
                    <div class="heading-inner">
                        <h3 class="title">Featured Products </h3>
                        <div class="subtitle">Made with care for your little ones, our products are perfect for
                            every
                            occasion. Check it out.
                        </div>
                    </div>
                </div>
                <div class="furgan-products style-02">
                    <div class="response-product product-list-owl owl-slick equal-container better-height"
                        data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:2}"
                        data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                        <div
                            class="product-item featured_products style-02 rows-space-30 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock sale featured shipping-taxable product-type-grouped">
                            <div class="product-inner tooltip-top">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro61-1-270x350.jpg') }}"
                                            alt="Sweeper Funnel" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Sweeper Funnel</a>
                                    </h3>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>79.00</span> – <span
                                            class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>139.00</span></span>
                                </div>
                                <div class="group-button clearfix">
                                    
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item featured_products style-02 rows-space-30 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-top">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro71-1-270x350.jpg') }}"
                                            alt="Moss Sofa" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onsale"><span class="number">-18%</span></span>
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Moss Sofa</a>
                                    </h3>
                                    <span class="price"><del><span class="furgan-Price-amount amount"><span
                                                    class="furgan-Price-currencySymbol">$</span>109.00</span></del>
                                        <ins><span class="furgan-Price-amount amount"><span
                                                    class="furgan-Price-currencySymbol">$</span>89.00</span></ins></span>
                                </div>
                                <div class="group-button clearfix">
                                   
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item featured_products style-02 rows-space-30 post-30 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-specials product_tag-light product_tag-table product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-top">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro101-1-270x350.jpg') }}"
                                            alt="Tulip Chair" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="30" tabindex="0">Quick
                                        View</a>
                                </div>
                                <div class="product-info">
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Tulip Chair</a>
                                    </h3>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>60.00</span></span>
                                </div>
                                <div class="group-button clearfix">
                                    
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item featured_products style-02 rows-space-30 post-31 product type-product status-publish has-post-thumbnail product_cat-light product_cat-sofas product_tag-hat first instock sale featured shipping-taxable product-type-grouped">
                            <div class="product-inner tooltip-top">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro91-1-270x350.jpg') }}"
                                            alt="DAX Armchair" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">DAX Armchair</a>
                                    </h3>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>89.00</span> – <span
                                            class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>139.00</span></span>
                                </div>
                                <div class="group-button clearfix">
                                   
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item featured_products style-02 rows-space-30 post-29 product type-product status-publish has-post-thumbnail product_cat-new-arrivals product_cat-specials product_tag-light product_tag-sock  instock featured downloadable shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-top">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro161-1-270x350.jpg') }}"
                                            alt="Alarm Clock" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Alarm Clock</a>
                                    </h3>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>129.00</span></span>
                                </div>
                                <div class="group-button clearfix">
                                  
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item featured_products style-02 rows-space-30 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-top">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro161-1-270x350.jpg') }}"
                                            alt="Prix Chair" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onsale"><span class="number">-14%</span></span>
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <div class="rating-wapper ">
                                        <div class="star-rating"><span style="width:100%">Rated <strong
                                                    class="rating">5.00</strong> out of 5</span></div>
                                        <span class="review">(1)</span>
                                    </div>
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Prix Chair</a>
                                    </h3>
                                    <span class="price"><del><span class="furgan-Price-amount amount"><span
                                                    class="furgan-Price-currencySymbol">$</span>138.00</span></del>
                                        <ins><span class="furgan-Price-amount amount"><span
                                                    class="furgan-Price-currencySymbol">$</span>119.00</span></ins></span>
                                </div>
                                <div class="group-button clearfix">
                                    
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item featured_products style-02 rows-space-30 post-26 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-hat first instock featured shipping-taxable product-type-external">
                            <div class="product-inner tooltip-top">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro141-1-270x350.jpg') }}"
                                            alt="Chair AAC" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <div class="rating-wapper ">
                                        <div class="star-rating"><span style="width:100%">Rated <strong
                                                    class="rating">5.00</strong> out of 5</span></div>
                                        <span class="review">(1)</span>
                                    </div>
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Chair AAC</a>
                                    </h3>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>207.00</span></span>
                                </div>
                                <div class="group-button clearfix">
                                  
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item featured_products style-02 rows-space-30 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-top">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro151-1-270x350.jpg') }}"
                                            alt="Office Chair" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onsale"><span class="number">-11%</span></span>
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="25" tabindex="0">Quick
                                        View</a>
                                </div>
                                <div class="product-info">
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Office Chair</a>
                                    </h3>
                                    <span class="price"><del><span class="furgan-Price-amount amount"><span
                                                    class="furgan-Price-currencySymbol">$</span>89.00</span></del>
                                        <ins><span class="furgan-Price-amount amount"><span
                                                    class="furgan-Price-currencySymbol">$</span>79.00</span></ins></span>
                                </div>
                                <div class="group-button clearfix">
                                   
                                </div>
                            </div>
                        </div>
                        
                        <div
                            class="product-item featured_products style-02 rows-space-30 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock first instock featured downloadable shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-top">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro161-1-270x350.jpg') }}"
                                            alt="Wall Lamp" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="22"
                                        tabindex="-1">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Wall Lamp</a>
                                    </h3>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>98.00</span></span>
                                </div>
                                <div class="group-button clearfix">
                                   
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item featured_products style-02 rows-space-30 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock first instock featured downloadable shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-top">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro161-1-270x350.jpg') }}"
                                            alt="Wall Lamp" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="22"
                                        tabindex="-1">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Wall Lamp</a>
                                    </h3>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>98.00</span></span>
                                </div>
                                <div class="group-button clearfix">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="furgan-banner style-02 left-center">
                <div class="banner-inner">
                    <figure class="banner-thumb">
                        <img src="{{ asset('mart/images/banner101.jpg') }}" class="attachment-full size-full" alt="img">
                    </figure>
                    <div class="banner-info container">
                        <div class="banner-content">
                            <div class="title-wrap">
                                <div class="banner-label">
                                    Modern Chair
                                </div>
                                <h6 class="title">
                                    Best Seller </h6>
                            </div>
                            <div class="button-wrap">
                                <div class="subtitle">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit justo
                                </div>
                                <a class="button" target="_self" href="#"><span>Shop now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-001">
            <div class="container">
                <div class="furgan-heading style-01">
                    <div class="heading-inner">
                        <h3 class="title">New Arrival</h3>
                        <div class="subtitle">
                            Made with care for your little ones, our products are perfect for every occasion. Check it
                            out.
                        </div>
                    </div>
                </div>
                <div class="furgan-products style-01">
                    <div class="response-product product-list-owl owl-slick equal-container better-height"
                        data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                        data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                        <div
                            class="product-item recent-product style-01 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro13-1-270x350.jpg') }}"
                                            alt="Woody Table" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="furgan product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Woody Table</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>109.00</span></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item recent-product style-01 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-furniture product_tag-lamp  instock shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro13-1-270x350.jpg') }}"
                                            alt="Lynn Storage" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="furgan product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Lynn Storage</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>79.00</span></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item recent-product style-01 rows-space-0 post-37 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-bed product_tag-light product_tag-hat product_tag-sock last instock shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro13-1-270x350.jpg') }}"
                                            alt="Knit Lamp" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="furgan product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Knit Lamp</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>120.00</span></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item recent-product style-01 rows-space-0 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock first instock shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro13-1-270x350.jpg') }}"
                                            alt="Round Basket" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="furgan product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Round Basket</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>134.00</span></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item recent-product style-01 rows-space-0 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro13-1-270x350.jpg') }}"
                                            alt="Long Sofa" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onsale"><span class="number">-21%</span></span>
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="furgan product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Long Sofa</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><del><span class="furgan-Price-amount amount"><span
                                                    class="furgan-Price-currencySymbol">$</span>125.00</span></del>
                                        <ins><span class="furgan-Price-amount amount"><span
                                                    class="furgan-Price-currencySymbol">$</span>99.00</span></ins></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-item recent-product style-01 rows-space-0 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock sale featured shipping-taxable product-type-grouped">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="{{ asset('mart/images/apro13-1-270x350.jpg') }}"
                                            alt="Sweeper Funnel" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="furgan product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#"
                                                class="button product_type_simple add_to_cart_button">Viewproducts</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Sweeper Funnel</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>79.00</span> – <span
                                            class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">$</span>139.00</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-038">
            <div class="furgan-banner style-07 left-center">
                <div class="banner-inner">
                    <figure class="banner-thumb">
                        <img src="{{ asset('mart/images/banner28.jpg') }}" class="attachment-full size-full" alt="img">
                    </figure>
                    <div class="banner-info container">
                        <div class="banner-content">
                            <div class="title-wrap">
                                <div class="banner-label">
                                    30 Nov - 03 Dec
                                </div>
                                <h6 class="title">
                                    New Chairs </h6>
                            </div>
                            <div class="cate">
                                50% Off / Selected items
                            </div>
                            <div class="button-wrap">
                                <div class="subtitle">
                                    Mus venenatis habitasse leo malesuada lacus commodo faucibus torquent donec
                                </div>
                                <a class="button" target="_self" href="#"><span>Shop now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-001">
            <div class="container">
                <div class="furgan-heading style-01">
                    <div class="heading-inner">
                        <h3 class="title">
                            From Our Blog </h3>
                        <div class="subtitle">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit erat vehicula ad, mollis viverra
                            vulputate
                        </div>
                    </div>
                </div>
                <div class="furgan-blog style-01">
                    <div class="blog-list-owl owl-slick equal-container better-height"
                        data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:3,&quot;rows&quot;:1}"
                        data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                        <article
                            class="post-item post-grid rows-space-0 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                            <div class="post-inner blog-grid">
                                <div class="post-thumb">
                                    <a href="#" tabindex="0">
                                        <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                            class="img-responsive attachment-370x330 size-370x330" alt="img"
                                            width="370" height="330"> </a>
                                    <a class="datebox" href="#" tabindex="0">
                                        <span>19</span>
                                        <span>Dec</span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <div class="post-author">
                                            By:<a href="#" tabindex="0">
                                                admin </a>
                                        </div>
                                        <div class="post-comment-icon">
                                            <a href="#" tabindex="0">
                                                0 </a>
                                        </div>
                                    </div>
                                    <div class="post-info equal-elem">
                                        <h2 class="post-title"><a href="#" tabindex="0">Not your ordinary furniture
                                                service.</a></h2>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                        quisque litora dapibus primis lacinia
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article
                            class="post-item post-grid rows-space-0 post-192 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion category-furniture category-life-style tag-light tag-fashion tag-furniture">
                            <div class="post-inner blog-grid">
                                <div class="post-thumb">
                                    <a href="#" tabindex="0">
                                        <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                            class="img-responsive attachment-370x330 size-370x330" alt="img"
                                            width="370" height="330"> </a>
                                    <a class="datebox" href="#" tabindex="0">
                                        <span>19</span>
                                        <span>Dec</span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <div class="post-author">
                                            By:<a href="#" tabindex="0">
                                                admin </a>
                                        </div>
                                        <div class="post-comment-icon">
                                            <a href="#" tabindex="0">
                                                0 </a>
                                        </div>
                                    </div>
                                    <div class="post-info equal-elem">
                                        <h2 class="post-title"><a href="#" tabindex="0">We bring you the best by
                                                working</a></h2>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                        quisque litora dapibus primis lacinia
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article
                            class="post-item post-grid rows-space-0 post-189 post type-post status-publish format-video has-post-thumbnail hentry category-table category-life-style tag-furniture tag-life-style post_format-post-format-video">
                            <div class="post-inner blog-grid">
                                <div class="post-thumb">
                                    <a href="#" tabindex="0">
                                        <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                            class="img-responsive attachment-370x330 size-370x330" alt="img"
                                            width="370" height="330"> </a>
                                    <a class="datebox" href="#" tabindex="0">
                                        <span>19</span>
                                        <span>Dec</span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <div class="post-author">
                                            By:<a href="#" tabindex="0">
                                                admin </a>
                                        </div>
                                        <div class="post-comment-icon">
                                            <a href="#" tabindex="0">
                                                0 </a>
                                        </div>
                                    </div>
                                    <div class="post-info equal-elem">
                                        <h2 class="post-title"><a href="#" tabindex="0">We design functional best
                                                furniture</a></h2>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                        quisque litora dapibus primis lacinia
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article
                            class="post-item post-grid rows-space-0 post-186 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-life-style tag-life-style">
                            <div class="post-inner blog-grid">
                                <div class="post-thumb">
                                    <a href="#" tabindex="-1">
                                        <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                            class="img-responsive attachment-370x330 size-370x330" alt="img"
                                            width="370" height="330"> </a>
                                    <a class="datebox" href="#" tabindex="-1">
                                        <span>19</span>
                                        <span>Dec</span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <div class="post-author">
                                            By:<a href="#" tabindex="-1">
                                                admin </a>
                                        </div>
                                        <div class="post-comment-icon">
                                            <a href="#" tabindex="-1">
                                                0 </a>
                                        </div>
                                    </div>
                                    <div class="post-info equal-elem">
                                        <h2 class="post-title"><a href="#" tabindex="-1">The child is swimming with
                                                a buoy</a></h2>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                        quisque litora dapibus primis lacinia
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article
                            class="post-item post-grid rows-space-0 post-183 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion tag-light tag-furniture">
                            <div class="post-inner blog-grid">
                                <div class="post-thumb">
                                    <a href="#" tabindex="-1">
                                        <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                            class="img-responsive attachment-370x330 size-370x330" alt="img"
                                            width="370" height="330"> </a>
                                    <a class="datebox" href="#" tabindex="-1">
                                        <span>19</span>
                                        <span>Dec</span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <div class="post-author">
                                            By:<a href="#" tabindex="-1">
                                                admin </a>
                                        </div>
                                        <div class="post-comment-icon">
                                            <a href="#" tabindex="-1">
                                                0 </a>
                                        </div>
                                    </div>
                                    <div class="post-info equal-elem">
                                        <h2 class="post-title"><a href="#" tabindex="-1">Furniture hiding beside
                                                beige wall</a></h2>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                        quisque litora dapibus primis lacinia
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <a href="#" class="backtotop active">
        <i class="fa fa-angle-double-up"></i>
    </a>
    @endsection

    @section('js-content')
    
    <script>
        renderCart();

        //dimatikan
        function saveFromProduct(elem) {
            var sku = $(elem).data("sku");
            var nama = $(elem).data("nama");
            var qty = 1;
            var harga = $(elem).data("harga");
            var foto = $(elem).data("foto");

            var obj = {
                'sku': sku,
                'nama': nama,
                'qty': qty,
                'harga': harga,
                'foto': foto
            };

            var carts = getCart();


            if (Object.keys(obj).length) {
                var carts = getCart();
                var sku = $(elem).data("sku");
                console.log(sku);

                var cekCart = carts.find(function(item) {
                    return item.sku == sku;
                });

                console.log(cekCart);
                if (cekCart != undefined) {
                    console.log(cekCart.sku);
                    if (cekCart.sku == sku) {
                        var sku = $(elem).data("sku");
                        console.log("Dalam if = " + sku);
                        var storageCart = JSON.parse(localStorage.getItem('carts'));

                        var newCart = [];
                        newCart = storageCart.filter(function(item, index) {
                            return item.sku != sku;
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

        function renderCart() {
            var carts = JSON.parse(localStorage.getItem('carts'));
            $("#shop-cart").empty();
            $("#shop-cart-mobile").empty();
            var totalHarga = 0;
            var totalBrg = 0;
            carts.forEach(function(item, index) {
                var elemen = "<li class='furgan-mini-cart-item mini_cart_item' id='cart-data'>" +
                    "<a href='#' class='remove remove_from_cart_button' onclick='deleteCart(this)' data-id='" + item
                    .cartId + "'>×</a>" +
                    "<a href='#'>" +
                    "<img src='{{ asset('') }}" + item.foto + "'" +
                    "class='attachment-furgan_thumbnail size-furgan_thumbnail'" +
                    "alt='img' width='600' height='778'>" + item.nama + " - " + item.size + "&nbsp;" +
                    "</a>" +
                    "<span class='quantity'>" + item.qty + " × <span" +
                    "class='furgan-Price-amount amount'><span" +
                    "class='furgan-Price-currencySymbol'>Rp. </span>" + item.harga.toString().replace(
                        /(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + "</span></span>" +
                    "</li>";
                $("#shop-cart").append(elemen);
                $("#shop-cart-mobile").append(elemen);

                totalHarga = totalHarga + (parseInt(item.qty, 10) * parseInt(item.harga, 10));
                totalBrg++;
            });
            console.log(totalHarga);
            $("#totalPrice").html(totalHarga.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
            $("#totalPriceMobile").html(totalHarga.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));

            $("#totalCart").html(totalBrg.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
            $("#totalCartMobile").html(totalBrg.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));

        }

        function getCart() {
            var cartRecord = localStorage.getItem("carts");
            var carts = [];
            if (!cartRecord) {
                return carts;
            } else {
                carts = JSON.parse(cartRecord);
                return carts;
            }
        }

        function deleteCart(elem) {
            var sku = $(elem).data("id");
            var storageCart = JSON.parse(localStorage.getItem('carts'));
            console.log(sku);

            var newCart = [];
            newCart = storageCart.filter(function(item, index) {
                return item.cartId != sku;
            });
            console.log(newCart);

            var data = JSON.stringify(newCart);
            localStorage.setItem("carts", data);
            renderCart();
            renderKeranjang();
        }
    </script>

    <script>
        renderKeranjang();

        function renderKeranjang() {
            var carts = JSON.parse(localStorage.getItem('carts'));
            $("#data-cart tbody").empty();
            var totalHarga = 0;
            carts.forEach(function(item, index) {
                console.log(item.foto);
                var totHarga = parseInt(item.qty, 10) * parseInt(item.harga, 10);
                var cartElement = "<tr class='furgan-cart-form__cart-item cart_item'>" +
                    "<td class='product-remove'>" +
                    "<a href='#'" +
                    "class='remove' aria-label='Remove this item'" +
                    "data-product_sku='885B712' onclick='deleteKeranjang(this)' data-id='" + item.cartId +
                    "'>×</a></td>" +
                    "<td class='product-thumbnail'>" +
                    "<a href='#'><img " +
                    "src='{{ asset('') }}" + item.foto + "'" +
                    "class='attachment-furgan_thumbnail size-furgan_thumbnail'" +
                    "alt='img' width='600' height='778'></a></td>" +
                    "<td class='product-name' data-title='Product'>" +
                    "<a href='{{ url('/product/detail/') }}/" + item.id + "'>" + item.nama + " - " + item.size +
                    "</a></td>" +
                    "<td class='product-price' data-title='Price'>" +
                    "<span class='furgan-Price-amount amount'><span" +
                    "class='furgan-Price-currencySymbol'>Rp. </span>" + item.harga.toString().replace(
                        /(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + "</span></td>" +
                    "<td class='product-quantity' data-title='Quantity'>" +
                    "<div class='quantity'>" +
                    "<span class='qty-label'>Quantiy:</span>" +
                    "<div class='control' id='counter'>" +
                    "<a class='btn-number qtyminus quantity-minus' href='#' onclick='updateKeranjangMinus(this)' data-nama='" +
                    item.nama + "' data-harga='" + item.harga + "' data-sku='" + item.sku + "' data-foto='" + item
                    .foto + "' data-id='" + item.id + "' data-size='" + item.size + "' data-cartid='" + item
                    .cartId + "'>-</a>" +
                    "<input type='text'" +
                    "value='" + item.qty + "' title='Qty' id='qty-" + item.cartId +
                    "' class='input-qty input-text qty text' data-step='1' min='1' max='' name='quantity' title='Qty' class='count input-qty input-text qty text' size='4' pattern='[0-9]*' inputmode='numeric'>" +
                    "<a class='btn-number qtyplus quantity-plus' href='#' onclick='updateKeranjangPlus(this)' data-nama='" +
                    item.nama + "' data-harga='" + item.harga + "' data-sku='" + item.sku + "' data-foto='" + item
                    .foto + "' data-id='" + item.id + "' data-size='" + item.size + "' data-cartid='" + item
                    .cartId + "'>+</a>" +
                    "</div>" +
                    "</div>" +
                    "</td>" +
                    "<td class='product-subtotal' data-title='Total'>" +
                    "<span class='furgan-Price-amount amount'><span" +
                    "class='furgan-Price-currencySymbol'>Rp. </span>" + totHarga.toString().replace(
                        /(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + "</span></td>" +
                    "</tr>";

                $("#data-cart tbody").append(cartElement);

                totalHarga = totalHarga + (parseInt(item.qty, 10) * parseInt(item.harga, 10));

            });


            console.log(totalHarga);
            $("#subtotal-price").html(totalHarga.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
            $("#total-price").html(totalHarga.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));

            // $("#totalCart").html(totalBrg);
            // $("#totalCartMobile").html(totalBrg);

        }

        function deleteKeranjang(elem) {
            var sku = $(elem).data("id");
            var storageCart = JSON.parse(localStorage.getItem('carts'));
            console.log(sku);

            var newCart = [];
            newCart = storageCart.filter(function(item, index) {
                return item.cartId != sku;
            });
            console.log(newCart);

            var data = JSON.stringify(newCart);
            localStorage.setItem("carts", data);
            renderKeranjang();
            renderCart();
        }

        function updateKeranjangPlus(elem) {
            var cartid = $(elem).data("cartid");
            var id = $(elem).data("id");
            var size = $(elem).data("size");
            var sku = $(elem).data("sku");
            var nama = $(elem).data("nama");
            var harga = $(elem).data("harga");
            var foto = $(elem).data("foto");
            var qty = document.getElementById("qty-" + cartid).value;
            var totqty = parseInt(qty, 10) + 1;
            console.log(qty + 1);

            var storageCart = JSON.parse(localStorage.getItem('carts'));
            console.log(cartid);

            var obj = {
                'cartId': cartid,
                'id': id,
                'sku': sku,
                'nama': nama,
                'qty': totqty,
                'harga': harga,
                'foto': foto,
                'size': size,
            };

            var newCart = [];
            newCart = storageCart.filter(function(item, index) {
                return item.cartId != cartid;
            });

            console.log(newCart);

            newCart.push(obj);
            var data = JSON.stringify(newCart);
            localStorage.setItem("carts", data);
            renderCart();
            renderKeranjang();
        }

        function updateKeranjangMinus(elem) {
            var cartid = $(elem).data("cartid");
            var id = $(elem).data("id");
            var size = $(elem).data("size");
            var sku = $(elem).data("sku");
            var nama = $(elem).data("nama");
            var harga = $(elem).data("harga");
            var foto = $(elem).data("foto");
            // var param = "qty-"+sku;
            var qty = document.getElementById("qty-" + cartid).value;
            // console.log(param);
            if (qty > 1) {
                var totqty = parseInt(qty, 10) - 1;
                console.log(qty - 1);
            } else {
                var totqty = 1;
                console.log(totqty);
            }


            var storageCart = JSON.parse(localStorage.getItem('carts'));
            console.log(cartid);

            var obj = {
                'cartId': cartid,
                'id': id,
                'sku': sku,
                'nama': nama,
                'qty': totqty,
                'harga': harga,
                'foto': foto,
                'size': size,
            };

            var newCart = [];
            newCart = storageCart.filter(function(item, index) {
                return item.cartId != cartid;
            });

            console.log(newCart);

            newCart.push(obj);
            var data = JSON.stringify(newCart);
            localStorage.setItem("carts", data);
            renderCart();
            renderKeranjang();
        }
    </script>
@endsection