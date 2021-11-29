@extends('store.master')

@section('css-content')

@endsection

@section('content')

<section id="about_us" class="page-section big-section grey-section">				
    <div class="container relative">	
        <div class="row">
            
            <!-- SHOP LEFT
            ================================================== -->
            <div class="col-md-7 mb-md-30">
                <!-- SHOP PRODUCT Gallery
                ================================================== -->
                <div class="gallery-wrapper">
                    <div class="product-gallery">	
                        <div class="item">					
                            <img src="images/shop/tshirt_img_back_2.jpg" alt=""/>
                        </div>
                        <div class="item">								
                                
                            <img src="images/shop/tshirt_img_back_3.jpg" alt=""/>	
                        </div>	
                        <div class="item">								
                                            
                            <img src="images/shop/tshirt_img_back_5.jpg" alt=""/>
                        </div>	
                    </div>
                    <div class="slider-navigation-right">
                        <div class="nav-right"></div>
                    </div>
                    <div class="slider-navigation-left">
                        <div class="nav-left"></div>
                    </div>
                </div>	
            </div>
            
            <!-- PRODUCT SUMMARY
            ================================================== -->
            <div class="col-md-4 col-md-offset-1">
                <div class="product-summary">
                    
                    <hgroup class="ps-detail font-face1">
                        <h2 class="heading5  mb-0 mt-0 text-left">T-Shirt product</h2>
                        <p class="light-text">Plain color t-shirt for man</h3>
                        <div class="heading5 mb-20"><del>$30.98</del> $25.99 <span class="small"><small>(75% off)</small></span></div>
                    </hgroup>
                    
                    <div class="font-face1">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <a href="javascript:void(0)"><span class="text-muted">(35 reviews)</span></a>
                    </div>
                    
                    <div class="product-desc mt-20">
                        <p class="light-text">We are dignissim leo sit amet bibendum mauris non ipsum molestie the new Nunc vulputate semper erat, non iaculis sapien congue pharetra non congue.</p>
                    </div>
                    
                    <div class="product-warranty font-face1">
                        <span class="fa fa-shield"></span> 30-Day Guarantee | 1-Year Warranty
                    </div>		
                    
                    <div class="product-count font-face1">
                        <form method="post" action="#" class="form">
                            <div class="form-group"> 
                                <div class="row">
                                    <div class="col-sm-3">
                                        Size
                                    </div>
                                    <div class="col-sm-9">
                                        <select tabindex="-1" name="size" class="full_width">
                                            <option value="menu_order">Size</option>
                                            <option value="popularity" selected="selected">Small</option>
                                            <option value="rating">Large</option>
                                            <option value="date">Medium</option>
                                            <option value="price">Extra large</option>											
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="row">
                                    <div class="col-sm-3">
                                        Quantity 
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="number" class="input_default full_width" min="1" max="100" value="1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="row">
                                    <div class="col-sm-3">
                                        Color
                                    </div>
                                    <div class="col-sm-9">
                                        <select tabindex="-1" name="color" class="full_width">
                                            <option value="menu_order">Color</option>
                                            <option value="popularity" selected="selected">Red</option>
                                            <option value="rating">Green</option>
                                            <option value="date">Blue</option>
                                            <option value="price">Black</option>											
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <a href="javascript:void(0)" class="btn full-width bg-black">Add to cart</a>
                                <a href="page-shop-cart.html" class="btn full-width bg-white">Checkout</a>
                            </div>
                        </form>										
                    </div>
                    
                    <div class="post-meta-section font-face1 nomargin clearfix">								
                        <div class="float-left post-meta-holder nomargin">TAGS &mdash; <a href="javascript:void(0)">T-Shirt</a> | <a href="javascript:void(0)">Green</a> | <a href="javascript:void(0)">Small</a></div>
                        <div class="float-right">											
                            <div class="float-left post-meta-holder"><a href="javascript:void(0)"><i class="fa fa-share-alt"></i> Share</a></div>
                        </div>													
                    </div>
                    
                </div>
            
            </div>
        
        </div>						
    </div>
