<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('mart/images/components/favicon.png') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/chosen.min.cs') }}s" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/jquery.scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/lightbox.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/slick.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/fonts/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/megamenu.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/dreaming-attribute.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mart/css/style.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('css-content')

    <title>Ranita - Your Creative Wedding Partner </title>
</head>

<body>

    <header id="header" class="header style-01 header-dark header-transparent header-sticky">
        <div class="header-wrap-stick">
            <div class="header-position">
                <div class="header-middle">
                    <div class="furgan-menu-wapper"></div>
                    <div class="header-middle-inner">
                        <div class="header-search-menu">
                            <div class="header-search furgan-dropdown">
                                <div class="header-search-inner" data-furgan="furgan-dropdown">
                                    <a href="#" class="link-dropdown block-link">
                                        <span class="flaticon-magnifying-glass-1"></span>
                                    </a>
                                </div>
                                <div class="block-search">
                                    <form role="search" method="post" action="{{ url('/search') }}"
                                        class="form-search block-search-form furgan-live-search-form">
                                        {{ csrf_field() }}
                                        <div class="form-content search-box results-search">
                                            <div class="inner">
                                                <input autocomplete="off" class="searchfield txt-livesearch input"
                                                    name="nama" value="" placeholder="Search here..." type="text">
                                            </div>
                                        </div>
                                        <div class="category">
                                            <select title="product_cat" name="kategori" class="category-search-option">
                                                <option value="">Semua Kategori</option>
                                                @foreach ($kategori as $kt)
                                                    <option class="level-0" value="{{ $kt->ct_name }}">
                                                        {{ $kt->ct_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn-submit">
                                            <span class="flaticon-magnifying-glass-1"></span>
                                        </button>
                                    </form><!-- block search -->
                                </div>
                            </div>
                            <div class="furgan-dropdown-close">x</div>
                        </div>
                        <div class="header-logo-nav">
                            <div class="header-logo">
                                <a href="{{ url('/shop') }}">
                                    <img alt="Furgan" src="{{ asset('mart/images/components/logo-header.png') }}"
                                        class="logo">
                                </a>
                            </div>
                            <div class="box-header-nav menu-center">
                                <ul id="menu-primary-menu"
                                    class="clone-main-menu furgan-clone-mobile-menu furgan-nav main-menu">


                                    <li id="menu-item-230"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="furgan-menu-item-title" title="Home"
                                            href="{{ url('/') }}">Home</a>
                                        <span class="toggle-submenu"></span>
                                    </li>

                                    <li id="menu-item-228"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="furgan-menu-item-title" title="Souvenir"
                                            href="{{ url('/shop/6') }}">Souvenir</a>
                                        <span class="toggle-submenu"></span>
                                        {{-- <ul role="menu" class="submenu">
                                            <li id="menu-item-987"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                                                <a class="furgan-menu-item-title" title="About"
                                                href="about.html">About</a></li>
                                            <li id="menu-item-988"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-988">
                                                <a class="furgan-menu-item-title" title="Contact"
                                                href="contact.html">Contact</a></li>
                                            <li id="menu-item-990"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-990">
                                                <a class="furgan-menu-item-title" title="Page 404"
                                                href="404.html">Page 404</a></li>
                                        </ul> --}}
                                    </li>



                                    <li id="menu-item-996"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="furgan-menu-item-title" title="Kategori" href="#">Kategori</a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu megamenu megamenu-blog">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="furgan-listitem style-01">
                                                        <div class="listitem-inner">
                                                            <h4 class="title">
                                                                Kategori Product </h4>
                                                            <ul class="listitem-list">
                                                                <li>
                                                                    <a href="{{ url('/shop/6') }}" target="_self">Souvenir </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ url('/shop/5') }}" target="_self">
                                                                        Mahar </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ url('/shop/7') }}"
                                                                        target="_self">Bingkisan </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ url('/shop/8') }}" target="_self">Sticker
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ url('/undangan') }}"
                                                                        target="_self">Undangan
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="furgan-listitem style-01">
                                                        <div class="listitem-inner">
                                                            <h4 class="title">
                                                                Blog </h4>
                                                            <ul class="listitem-list">
                                                                <li>
                                                                    <a href="{{ url('/blog') }}"
                                                                        target="_self">Popular Article </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ url('/blog') }}"
                                                                        target="_self">Newest Article</a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="menu-item-237"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                        <a class="furgan-menu-item-title" title="Undangan"
                                            href="{{ url('/undangan') }}">Undangan</a>
                                        <span class="toggle-submenu"></span>

                                    </li>
                                    <li id="menu-item-230"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="furgan-menu-item-title" title="Sticker"
                                            href="{{ url('/shop/8') }}">Sticker</a>
                                        <span class="toggle-submenu"></span>
                                    </li>
                                    <li id="menu-item-237"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                        <a class="furgan-menu-item-title" title="Transaksi" href="#">Transaksi</a>
                                        <span class="toggle-submenu"></span>
                                        <ul role="menu" class="submenu">
                                            <li id="menu-item-987"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                                                <a class="furgan-menu-item-title" title="About"
                                                    href="{{ url('/cara-belanja') }}">Cara Belanja</a>
                                            </li>
                                            <li id="menu-item-988"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-988">
                                                <a class="furgan-menu-item-title" title="Contact"
                                                    href="{{ url('/konfirmasi-pembayaran') }}">Konfirmasi Pembayaran</a>
                                            </li>
                                            <li id="menu-item-990"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-990">
                                                <a class="furgan-menu-item-title" title="Page 404" href="{{ url('/tracking') }}">Tracking</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-control">
                            <div class="header-control-inner">
                                <div class="meta-dreaming">
                                    <div class="block-minicart block-dreaming furgan-mini-cart furgan-dropdown">
                                        <div class="shopcart-dropdown block-cart-link" data-furgan="furgan-dropdown">
                                            <a class="block-link link-dropdown" href="#">
                                                <span class="flaticon-cart"></span>
                                                <span class="count" id="totalCart">0</span>
                                            </a>
                                        </div>
                                        <div class="widget furgan widget_shopping_cart">
                                            <div class="widget_shopping_cart_content">
                                                <ul class="furgan-mini-cart cart_list product_list_widget"
                                                    id="shop-cart">

                                                    {{-- <li class="furgan-mini-cart-item mini_cart_item">
                                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                                        <a href="#">
                                                            <img src="assets/images/apro134-1-600x778.jpg"
                                                                 class="attachment-furgan_thumbnail size-furgan_thumbnail"
                                                                 alt="img" width="600" height="778">T-shirt with skirt – Pink&nbsp;
                                                        </a>
                                                        <span class="quantity">1 × <span
                                                                class="furgan-Price-amount amount"><span
                                                                class="furgan-Price-currencySymbol">$</span>150.00</span></span>
                                                    </li> --}}

                                                </ul>
                                                <p class="furgan-mini-cart__total total"><strong>Subtotal:</strong>
                                                    <span class="furgan-Price-amount amount"><span
                                                            class="furgan-Price-currencySymbol">Rp. </span><strong
                                                            id="totalPrice">00</strong></span>
                                                </p>
                                                <p class="furgan-mini-cart__buttons buttons">
                                                    <a href="{{ url('/cart') }}"
                                                        class="button furgan-forward">Viewcart</a>
                                                    <a href="{{ url('/checkout') }}"
                                                        class="button checkout furgan-forward">Checkout</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mobile">
            <div class="header-mobile-left">
                <div class="block-menu-bar">
                    <a class="menu-bar menu-toggle" href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <div class="header-search furgan-dropdown">
                    <div class="header-search-inner" data-furgan="furgan-dropdown">
                        <a href="#" class="link-dropdown block-link">
                            <span class="flaticon-magnifying-glass-1"></span>
                        </a>
                    </div>
                    <div class="block-search">
                        <form role="search" method="get" class="form-search block-search-form furgan-live-search-form">
                            <div class="form-content search-box results-search">
                                <div class="inner">
                                    <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                        placeholder="Search here..." type="text">
                                </div>
                            </div>
                            <div class="category">
                                <select title="product_cat" name="product_cat" class="category-search-option">
                                    <option value="0">All Categories</option>
                                    <option class="level-0" value="light">Light</option>
                                    <option class="level-0" value="chair">Chair</option>
                                    <option class="level-0" value="table">Table</option>
                                    <option class="level-0" value="bed">Bed</option>
                                    <option class="level-0" value="new-arrivals">New arrivals</option>
                                    <option class="level-0" value="lamp">Lamp</option>
                                    <option class="level-0" value="specials">Specials</option>
                                    <option class="level-0" value="sofas">Sofas</option>
                                </select>
                            </div>
                            <button type="submit" class="btn-submit">
                                <span class="flaticon-magnifying-glass-1"></span>
                            </button>
                        </form><!-- block search -->
                    </div>
                </div>

            </div>
            <div class="header-mobile-mid">
                <div class="header-logo">
                    <a href="index.html"><img alt="Furgan"
                            src="{{ asset('mart/images/components/logo-header.png') }}" class="logo"></a>
                </div>
            </div>
            <div class="header-mobile-right">
                <div class="header-control-inner">
                    <div class="meta-dreaming">
                        <div class="menu-item block-user block-dreaming furgan-dropdown">

                        </div>
                        <div class="block-minicart block-dreaming furgan-mini-cart furgan-dropdown">
                            <div class="shopcart-dropdown block-cart-link" data-furgan="furgan-dropdown">
                                <a class="block-link link-dropdown" href="#">
                                    <span class="flaticon-cart"></span>
                                    <span class="count" id="totalCartMobile">0</span>
                                </a>
                            </div>
                            <div class="widget furgan widget_shopping_cart">
                                <div class="widget_shopping_cart_content">
                                    <ul class="furgan-mini-cart cart_list product_list_widget" id="shop-cart-mobile">
                                        {{-- <li class="furgan-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove remove_from_cart_button">×</a>
                                            <a href="#">
                                                <img src="assets/images/apro134-1-600x778.jpg"
                                                     class="attachment-furgan_thumbnail size-furgan_thumbnail"
                                                     alt="img" width="600" height="778">T-shirt with skirt – Pink&nbsp;
                                            </a>
                                            <span class="quantity">1 × <span
                                                    class="furgan-Price-amount amount"><span
                                                    class="furgan-Price-currencySymbol">$</span>150.00</span></span>
                                        </li> --}}

                                    </ul>
                                    <p class="furgan-mini-cart__total total"><strong>Subtotal:</strong>
                                        <span class="furgan-Price-amount amount"><span
                                                class="furgan-Price-currencySymbol">Rp. </span><strong
                                                id="totalPriceMobile">00</strong> </span>
                                    </p>
                                    <p class="furgan-mini-cart__buttons buttons">
                                        <a href="{{ url('/cart') }}" class="button furgan-forward">Viewcart</a>
                                        <a href="{{ url('/checkout') }}"
                                            class="button checkout furgan-forward">Checkout</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    @include('mart.footer')


    <div class="footer-device-mobile">
        <div class="wapper">
            <div class="footer-device-mobile-item device-home">
                <a href="index.html">
                    <span class="icon">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </span>
                    Home
                </a>
            </div>
            <div class="footer-device-mobile-item device-home device-wishlist">
                <a href="wishlist.html">
                    <span class="icon">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </span>
                    Wishlist
                </a>
            </div>
            <div class="footer-device-mobile-item device-home device-cart">
                <a href="cart.html">
                    <span class="icon">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        <span class="count-icon">
                            0
                        </span>
                    </span>
                    <span class="text">Cart</span>
                </a>
            </div>
            <div class="footer-device-mobile-item device-home device-user">
                <a href="my-account.html">
                    <span class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                    Account
                </a>
            </div>
        </div>
    </div>
    <a href="#" class="backtotop active">
        <i class="fa fa-angle-double-up"></i>
    </a>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('mart/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('mart/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('mart/js/chosen.min.js') }}"></script>
    <script src="{{ asset('mart/js/countdown.min.js') }}"></script>
    <script src="{{ asset('mart/js/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('mart/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('mart/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('mart/js/slick.js') }}"></script>
    <script src="{{ asset('mart/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('mart/js/threesixty.min.js') }}"></script>
    <script src="{{ asset('mart/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('mart/js/mobilemenu.js') }}"></script>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
    <script src="{{ asset('mart/js/functions.js') }}"></script>

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

    @yield('js-content')

</body>

</html>
