@extends('store.master')

@section('css-content')

<style>
.cart-sticky {
  position: fixed;
  top: 80px;
  right:120px;
  margin: 0;
  width:calc(33.33%);
}

.cart-abs {
  position: absolute;
  bottom: 10px;
  right:10px;
  width:calc(33.33% - 20px);
}
</style>

@endsection

@section('content')
<section class="page-section big-section grey-section">
    <div class="container">
        <div class="row">

            <!-- CART LEFT
            ================================================== -->
            <div class="col-md-7 mb-md-30">

                <!-- CART
                ================================================== -->
                <div class="shopping-cart-table">
                    <div class="clearfix">
                        <h2 class="section-heading mt-0 mb-0">Cart item</h2>
                        <p class="light-text">Lorem ipsum dolor sit adipisicing elit</p>
                    </div>
                    <table class="table font-face1 mt-30 mb-0">
                        <tbody>
                            <tr>
                                <td class="hidden-xs">
                                    <a href=""><img src="images/shop/cart/cart-img1.jpg" alt="" width="60"></a>
                                </td>
                                <td width="40%">
                                    <a href="javascript:void(0)" title="">Beautiful dark blue T-Shirt for man and women</a>
                                </td>
                                <td>
                                    <form class="form">
                                       <input type="number" class="input-sm" style="width: 60px;" min="1" max="100" value="1">
                                    </form>
                                </td>
                                <td>
                                    $139.99
                                </td>
                                <td>
                                    <small><a href="" class="light-text"><i class="fa fa-times"></i> <span class="hidden-xs">Remove</span></a></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="hidden-xs">
                                    <a href=""><img src="images/shop/cart/cart-img2.jpg" alt="" width="60"></a>
                                </td>
                                <td width="40%">
                                    <a href="javascript:void(0)" title="">Extra conform dark red tshirt</a>
                                </td>
                                <td>
                                    <form class="form">
                                       <input type="number" class="input-sm" style="width: 60px;" min="1" max="100" value="1">
                                    </form>
                                </td>
                                <td>
                                    $10.00
                                </td>
                                <td>
                                    <small><a href="" class="light-text"><i class="fa fa-times"></i> <span class="hidden-xs">Remove</span></a></small>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <!-- ADD EXTRA
                ================================================== -->
                <div class="shopping-cart-table grey-section">
                    <div class="clearfix">
                        <h2 class="section-heading mt-0 mb-0">Add Extra</h2>
                        <p class="light-text">Lorem ipsum dolor sit adipisicing elit</p>
                    </div>
                    <table class="table font-face1 mt-30 mb-0">
                        <tbody>
                            <tr>
                                <td class="hidden-xs">
                                    <a href=""><img src="images/shop/cart/shop-widget-1.png" alt="" width="60"></a>
                                </td>
                                <td width="60%">
                                    <a href="javascript:void(0)" title="">Beautiful ipsum dolor white glass 3 pair adipisicing elit pair card</a>
                                </td>
                                <td>
                                    $39.99
                                </td>
                                <td>
                                    <a href=""><i class="fa fa-cart-plus"></i> <small><span class="hidden-xs">Add</span></small></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>

                <!-- CALCULATE SHIPPING
                ================================================== -->
                <div class="shipping-calculator-wrap">
                    <div class="clearfix">
                        <h2 class="section-heading mt-0 mb-0">Calculate Shipping</h2>
                        <p class="light-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

                    </div>
                    <form action="#" class="form mt-30 clearfix">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" placeholder="State" class="full_width" pattern=".{3,100}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="full_width" placeholder="Postcode / Zip" pattern=".{3,100}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select tabindex="-1" class="full_width" name="orderby">
                                            <option value="1" selected="selected">Select country</option>
                                            <option value="2">France</option>
                                            <option value="3">India</option>
                                            <option value="4">UK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a class="btn full-width bg-black white-color" href="javascript:void(0)">Update Cart</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <!-- CART RIGHT
            ================================================== -->
            <div class="col-md-5">
                <!-- CART TOTAL
                ================================================== -->
                <div class="float">
                    <div class="cart_totals clearfix">
                        <div class="clearfix">
                            <h2 class="section-heading mt-0 mb-0 white-color">Cart Total</h2>
                            <p class="light-text">Beautiful ipsum dolor white they wanr</p>
                        </div>
                        <table class="table shopping-cart-table font-face1 mt-30 mb-30">
                            <tbody>
                                <tr>
                                    <td width="80%">
                                        Cart Subtotal
                                    </td>
                                    <td>
                                        <strong>$139.99</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="80%">
                                        Shipping and Handling
                                    </td>
                                    <td>
                                        <strong>$10.99</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="80%">
                                        <strong>Total</strong>
                                    </td>
                                    <td>
                                        <strong>$149.99</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--
                        <div class="cart-message mt-30 mb-30">
                            <form class="form " id="c_form" autocomplete="off">
                                <div class="clearfix">
                                    Message
                                    <textarea name="message" id="message" class="full_width" cols="5" rows="6" placeholder="Any special instructions go here.."></textarea>
                                </div>
                            </form>
                        </div>
                        -->
                        <div class="text-center">
                            <a href="" class="btn full-width bg-white">Proceed to Checkout</a>
                        </div>
                        <div class="text-muted text-center mt-30">
                            <span class="text-muted font-face1 small">We accept payment in multipale ways</span>
                            <img src="images/shop/cart/creditcards-icon-gray.png" alt=""/>
                        </div>
                    </div>
                </div>


                <!-- COUPON DISCOUNT
                ================================================== -->
                <!--
                <div class="cart-coupon mt-20 clearfix">
                    <div class="clearfix">
                        <h2 class="section-heading mt-0 mb-0">Coupon discount</h2>
                        <p class="light-text">Sign up to get updates &amp; discounts!:</p>
                    </div>
                    <form action="#" class="form mt-30 clearfix">

                        <div class="form-group">
                            <input type="text" placeholder="Coupon code" class="coupon-code full_width" pattern=".{3,100}" required="">
                        </div>

                        <button type="submit" class="btn bg-black white-color full-width">Apply Coupon</button>
                    </form>
                </div>
                -->

            </div>

        </div>
    </div>
</section>

<!-- SECTION SUBSCRIBE
================================================== -->

@endsection

@section('js-content')
    <script>
          // variables
            var topPosition = $('.float').offset().top - 10;
            var floatingDivHeight = $('.float').outerHeight();
            var footerFromTop = $('.batas').offset().top;
            var absPosition = footerFromTop - floatingDivHeight - 20;
            var win = $(window);
            var floatingDiv = $('.float');

            win.scroll(function() {
                if (window.matchMedia('(min-width: 768px)').matches) {
                if ((win.scrollTop() > topPosition) && (win.scrollTop() < absPosition)) {
                    floatingDiv.addClass('cart-sticky');


                } else if ((win.scrollTop() > topPosition) && (win.scrollTop() > absPosition)) {
                    floatingDiv.removeClass('cart-sticky');
                    floatingDiv.addClass('cart-abs');

                } else {
                    floatingDiv.removeClass('cart-sticky');
                    floatingDiv.removeClass('cart-abs');
                }
                }
            });
    </script>
@endsection
