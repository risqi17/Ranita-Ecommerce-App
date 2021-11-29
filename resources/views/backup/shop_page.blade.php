@extends('store.master')

@section('css-content')

@endsection

@section('content')
<section class="page-section grey-section innerpage-heading-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-heading">
                    <h1 class="font-face1 heading3 mb-10">Shop</h1>
                    <h2 class="font-face1 heading6 light-text text-left mt-0 mb-0">See our beautiful collections</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="breadcrumbs text-right mt-20">
                    <a href="javascript:void(0)">Home</a>&nbsp;/&nbsp;<a href="javascript:void(0)">Innerpage</a>&nbsp;/&nbsp;<span>Page</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION ABOUT
================================================== 	-->
<section class="page-section big-section">
    <div class="container relative">
        <div class="row">

            <!-- SHOP LEFT
            ================================================== -->
            <div class="col-sm-8">
                <!-- SHOP Filter
                ================================================== -->
                <div class="row mb-60 mb-sm-40">
                    <div class="col-sm-6 center-xs">
                        <div class="uppercase text-muted"><small>Showing 1-12 of 23 results</small></div>
                    </div>
                    <div class="col-sm-6 text-right center-xs">
                        <form class="form" method="get">
                            <select tabindex="-1" name="orderby">
                                <option value="menu_order">Default sorting</option>
                                <option value="popularity" selected="selected">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>
                    </div>
                </div>

                <!-- SHOP ITEM
                ================================================== -->
                <div class="row multi-columns-row">

                    <div class="col-md-6 mb-20">
                        <a class="shop_image shop-image-hover" href="javascript:void(0)">
                            <figure>
                                <img alt="" src="{{ asset('libs/img/mahar1.png') }}">
                                <img alt="" src="{{ asset('libs/img/mahar2.png') }}">
                            </figure>
                        </a>
                        <header class="shop-item-detail font-face1 text-center">
                          <h2 class="heading6 mt-0"><a href="javascript:void(0)" class="light-text">Quarda Dress</a></h2>
                          <a class="heading6" href="javascript:void(0)">$319.00</a>
                        </header>
                    </div>
                    <div class="col-md-6 mb-20">
                        <a class="shop_image shop-image-hover" href="javascript:void(0)">
                            <figure>
                                <img alt="" src="images/shop/shop-img2-front.jpg">
                                <img alt="" src="images/shop/shop-img2-back.jpg">
                            </figure>
                        </a>
                        <header class="shop-item-detail font-face1 text-center">
                          <h2 class="heading6 mt-0"><a href="javascript:void(0)" class="light-text">Rimond black</a></h2>
                          <a class="heading6" href="javascript:void(0)">$119.00</a>
                        </header>
                    </div>
                    <div class="col-md-6 mb-20">
                        <a class="shop_image shop-image-hover" href="javascript:void(0)">
                            <figure>
                                <img alt="" src="images/shop/shop-img3-front.jpg">
                                <img alt="" src="images/shop/shop-img3-back.jpg">
                            </figure>
                        </a>
                        <header class="shop-item-detail font-face1 text-center">
                          <h2 class="heading6 mt-0"><a href="javascript:void(0)" class="light-text">Gualiya dress</a></h2>
                          <a class="heading6" href="javascript:void(0)">$320.00</a>
                        </header>
                    </div>
                    <div class="col-md-6 mb-20">
                        <a class="shop_image shop-image-hover" href="javascript:void(0)">
                            <figure>
                                <img alt="" src="images/shop/shop-img4-front.jpg">
                                <img alt="" src="images/shop/shop-img4-back.jpg">
                            </figure>
                        </a>
                        <header class="shop-item-detail font-face1 text-center">
                          <h2 class="heading6 mt-0"><a href="javascript:void(0)" class="light-text">Miloni Nano dress</a></h2>
                          <a class="heading6" href="javascript:void(0)">$320.00</a>
                        </header>
                    </div>
                    <div class="col-md-6 mb-20">
                        <a class="shop_image shop-image-hover" href="javascript:void(0)">
                            <figure>
                                <img alt="" src="images/shop/shop-img3-front.jpg">
                                <img alt="" src="images/shop/shop-img3-back.jpg">
                            </figure>
                        </a>
                        <header class="shop-item-detail font-face1 text-center">
                          <h2 class="heading6 mt-0"><a href="javascript:void(0)" class="light-text">Gualiya dress</a></h2>
                          <a class="heading6" href="javascript:void(0)">$320.00</a>
                        </header>
                    </div>
                    <div class="col-md-6 mb-20">
                        <a class="shop_image shop-image-hover" href="javascript:void(0)">
                            <figure>
                                <img alt="" src="images/shop/shop-img4-front.jpg">
                                <img alt="" src="images/shop/shop-img4-back.jpg">
                            </figure>
                        </a>
                        <header class="shop-item-detail font-face1 text-center">
                          <h2 class="heading6 mt-0"><a href="javascript:void(0)" class="light-text">Miloni Nano dress</a></h2>
                          <a class="heading6" href="javascript:void(0)">$320.00</a>
                        </header>
                    </div>
                    <div class="col-md-6 mb-20">
                        <a class="shop_image shop-image-hover" href="javascript:void(0)">
                            <figure>
                                <img alt="" src="images/shop/shop-img2-front.jpg">
                                <img alt="" src="images/shop/shop-img2-back.jpg">
                            </figure>
                        </a>
                        <header class="shop-item-detail font-face1 text-center">
                          <h2 class="heading6 mt-0"><a href="javascript:void(0)" class="light-text">Rimond black</a></h2>
                          <a class="heading6" href="javascript:void(0)">$119.00</a>
                        </header>
                    </div>
                    <div class="col-md-6 mb-20">
                        <a class="shop_image shop-image-hover" href="javascript:void(0)">
                            <figure>
                                <img alt="" src="images/shop/shop-img1-front.jpg">
                                <img alt="" src="images/shop/shop-img1-back.jpg">
                            </figure>
                        </a>
                        <header class="shop-item-detail font-face1 text-center">
                          <h2 class="heading6 mt-0"><a href="javascript:void(0)" class="light-text">Quarda Dress</a></h2>
                          <a class="heading6" href="javascript:void(0)">$319.00</a>
                        </header>
                    </div>

                </div>

                <!-- SHOP PAGINATION
                ================================================== -->
                <nav class="page-pagination mt-60">
                    <ul class="page-numbers">
                        <li><span class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="javascript:void(0)">2</a></li>
                        <li><a class="page-numbers" href="javascript:void(0)">3</a></li>
                        <li><a class="page-numbers" href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>

            <!-- SHOP RIGHT SIDE WIDGET
            ================================================== -->
            <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-4 sidebar">
                <!-- widget search -->
                <div class="widget clearfix">
                    <form class="form-inline form" role="form">
                        <div class="search-wrap clearfix">
                            <button class="search-button animate" type="submit" title="Start Search">
                                <i class="lnr lnr-magnifier"></i>
                            </button>
                            <input type="text" class="form-control search-field" placeholder="Search...">
                        </div>
                    </form>
                </div>

                <!-- widget cart -->
                <div class="widget">
                    <h5 class="widget-title font-face1">Cart</h5>
                    <div class="widget-body font-face1">
                        <ul class="clearlist widget-cart">

                            <!-- Preview item -->
                            <li class="clearfix">
                                <div class="widget-posts-img">
                                    <a href="javascript:void(0)"><img class="widget-cart-img" alt="" src="{{ asset('libs/img/mahar2.png') }}"></a>
                                </div>
                                <div class="widget-cart-descr">
                                    <a title="" href="javascript:void(0)">Polo hand bag with argyle print</a>
                                    <div>
                                        1 x $25.99
                                    </div>
                                    <small>
                                        <a href=""><i class="fa fa-times"></i> Remove</a>
                                    </small>
                                </div>
                            </li>
                            <!-- End Preview item -->
                             <!-- Preview item -->
                            <li class="clearfix">
                                <div class="widget-posts-img">
                                    <a href="javascript:void(0)"><img class="widget-cart-img" alt="" src="{{ asset('libs/img/mahar1.png') }}"></a>
                                </div>
                                <div class="widget-posts-descr">
                                    <a title="" href="javascript:void(0)">Cemera with cover and gift pack</a>
                                    <div>
                                        1 x $30.00
                                    </div>
                                    <small>
                                        <a href=""><i class="fa fa-times"></i> Remove</a>
                                    </small>
                                </div>
                            </li>
                            <!-- End Preview item -->

                        </ul>
                        <div class="clearfix mt-20">
                            <div class="float-left">
                                Subtotal
                            </div>
                            <div class="float-right">
                                <strong>$35.00</strong>
                            </div>
                        </div>
                        <hr/>
                        <div class="clearfix mt-30">
                            <a class="btn small bg-black" href="javascript:void(0)">View Cart</a>
                            <span class="btn_seperator"></span>
                            <a class="btn small bg-black" href="javascript:void(0)">Checkout</a>
                        </div>
                    </div>
                </div>


                <!-- widget Category -->
                <div class="widget clearfix">
                    <h5 class="widget-title font-face1">Category</h5>
                    <div class="widget-body font-face1">
                        <ul class="listmenu widget-menu">
                            <li>
                                &check; <a href="javascript:void(0)" title="">Apparel</a>
                                <small>
                                    &lpar; 7 &rpar;
                                </small>
                            </li>
                            <li>
                                &check; <a href="javascript:void(0)" title="" >Bags</a>
                                <small>
                                    &lpar; 15 &rpar;
                                </small>
                            </li>
                            <li>
                                &check; <a href="javascript:void(0)" title="" >T-Shirt</a>
                                <small>
                                    &lpar; 15 &rpar;
                                </small>
                            </li>
                            <li>
                                &check; <a href="javascript:void(0)" title="" >Cover</a>
                                <small>
                                    &lpar; 7 &rpar;
                                </small>
                            </li>
                            <li>
                                &check; <a href="javascript:void(0)" title="" >Photography</a>
                                <small>
                                    &lpar; 24 &rpar;
                                </small>
                            </li>
                            <li>
                                &check; <a href="javascript:void(0)" title="">Wallets</a>
                                <small>
                                    &lpar; 24 &rpar;
                                </small>
                            </li>
                            <li>
                                &check; <a href="javascript:void(0)" title="">Other</a>
                                <small>
                                    &lpar; 210 &rpar;
                                </small>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- widget Tag -->
                <div class="widget clearfix">
                    <h5 class="widget-title font-face1">Tag</h5>
                    <div class="widget-body font-face1 clearfix">
                        <div class="tags ">
                            <a href="">Digital</a>
                            <a href="">Portfolio</a>
                            <a href="">Design</a>
                            <a href="">Pride</a>
                            <a href="">Theme</a>
                            <a href="">Ultimate</a>
                            <a href="">Web</a>
                            <a href="">Personal</a>
                        </div>
                    </div>
                </div>

                <!-- widget best seller -->
                <div class="widget">
                    <h5 class="widget-title font-face1">Best Sellers</h5>
                    <div class="widget-body font-face1">
                        <ul class="clearlist widget-cart">
                            <!-- Preview item -->
                            <li class="clearfix">
                                <div class="widget-posts-img">
                                    <a href="javascript:void(0)"><img class="widget-cart-img" alt="" src="{{ asset('libs/img/mahar2.png') }}"></a>
                                </div>
                                <div class="widget-cart-descr">
                                    <a title="" href="javascript:void(0)">Gents White T-Shirt</a>
                                    <div>$25.99</div>
                                    <div class="small">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </li>
                            <!-- End Preview item -->
                            <!-- Preview item -->
                            <li class="clearfix">
                                <div class="widget-posts-img">
                                    <a href="javascript:void(0)"><img class="widget-cart-img" alt="" src="images/shop/cart/shop-widget-1.png"></a>
                                </div>
                                <div class="widget-posts-descr">
                                    <a title="" href="javascript:void(0)">Unix WordPress White T-Shirt</a>
                                    <div>$30.00</div>
                                    <div class="small">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </li>
                            <!-- End Preview item -->
                            <!-- Preview item -->
                            <li class="clearfix">
                                <div class="widget-posts-img">
                                    <a href="javascript:void(0)"><img class="widget-cart-img" alt="" src="images/shop/cart/cart-img2.jpg"></a>
                                </div>
                                <div class="widget-posts-descr">
                                    <a title="" href="javascript:void(0)">Gents White Superpowers T-Shirt</a>
                                    <div>$50.00</div>
                                    <div class="small">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </li>
                            <!-- End Preview item -->
                            <!-- Preview item -->
                            <li class="clearfix">
                                <div class="widget-posts-img">
                                    <a href="javascript:void(0)"><img class="widget-cart-img" alt="" src="images/shop/cart/cart-img3.jpg"></a>
                                </div>
                                <div class="widget-posts-descr">
                                    <a title="" href="javascript:void(0)">AVOCA Ventures Mug</a>
                                    <div>$130.00</div>
                                    <div class="small">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </li>
                            <!-- End Preview item -->
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- SECTION SUBSCRIBE
================================================== -->
<section  class="page-section subscribe-section small-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="form-subscribe mb-50 mb-sm-0">
                    <div class="col-sm-6 mb-sm-40">
                        <h2 class="heading5 mt-0 font-face1 white-color fw700 mb-0" >Subscribe to get the best UX updates sent once a week.</h2>
                    </div>
                    <div class="col-sm-6">
                        <form class="form-inline" id="mailchimp" action="https://vibranttheme.us19.list-manage.com/subscribe/post-json?c=?" method="GET">
                            <input type="hidden" name="u" value="1f9b0ff49f0db21af97f0f66d">
                            <input type="hidden" name="id" value="ba6257d10a">
                            <div class="form-group">
                                <input type="email" required placeholder="Your Email..." class="email form-control" name="EMAIL">
                                <a class="btn btn-subscribe">Subscribe</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="subscribe-result"></div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js-content')

@endsection