</section>

<section class="page-section big-section">	
    <div class="container">		
        <div class="row">
            <div class="col-md-8 mb-md-30">
                <ul class="nav nav-tabs heading6  font-face1 fw900">
                    <li class="active"><a data-toggle="tab" href="#Description">Description</a></li>
                    <li><a data-toggle="tab" href="#Material">Material</a></li>
                    <li><a data-toggle="tab" href="#Specifications">Specifications</a></li>
                    <li><a data-toggle="tab" href="#Shipping">Shipping</a></li>	
                    <li><a data-toggle="tab" href="#Reviews">Reviews <small>(3)</small></a></li>	
                </ul>

                <div class="tab-content mt-40 mb-20">
                    <div id="Description" class="tab-pane fade in active">
                        <p class="light-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie, sagittis elit ac, vulputate odio. Fusce quam augue, gravida tincidunt dui nec, tempor iaculis justo. Aliquam tortor leo, pharetra non congue sit amet, bibendum sit amet enim. Nullam sit amet malesuada justo. </p>
                        <p class="light-text"> Nunc vulputate semper erat, non iaculis sapien congue sit amet. Duis non nulla volutpat, dignissim leo sit amet, porta nunc. Donec placerat fermentum metus ac scelerisque.  </p>
                        <ul class="plan-feature center-xs">
                            <li>&check; &nbsp; Add aliquam congue for turpis use</li>
                            <li>&check; &nbsp; Accumsan sed venenatis</li>
                            <li>&check; &nbsp; 100% original</li>
                            <li>&check; &nbsp; Lorem congue turpis for turpis use</li>
                            <li>&check; &nbsp; Add aliquam congue accumsan sed venenatis volutpat</li>
                            <li>&check; &nbsp; Donec placerat fermentum metus ac scelerisque</li>
                        </ul>
                        <p class="light-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie, sagittis elit ac, vulputate odio. Fusce quam augue, gravida tincidunt dui nec, tempor iaculis justo. Aliquam tortor leo, pharetra non congue sit amet, bibendum sit amet enim. Nullam sit amet malesuada justo. </p>
                    </div>
                    <div id="Material" class="tab-pane fade">
                        <div class="table-responsive"> 
                            <table class="table"> 
                                <thead class="font-face1"> 
                                    <tr> 
                                        <th>Heading one</th> 
                                        <th>Perameter</th> 
                                        <th>Perameter</th> 
                                        <th>Perameter</th> 
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr> 
                                        <td>Lorem congue turpis for turpis use</td>
                                        <td>Suspendisse potenti.</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>Suspendisse potenti.</td>
                                    </tr> 
                                    <tr> 
                                        <td>Aliquam tortor leo</td>
                                        <td>Donec placerat fermentum metus ac scelerisque</td>
                                        <td>Aliquam tortor leo</td>
                                        <td>Donec eros neque</td>
                                    </tr>
                                    <tr> 
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>Suspendisse potenti.</td>
                                        <td>Lorem congue turpis for turpis use</td>
                                        <td>Add aliquam congue for turpis use</td>
                                    </tr> 
                                    <tr> 
                                        <td>Add aliquam congue for turpis use</td>
                                        <td>Donec placerat fermentum metus ac scelerisque</td>
                                        <td>Aliquam tortor leo</td>
                                        <td>Donec eros neque</td>
                                    </tr>
                                </tbody> 
                            </table> 
                        </div>
                    </div>	
                    <div id="Specifications" class="tab-pane fade">									
                        <ul class="plan-feature center-xs">
                            <li>&check; &nbsp; Add aliquam congue for turpis use sed venenatis aliquam congue</li>
                            <li>&check; &nbsp; Accumsan sed venenatis</li>
                            <li>&check; &nbsp; 100% original</li>
                            <li>&check; &nbsp; Lorem congue turpis for turpis use</li>
                            <li>&check; &nbsp; Add aliquam congue accumsan sed venenatis volutpat</li>
                            <li>&check; &nbsp; Donec placerat fermentum metus ac scelerisque</li>
                            <li>&check; &nbsp; Accumsan sed venenatis</li>
                            <li>&check; &nbsp; Add aliquam congue for turpis use</li>
                        </ul>
                    </div>
                    <div id="Shipping" class="tab-pane fade light-text">																		
                        <p>NATIONAL ORDER<br/>
                        - We ship to your door free of charge!<br/>
                        - All orders are dispatched with our courier; Dawn Wing and arrive within 2-4 working days provided that the product is in stock.<br/>
                        - Every order has a tracking number, which can be used to trace your parcel online</p>
                        <p>INTERNATIONAL ORDER<br/>
                        - International orders ship via Registered Mail and arrive within 7-21 days, orders include tracking information and can be traced online<br/>
                        - All orders are dispatched with our courier; Dawn Wing and arrive within 8-10 working days provided that the product is in stock.<br/>
                        - Every order has a tracking number, which can be used to trace your parcel online</p>
                        
                    </div>
                    <div id="Reviews" class="tab-pane fade">									
                        <ul class="comments-list clearfix">
                            <li class="comment">
                                <div class="comment-body clearfix">
                                    <div class="">												
                                        <div class="comment-user font-face1 inline-container">
                                            <a href="javascript:void(0)">Emma Johnson</a>
                                        </div>
                                        <div class="inline-container">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="comment-date font-face1 inline-container">
                                            <span>&nbsp;March 29, 2016 at 7:22 PM</span>
                                        </div>																					
                                    </div>										
                                    <div class="comment-inner light-text">      
                                        Maecenas sodales arcu est. Ut at nibh velit. Aenean tristique mauris vel eros aliquam sollicitudin. Cras tempus iaculis nisl nec adipiscing.
                                    </div>  
                                </div>
                            </li>
                            
                            <li class="comment">
                                <div class="comment-body clearfix">
                                    <div class="">												
                                        <div class="comment-user font-face1 inline-container">
                                            <a href="javascript:void(0)">Emma Johnson</a>
                                        </div>
                                        <div class="inline-container">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="comment-date font-face1 inline-container">
                                            <span>&nbsp;March 29, 2016 at 7:22 PM</span>
                                        </div>																					
                                    </div>										
                                    <div class="comment-inner light-text">      
                                        Maecenas sodales arcu est. Ut at nibh velit. Aenean tristique mauris vel eros aliquam sollicitudin. Cras tempus iaculis nisl nec adipiscing.
                                    </div>  
                                </div> 
                            </li>
                            
                            <li class="comment">
                                <div class="comment-body clearfix">
                                    <div class="">												
                                        <div class="comment-user font-face1 inline-container">
                                            <a href="javascript:void(0)">Emma Johnson</a>
                                        </div>
                                        <div class="inline-container">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="comment-date font-face1 inline-container">
                                            <span>&nbsp;March 29, 2016 at 7:22 PM</span>
                                        </div>																					
                                    </div>										
                                    <div class="comment-inner light-text">      
                                        Maecenas sodales arcu est. Ut at nibh velit. Aenean tristique mauris vel eros aliquam sollicitudin. Cras tempus iaculis nisl nec adipiscing.
                                    </div>  
                                </div> 
                            </li>
                            
                        </ul>
                        <!--POST LEAVE COMMENT-->
                        <div class="comments-heading text-center mt-100 mb-60 md-mt-60 md-mb-40">
                            <hgroup>
                                <h2 class="font-face1 section-heading">Post review</h2>
                            </hgroup>									
                        </div>
                        
                        <form method="post" action="#" id="form" role="form" class="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <input type="text" name="name" id="name" class="full_width" placeholder="Name *" maxlength="100" required="">										
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="full_width" placeholder="Email *" maxlength="100" required="">									
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <!-- Website -->
                                        <input type="text" name="website" id="website" class="full_width" placeholder="Website" maxlength="100" required="">										
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="text" id="text" class="full_width" rows="6" placeholder="Comment" maxlength="400"></textarea>										
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn bg-black">
                                        Submit review
                                    </button>
                                </div>	
                            </div>		
                        </form>
                        <!--END POST LEAVE COMMENT-->
                    </div>	
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <div class="box-layout text-center">		
                    <object data="assets/themeisle-icons-graphics/SVG/008-design.svg" type="image/svg+xml" class="icon-media anim_feature_icon"></object>
                    <h4 class="font-face1 heading6 mb-20">24/7 Free support</h4>
                    <span class="light-text">Lorem ipsum dolor sit amet, and the consectetur adipiscing elit a hendrerit leo tristique vitae. And onsectetur adipiscing elit.</span>
                </div>	
                
                <div class="box-layout text-center">
                    <object data="assets/themeisle-icons-graphics/SVG/008-design.svg" type="image/svg+xml" class="icon-media anim_feature_icon"></object>
                    <h4 class="font-face1 heading6 mb-20">Fully responsive</h4>
                    <span class="light-text">Lorem ipsum dolor sit amet, and the consectetur adipiscing elit a hendrerit leo tristique vitae. And onsectetur adipiscing elit.</span>
                </div>	
            </div>
        </div>
    </div>
