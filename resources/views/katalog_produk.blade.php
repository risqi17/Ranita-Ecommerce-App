<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Admin, Dashboard, Bootstrap" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>rast - rise and accomplish determination</title>


    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('libs/md-fonts/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('libs/css/animate.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('libs/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/css/owl.theme.default.min.css') }}">
     <!-- jquery-loading -->
     <link rel="stylesheet" href="{{ asset('libs/css/jquery.loading.min.css') }}">

    <!-- octadmin main style -->
    <link id="pageStyle" rel="stylesheet" href="{{ asset('libs/css/style-xing.css') }}">
    <link id="pageStyle" rel="stylesheet" href="{{ asset('libs/css/custom.css') }}">
</head>

<body>
    
    <div class="container-fluid">

        <section class="special-area bg-white" id="produk">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Heading Area -->
                        <div class="section-heading text-center">
                            <h3>Pick The One You Like</h3>
                            <p class="text-center">The Simplest and Premium, desain simple dengan kualitas premium dapatkan sekarang.</p>
                            <div class="line-shape"></div>
                        </div>
                    </div>
                </div>
                <div class="section-heading text-center">
                    <h5>Popular Products</h5>
                    <p class="text-center text-theme">Buruan Ambil Sekarang Juga Guys</p>
                </div>
                <div class="row">
                    <!-- Single Special Area -->

                    <div class="col-12 col-md-4">
                        <div class="card text-center wow fadeInUp" data-wow-delay="0.4s">
                            <img class="card-img-top" id="salesDashboard" src="{{ asset('libs/img/hijab1.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="text-theme">Sales Dashboard</h6>
                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional
                                    quickly and easily</p>

                                <div class="text-right">

                                    <a href="contents/dashboards/dashboard-sales.html" class="btn btn-theme btn-round">Detail</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Single Special Area -->
                    <div class="col-12 col-md-4">
                        <div class="card text-center wow fadeInUp" data-wow-delay="0.4s">
                            <img class="card-img-top" id="propertyDashboard" src="{{ asset('libs/img/hijab2.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="single-icon">
                                    <i class="ti-ruler-pencil" aria-hidden="true"></i>
                                </div>
                                <h6 class="text-theme">Property Dashboard</h6>
                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional
                                    quickly and easily</p>

                                <div class="text-right">
                                    <a href="contents/dashboards/dashboard-property.html" class="btn btn-theme btn-round">Detail</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Single Special Area -->
                    <div class="col-12 col-md-4">
                        <div class="card text-center wow fadeInUp" data-wow-delay="0.4s">
                            <img class="card-img-top" id="pmDashboard" src="{{ asset('libs/img/hijab3.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="single-icon">
                                    <i class="ti-ruler-pencil" aria-hidden="true"></i>
                                </div>
                                <h6 class="text-theme">Project Management Dashboard</h6>
                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional
                                    quickly and easily</p>
                                <div class="text-right">
                                    <a href="contents/dashboards/dashboard-project-management.html" class="btn btn-theme btn-round">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <br/><br/>
                <div class="section-heading text-center">
                        <h5>New Coming</h5>
                        <p class="text-center text-theme">Following New Style</p>
                    </div>
                <div class="row">
                    <!-- Single Special Area -->
                    <div class="col-12 col-md-4">
                        <div class="card text-center wow fadeInUp" data-wow-delay="0.4s">
                            <img class="card-img-top" id="calendar" src="{{ asset('libs/img/mahar1.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="single-icon">
                                    <i class="ti-ruler-pencil" aria-hidden="true"></i>
                                </div>
                                <h6 class="text-theme">Calendar App</h6>
                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional
                                    quickly and easily</p>

                                <div class="text-right">
                                    <a href="contents/apps/apps-calendar.html" class="btn btn-theme btn-round">Detail</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Single Special Area -->
                    <div class="col-12 col-md-4">
                        <div class="card text-center wow fadeInUp" data-wow-delay="0.4s">
                            <img class="card-img-top" id="mailbox" src="{{ asset('libs/img/quil2.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="single-icon">
                                    <i class="ti-ruler-pencil" aria-hidden="true"></i>
                                </div>
                                <h6 class="text-theme">Mail App</h6>
                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional
                                    quickly and easily</p>

                                <div class="text-right">
                                    <a href="contents/apps/apps-mail.html" class="btn btn-theme btn-round">Detail</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Single Special Area -->
                    <div class="col-12 col-md-4">
                        <div class="card text-center wow fadeInUp" data-wow-delay="0.4s">
                            <img class="card-img-top" id="directMessage" src="{{ asset('libs/img/mahar3.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="single-icon">
                                    <i class="ti-ruler-pencil" aria-hidden="true"></i>
                                </div>
                                <h6 class="text-theme">Direct Message App</h6>
                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional
                                    quickly and easily</p>
                                <div class="text-right">
                                    <a href="contents/apps/apps-message.html" class="btn btn-theme btn-round">Detail</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Single Special Area -->

                    </div>
                    <!-- end row -->
                    <br/><br/>
                    <div class="section-heading text-center" id="blog">
                        <h5>Blog</h5>
                        <p class="text-center text-theme">Just Reading About Us</p>
                    </div>
                    <div class="row">
                    <!-- Single Special Area -->
                    <div class="col-12 col-md-4">
                        <div class="card text-center wow fadeInUp" data-wow-delay="0.4s">
                            <img class="card-img-top" id="sidebarDark" src="{{ asset('libs/img/quil1.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="single-icon">
                                    <i class="ti-ruler-pencil" aria-hidden="true"></i>
                                </div>
                                <h6>Sidebar - Dark</h6>
                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional
                                    quickly and easily</p>

                                <div class="text-center">
                                    <a href="contents/layouts/sidebar-dark.html" class="btn btn-theme btn-round">See Demo</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Single Special Area -->
                    <div class="col-12 col-md-4">
                        <div class="card text-center wow fadeInUp" data-wow-delay="0.4s">
                            <img class="card-img-top" id="sidebarLight" src="{{ asset('libs/img/mahar2.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="single-icon">
                                    <i class="ti-ruler-pencil" aria-hidden="true"></i>
                                </div>
                                <h6>Sidebar - Light</h6>
                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional
                                    quickly and easily</p>
                                <div class="text-center">
                                    <a href="contents/layouts/sidebar-light.html" class="btn btn-theme btn-round">See Demo</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Single Special Area -->
                    <div class="col-12 col-md-4">
                        <div class="card text-center wow fadeInUp" data-wow-delay="0.4s">
                            <img class="card-img-top" id="sidebarMinimized" src="{{ asset('libs/img/quil3.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="single-icon">
                                    <i class="ti-ruler-pencil" aria-hidden="true"></i>
                                </div>
                                <h6>Sidebar - minimized</h6>
                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional
                                    quickly and easily</p>

                                <div class="text-center">
                                    <a href="contents/layouts/sidebar-minimized.html" class="btn btn-theme btn-round">See Demo</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>
        </section>

         <!-- ***** App Screenshots Area Start ***** -->
    <section class="app-screenshots-area clearfix" id="review">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- Heading Text  -->
                        <div class="section-heading text-center">
                                <h2 class="text-theme">Screenshots</h2>
                                <p>Best Way to Impress</p>
                                <div class="line-shape"></div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- App Screenshots Slides  -->
                        <div class="app_screenshots_slides owl-carousel">
                            <div class="single-shot">
                                <img src="http://via.placeholder.com/350x250" alt="">
                            </div>
                            <div class="single-shot">
                                    <img src="http://via.placeholder.com/350x250" alt="">
                            </div>
                            <div class="single-shot">
                                    <img src="http://via.placeholder.com/350x250" alt="">
                            </div>
                            <div class="single-shot">
                                    <img src="http://via.placeholder.com/350x250" alt="">
                            </div>
                            <div class="single-shot">
                                    <img src="http://via.placeholder.com/350x250" alt="">
                            </div>
                            <div class="single-shot">
                                    <img src="http://via.placeholder.com/350x250" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** App Screenshots Area End *****====== -->



        <!-- ***** Awesome Features Start ***** -->
        <section class="awesome-feature-area  section_padding_0_50 clearfix" id="kategori">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Heading Text -->
                        <div class="section-heading text-center">
                            <h2 class="text-theme">Category Product</h2>
                            <p>We Provide All Premium Product</p>
                            <div class="line-shape"></div>
                        </div>
                    </div>
                </div>

                <div class="row single-feature-area">
                    <!-- Single Feature Start -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="card card-accent-left-theme">
                            <div class="card-body">
                                <div class="single-feature">
                                    <i class="mdi mdi-tag-heart" aria-hidden="true"></i>
                                    <div class="h5">Hijab Premium</div>
                                    <p>Kami menyediakan hijab untuk anda dengan kualitas premium.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Single Feature Start -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="card card-accent-left-theme">
                            <div class="card-body">
                                <div class="single-feature">
                                    <i class="mdi mdi-ring" aria-hidden="true"></i>
                                    <div class="h5">Mahar Pernikahan</div>
                                    <p>Nggak usah bingung nyari mahar pernikahan yang modern dan keren.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Single Feature Start -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="card card-accent-left-theme">
                            <div class="card-body">
                                <div class="single-feature">
                                    <i class="mdi mdi-radar" aria-hidden="true"></i>
                                    <div class="h5">Quilling</div>
                                    <p>Seni menggunakan kertas dan menjadi sesuatu yang kertas <b>Cek dulu aja</b>.</p>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>
                <!-- single-feature-area end -->

            </div>
            <!-- end container -->
        </section>
        <!-- ***** Awesome Features End ***** -->


        <!-- ***** Cool Facts Area Start ***** -->
        <section class="cool_facts_area clearfix" id="tentang">
            <div class="container">
                <div class="row">
                    <!-- Single Cool Fact-->
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                            <div class="counter-area">
                                <h3>
                                    <span class="counter">3</span>
                                </h3>
                            </div>
                            <div class="cool-facts-content">
                                <i class="mdi mdi-basket"></i>
                                <p>Jenis
                                    <br> Produk</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Cool Fact-->
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                            <div class="counter-area">
                                <h3>
                                    <span class="counter">100</span>
                                </h3>
                            </div>
                            <div class="cool-facts-content">
                                <i class="mdi mdi-cards"></i>
                                <p>Telah
                                    <br> Terjual</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Cool Fact-->
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                            <div class="counter-area">
                                <h3>
                                    <span class="counter">50</span>
                                </h3>
                            </div>
                            <div class="cool-facts-content">
                                <i class="mdi mdi-television-guide"></i>
                                <p>Total
                                    <br>Pembeli</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Cool Fact-->
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.8s">
                            <div class="counter-area">
                                <h3>
                                    <span class="counter">500</span>
                                </h3>
                            </div>
                            <div class="cool-facts-content">
                                <i class="mdi mdi-timer"></i>
                                <p>Kali
                                    <br>Dilihat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Cool Facts Area End ***** -->
        <section class="pricing-area bg-white text-center" id="pricing">
            <h3 class="text-theme">Exclusive on rast.</h3>
            <h6>We Serve and Deliver with premium ones.</h6>
            <a href="" class="btn btn-round btn-outline-theme">Cek Produk</a>
            <a href="" class="btn btn-round btn-theme">Cara Belanja</a>

        </section>

        <!-- ***** Footer Area Start ***** -->
        <footer class="footer-social-icon text-center section_padding_70 clearfix">
            <!-- footer logo -->
            <div class="footer-text">
                <h2>- rast -</h2>
            </div>
            <!-- social icon-->
            <div class="footer-social-icon">
                <a href="#" class="btn btn-theme btn-sm">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#" class="btn btn-theme btn-sm">
                    <i class="active fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#" class="btn btn-theme btn-sm">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>

            </div>
            <div class="footer-menu">
                <nav>
                    <ul>
                        <li>
                            <a href="#">Tentang</a>
                        </li>
                        <li>
                            <a href="#">Cara Belanja</a>
                        </li>
                        <li>
                            <a href="#">Faq</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Foooter Text-->
        </footer>
        <!-- ***** Footer Area Start ***** -->

    </div>
    <!-- end container -->

    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('libs/js/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/js/popper.min.js') }}"></script>
    <script src="{{ asset('libs/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/js/pace.min.js') }}"></script>
    <script src="{{ asset('libs/js/Chart.min.js') }}"></script>

    <!-- owl carousel -->
    <script src="{{ asset('libs/js/owl.carousel.min.js') }}"></script>
    <!-- jquery-loading -->
    <script src="{{ asset('libs/js/jquery.loading.min.js') }}"></script>

    <script src="{{ asset('libs/js/landing-page.js') }}"></script>

    <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 2,
                loop: true,
                margin: 10,
                autoplay: true,
                smartSpeed: 800,
                center: true,
                dots: true,
                //autoplayHoverPause: true,
              });

            })
    </script>

</body>

</html>
