<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Page Title -->
		<title>LVMCH - Ranita Fashion Store</title>

		<!-- Page header -->
		<meta charset="utf-8"/>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="author" content=""/>
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<meta name="viewport" content="width=device-width"/>
		<!-- CSS -->
	    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/padding-margin.css') }}"/>

        @yield('css-content')
		<!-- Favicons -->
		<link rel="shortcut icon" href="favicon.png">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	</head>
	<body class="content-animate">

		<!-- PRELOADER
		==================================================-->
		<div class="page-loader">
			<div class="loader-area"></div><div class="loader font-face1">LVMCH
			</div>
		</div>

		<!-- PAGE
		==================================================-->
		<div id="top" class="page">

			<!-- Navigation panel
			================================================== -->
			<nav class="main-nav sticky">
					<div class="full-wrapper relative clearfix">

						<!-- Logo -->
						<div class="header-logo-wrap">
							<a href="index.html" class="logo">
								<img src="images/logo-black.png" width="145" height="40" alt="" />
							</a>
						</div>
						<!-- Mobile nav bars -->
						<div class="mobile-nav">
							<i class="fa lnr lnr-menu"></i>
						</div>

						<!-- Main Menu -->
						<div class="nav-wrapper large-nav">
							<ul class="clearlist local-scroll">

								<!-- Multiple column menu example -->
								<li>
									<a href="#top" class="active">Home</a>

                                </li>
                                <li><a class="menu-down" href="javascript:void(0)">Produk <i class="fa fa-angle-down"></i></a>
									<!-- Sub -->
									<ul class="nav-sub to-left">
										<li><a href="javascript:void(0)" class="menu-down">Mahar <i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="javascript:void(0)" class="menu-down">Dress <i class="fa fa-angle-down"></i></a></li>

									</ul>
									<!-- End Sub -->
								</li>
								<!-- End Multiple column menu example -->
								<!-- Sub menu Example -->

								<!-- End Sub menu Example -->
                                <li><a href="#our_services">Cara Pembelian</a></li>
                                <li><a href="https://ranita.id" target="_blank">Blog</a></li>
                                <li>
									<a href="javascript:void(0)" class="menu-down">About <i class="fa fa-angle-down"></i></a>
								</li>

								<li><a href="javascript:void(0)" class="border-menu ">r</a></li>
								<li class="nomargin"><a href="javascript:void(0)" class="border-menu ">n</a></li>
								<!-- Cart -->
								<li class="nomargin">
									<a href="page-shop-cart.html" class="border-menu"><img src="{{ asset('assets/images/cart-icon.png') }}" class="desktop-icon" alt=""/><img src="images/cart-icon-mobile.png" class="mobile-icon" alt=""/></a>
									<span class="cart-label fw500">2</span>
								</li>
								<!-- End Cart -->

								</ul>
						</div>
						<!-- End Main Menu -->


					</div>
				</nav>
				<!-- End Navigation panel -->

			<!-- Main Content
			==================================================-->
			<main class="cd-main-content">

				<!-- HEADER
                ================================================== -->

				@yield('content')


                <div class="batas">
                    <section  class="page-section subscribe-section small-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="form-subscribe mb-50 mb-sm-0">
                                        <div class="col-sm-6 mb-sm-40">
                                            <h2 class="heading5 mt-0 font-face1 white-color fw700 mb-0" >Langganan sekarang untuk mendapatkan info terbaru dari kami.</h2>
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
                </div>
				<hr class="nomargin nopadding"/>

				<!-- FOOTER
				================================================== -->
				<section id="footer" class="page-section">
					<footer id="footer-section" class="page-section pt-30 pb-30 center-xs">
						<div class="copyright fw300 mb-sm-10"><span>&copy; ranita 2020 </span></div>
						<!-- ACROLL TO TOP-->
						<div class="top-button"><h5>Top</h5><div class="line"></div></div>
					</footer>
				</section>

				</main>

		</div>

		<!-- JAVASCRIPT
		==================================================-->
		<script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>

		<script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.localScroll.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.viewport.mini.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.fitvids.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.parallax-1.1.3.js') }}"></script>
		<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('assets/js/slick.min.js') }}"></script>
		<script src="{{ asset('assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('assets/js/script.js') }}"></script>
        <script src="{{ asset('assets/js/text-slider.js') }}"></script>

        @yield('js-content')
	</body>
</html>