</section>

<!-- SECTION SHOP
================================================== -->
<section id="shop" class="page-section grey-section big-section">	
    <div class="container">
        <div class="row">														
            <div class="col-md-6 col-md-offset-3 mb-60 mb-sm-40 text-center">
                <h2 class="font-face1 section-heading">Related Products</h2>
                <p class="light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit liquam hendrerit lorem at elit facilisis rutrum.</p>								
            </div>							
        </div>	
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a class="shop_image shop-image-hover" href="page-shop-product-detail.html">
                    <figure>
                        <img alt="" src="images/shop/shop-img1-front.jpg">
                        <img alt="" src="images/shop/shop-img2-back.jpg">
                    </figure>																		
                </a>
                <header class="shop-item-detail font-face1 text-center">
                  <h2 class="heading6 mt-0"><a href="page-shop-product-detail.html" class="light-text">Quarda Dress</a></h2>
                  <a class="heading6" href="page-shop-product-detail.html">$319.00</a>									  
                </header>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a class="shop_image shop-image-hover" href="page-shop-product-detail.html">
                    <figure>
                        <img alt="" src="images/shop/shop-img2-front.jpg">
                        <img alt="" src="images/shop/shop-img2-back.jpg">
                    </figure>
                </a>
                <header class="shop-item-detail font-face1 text-center">
                  <h2 class="heading6 mt-0"><a href="page-shop-product-detail.html" class="light-text">Rimond black</a></h2>
                  <a class="heading6" href="page-shop-product-detail.html">$119.00</a>									  
                </header>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a class="shop_image shop-image-hover" href="page-shop-product-detail.html">
                    <figure>
                        <img alt="" src="images/shop/shop-img3-front.jpg">
                        <img alt="" src="images/shop/shop-img3-back.jpg">
                    </figure>
                </a>
                <header class="shop-item-detail font-face1 text-center">
                  <h2 class="heading6 mt-0"><a href="page-shop-product-detail.html" class="light-text">Gualiya dress</a></h2>
                  <a class="heading6" href="page-shop-product-detail.html">$320.00</a>									  
                </header>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a class="shop_image shop-image-hover" href="page-shop-product-detail.html">
                    <figure>
                        <img alt="" src="images/shop/shop-img4-front.jpg">
                        <img alt="" src="images/shop/shop-img3-back.jpg">
                    </figure>
                </a>
                <header class="shop-item-detail font-face1 text-center">
                  <h2 class="heading6 mt-0"><a href="page-shop-product-detail.html" class="light-text">Miloni Nano dress</a></h2>
                  <a class="heading6" href="page-shop-product-detail.html">$320.00</a>									  
                </header>
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

@section('css-section')
    
@endsection