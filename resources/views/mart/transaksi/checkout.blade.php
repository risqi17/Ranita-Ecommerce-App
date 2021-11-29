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
                <li class="trail-item trail-end active"><span>Checkout</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="furgan">
                        <div class="furgan-notices-wrapper"></div>
                        <div class="checkout-before-top">
                            <div class="furgan-checkout-login">
                                <div class="furgan-form-login-toggle">
                                    <div class="furgan-info">
                                        Masukkan Alamat Yang Lengkap.
                                        <a href="#" class="showlogin">Untuk memudahkan pengiriman harap memasukkan alamat kamu yang lengkap ya.</a></div>
                                </div>
                               
                            </div>
                            <div class="furgan-checkout-coupon">
                                <div class="furgan-notices-wrapper"></div>
                                <div class="furgan-form-coupon-toggle">
                                    <div class="furgan-info">
                                        Punya catatan untuk kami? <a href="#" class="showcoupon">Silahkan masukkan catatan kamu pada form <b>Informasi Tambahan.</b></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <form name="checkout" method="post" class="checkout furgan-checkout"
                                    action="{{ url('/checkout/save') }}" enctype="multipart/form-data"
                              novalidate="novalidate">
                              {{ csrf_field() }}
                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <div class="furgan-billing-fields">
                                        <h3>Pastikan Datamu Benar Flies.</h3>
                                        <div class="furgan-billing-fields__field-wrapper">
                                            <p class="form-row form-row-wide" id="billing_company_field"
                                               data-priority="30"><label for="billing_company" class="">Nama Penerima&nbsp;<span
                                                    class="optional">(*)</span></label><span
                                                    class="furgan-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="billing_company"
                                                                                             id="nama-penerima"
                                                                                             placeholder="Nama penerima .." value=""
                                                                                             autocomplete="organization" required></span>
                                            </p>
                                            <p class="form-row form-row-wide validate-required validate-phone"
                                               id="billing_phone_field" data-priority="100"><label for="billing_phone"
                                                                                                   class="">No Hp (Whatsapp) - Untuk Konfirmasi Ordermu&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                    class="furgan-input-wrapper"><input type="tel"
                                                                                             class="input-text "
                                                                                             name="billing_phone"
                                                                                             id="handphone-no"
                                                                                             placeholder="Nomor whatsapp mu .." value=""
                                                                                             autocomplete="tel"></span>
                                            </p>
                                            <p class="form-row form-row-wide validate-required validate-email"
                                               id="billing_email_field" data-priority="110"><label for="billing_email"
                                                                                                   class="">Email &nbsp;<abbr class="required"
                                                                   title="required">*</abbr></label><span
                                                    class="furgan-input-wrapper"><input type="email"
                                                                                             class="input-text "
                                                                                             name="billing_email"
                                                                                             id="email"
                                                                                             placeholder="Alamat email kamu .." value=""
                                                                                             autocomplete="email username"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1 mt-3">    
                                    <div class="furgan-billing-fields">
                                        <h3>Pastikan Alamatmu Benar Flies.</h3>
                                        <div class="furgan-billing-fields__field-wrapper">
                                            <p class="form-row form-row-wide adchair-field update_totals_on_change validate-required"
                                               id="billing_country_field" data-priority="40"><label
                                                    for="billing_country" class="">Provinsi&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                <span class="furgan-input-wrapper">
                                                <select name="billing_country"
                                                        id="provinsi"
                                                        class="country_to_state country_select"
                                                        autocomplete="country"
                                                        tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">-- Provinsi --</option>
                                                        @foreach ($provinsi as $pr)
                                                            <option value="{{ $pr->id }}">{{ $pr->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </span>
                                            </p>
                                            <p class="form-row form-row-wide adchair-field update_totals_on_change validate-required"
                                               id="billing_country_field" data-priority="40"><label
                                                    for="billing_country" class="">Kabupaten / Kota&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                <span class="furgan-input-wrapper">
                                                <select name="billing_country"
                                                        id="kabupaten"
                                                        class="country_to_state country_select"
                                                        autocomplete="country"
                                                        tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">-- Kabupaten / Kota --</option>
                                                        
                                                    </select>
                                                </span>
                                            </p>
                                            <p class="form-row form-row-wide adchair-field update_totals_on_change validate-required"
                                               id="billing_country_field" data-priority="40"><label
                                                    for="billing_country" class="">Kecamatan&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                <span class="furgan-input-wrapper">
                                                <select name="billing_country"
                                                        id="kecamatan"
                                                        class="country_to_state country_select"
                                                        autocomplete="country"
                                                        tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">-- Kecamatan --</option>
                                                        
                                                    </select>
                                                </span>
                                            </p>
                                            
                                            <p class="form-row form-row-wide adchair-field validate-postcode"
                                               id="billing_postcode_field" data-priority="65"
                                               data-o_class="form-row form-row-wide adchair-field validate-postcode">
                                                <label for="billing_postcode" class="">Kode Pos&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                    class="furgan-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="kodepos"
                                                                                             id="postal-code"
                                                                                             placeholder="Kode pos alamat" value=""
                                                                                             autocomplete="postal-code"></span>
                                            </p>
                                            <p class="form-row form-row-wide adchair-field validate-required"
                                               id="billing_city_field" data-priority="70"
                                               data-o_class="form-row form-row-wide adchair-field validate-required">
                                                <label for="billing_city" class="">Alamat Lengkap&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="furgan-input-wrapper"><textarea name="order_comments"
                                                                class="input-text "
                                                                id="detail_address"
                                                                placeholder="Tuliskan alamat lebih detailnya"
                                                                rows="2"
                                                                cols="5"></textarea></span>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="furgan-shipping-fields">
                                    </div>
                                    <div class="furgan-additional-fields">
                                        <h3>Beri catatan untuk kami tentang pesananmu</h3>
                                        <div class="furgan-additional-fields__field-wrapper">
                                            <p class="form-row notes" id="note_field" data-priority=""><label
                                                    for="order_notes" class="">Catatan Pembelian&nbsp;<span
                                                    class="optional">(optional)</span></label><span
                                                    class="furgan-input-wrapper"><textarea name="note"
                                                                                                class="input-text "
                                                                                                id="order_notes"
                                                                                                placeholder="Tuliskan catatan jika ada untuk kami.."
                                                                                                rows="2"
                                                                                                cols="5"></textarea></span>
                                            </p></div>
                                    </div>
                                </div>
                            </div>
                            <h3 id="order_review_heading">Your order</h3>
                            <div id="order_review" class="furgan-checkout-review-order">
                                <table class="shop_table furgan-checkout-review-order-table" id="checkoutCart">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                   
                                    
                                    </tbody>
                                    <tfoot>
                                    

                                    </tfoot>
                                </table>
                                <input type="hidden" name="lang" value="en">
                                <div id="payment" class="furgan-checkout-payment">
                                    <ul class="wc_payment_methods payment_methods methods">
                                        <li class="wc_payment_method payment_method_bacs">
                                            <input id="payment_method_bacs" type="radio" class="input-radio"
                                                   name="payment_method" value="bacs" checked="checked"
                                                   data-order_button_text="">
                                            <label for="payment_method_bacs">
                                                Pastikan Email atau No Wa mu </label>
                                            <div class="payment_box payment_method_bacs">
                                                <p>Pastikan kamu mengisi <b>nomor hp atau email</b> untuk <b>Konfirmasi Pesanan</b> 
                                                    dan Mendapatkan informasi <b>nomor resi</b>.</p>
                                                <p>Harga diatas belum termasuk ongkos kirim. Ongkos Kirim akan diinfokan melalui
                                                    Whatsapp atau Email. Pengiriman dilakukan dari Jakarta. <a href="https://www.jne.co.id/id/tracking/tarif" target="_blank">Untuk cek Ongkos Kirim disini</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="form-row place-order">
                                        <button type="button" class="button alt" name="furgan_checkout_place_order"
                                                id="place_order" value="Place order" data-value="Place order">Bayar Sekarang
                                        </button>
                                        <input type="hidden" id="furgan-process-checkout-nonce"
                                               name="furgan-process-checkout-nonce" value="634590c981"><input
                                            type="hidden" name="_wp_http_referer"
                                            value="/furgan/?furgan-ajax=update_order_review"></div>
                                </div>
                            </div>
                        </form>
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
    renderCheckout();
    function renderCheckout(){
        var carts = JSON.parse(localStorage.getItem('carts'));
        $("#checkoutCart tbody").empty();
        $("#subtotal-price").remove();
        $("#total-price").remove();
        var totalHarga = 0;
        carts.forEach(function (item, index) {
            console.log(item.foto);
            var totHarga = parseInt(item.qty, 10)*parseInt(item.harga, 10);
            
                var checkout = "<tr class='cart_item'>" +
                                        "<td class='product-name'>"+ item.nama +" - "+ item.size +"&nbsp;&nbsp; <strong class='product-quantity'>×"+ item.qty +"</strong></td>" +
                                        "<td class='product-total'>" +
                                            "<span class='furgan-Price-amount amount'><span" +
                                                    "class='furgan-Price-currencySymbol'>Rp. </span>"+ totHarga.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +"</span></td>" +
                                    "</tr>";

                $("#checkoutCart tbody").append(checkout);
                
                totalHarga = totalHarga + (parseInt(item.qty, 10)*parseInt(item.harga, 10));
                
        });

        var totalView = "<tr class='cart-subtotal'>" +
                            "<th>Subtotal</th>" +
                            "<td><span class='furgan-Price-amount amount'><span" +
                                    "class='furgan-Price-currencySymbol'>Rp. </span>"+ totalHarga.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +"</span></td>" +
                        "</tr>" +
                        "<tr class='order-total'>" +
                            "<th>Total</th>" +
                            "<td><strong><span class='furgan-Price-amount amount'><span" +
                                    "class='furgan-Price-currencySymbol'>Rp. </span>"+ totalHarga.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +"</span></strong>" +
                            "</td>" +
                        "</tr>";
        $("#checkoutCart tfoot").append(totalView);

        console.log(totalHarga);
        $("#subtotal-price").html(totalHarga.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        $("#total-price").html(totalHarga.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));

    }
</script>
<script>
    $(document).ready(function(){

        $("#provinsi").change(function(){
            var id_provinsi = $(this).val();

            $.ajax({
                type: "get",
                dataType: "json",
                url: "checkout/getdata/"+id_provinsi,
                success: function(response){
                    console.log("ajax berhasil");
                    if(response['data'] != null){
                        $('#kabupaten').empty();
                        $('#kecamatan').empty();
                        len = response['data'].length;
                        console.log(len);
                        for (let i = 0; i < len; i++) {
                            var option = "<option value='"+ response['data'][i].id +"'>"+ response['data'][i].name +"</option>"
                            $('#kabupaten').append(option);
                        }
                    }                                                     
                }
            });                    
        });

        $("#kabupaten").change(function(){
            var id_kab = $(this).val();

            $.ajax({
                type: "get",
                dataType: "json",
                url: "checkout/getdatakecamatan/"+id_kab,
                success: function(response){
                    console.log("ajax berhasil");
                    if(response['data'] != null){
                        $('#kecamatan').empty();
                        len = response['data'].length;
                        console.log(len);
                        for (let i = 0; i < len; i++) {
                            var option = "<option value='"+ response['data'][i].id +"'>"+ response['data'][i].name +"</option>"
                            $('#kecamatan').append(option);
                        }
                    }                                                     
                }
            });                    
        });
    
    
    });
</script>

<script>
     $(document).ready(function(){

        $(document).on("click", "#place_order" , function() {
            checkInvoice();
        });

        function saveToDB(invoice){

            console.log(invoice);

            var nama_penerima = document.getElementById('nama-penerima').value;
            var handphone = document.getElementById('handphone-no').value;
            var email = document.getElementById('email').value;
            var provinsi = document.getElementById('provinsi').value;
            var kabupaten = document.getElementById('kabupaten').value;
            var kecamatan = document.getElementById('kecamatan').value;
            // var provinsi = $( "#provinsi option:selected" ).text();
            // var kabupaten = $( "#kabupaten option:selected" ).text();
            // var kecamatan = $( "#kecamatan option:selected" ).text();
            var postal = document.getElementById('postal-code').value;
            var detail = document.getElementById('detail_address').value;
            var note = document.getElementById('order_notes').value;

            var carts = JSON.parse(localStorage.getItem('carts'));
            var totalHarga = 0;
            var keranjang = [];
            var pd_id = [];
            var size = [];
            var qty = [];
            var harga = [];
            var text = '';

            carts.forEach(function (item, index) {
                var totHarga = parseInt(item.qty, 10)*parseInt(item.harga, 10);
                var barang = {
                    'id' : item.id,
                    'nama' : item.nama,
                    'size' : item.size,
                    'qty' : item.qty,
                    'harga' : item.harga,
                    'totalharga' : totHarga
                }
                keranjang.push(barang);
                text += item.nama +"-"+ item.size +" -- "+ item.qty +" x Rp. "+ item.harga +" = Rp. "+ totHarga +" ,\n";
                totalHarga = totalHarga + (parseInt(item.qty, 10)*parseInt(item.harga, 10));
                pd_id.push(item.id);
                size.push(item.size);
                qty.push(item.qty);
                harga.push(item.harga);
            });
            console.log("TOTAL : "+totalHarga);
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'); //provinsi : provinsi, kabupaten : kabupaten, kecamatan : kecamatan, postal : postal, detail_address : detail, note : note,
            
            if (nama_penerima == '' || handphone == '' || provinsi == '' || kabupaten == '' || kecamatan == '' || postal == '' || detail == '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Isi datamu dengan lengkap ya Flies!',
                    footer: '<a href="">Why do I have this issue?</a>'
                    });
            } else {
               

                $.ajax({
                        url: "{{ url('/checkout/save-address') }}",
                        type: 'post',
                        data: {_token: CSRF_TOKEN, invoice : invoice, nama : nama_penerima, provinsi: provinsi, kabupaten: kabupaten, kecamatan: kecamatan, kodepos: postal, detail: detail, hp : handphone, email : email},
                        success: function(response){
                            console.log('kesimpen dong');
                        }
                });

                $.ajax({
                        url: "{{ url('/checkout/save-detail') }}",
                        type: 'post',
                        data: {_token: CSRF_TOKEN, invoice : invoice, pd_id : pd_id, qty: qty, size: size, harga: harga},
                        success: function(response){
                            console.log('kesimpen dong');
                        }
                });

                $.ajax({
                    url: "{{ url('/checkout/save-transaction') }}",
                    type: 'post',
                    data: {_token: CSRF_TOKEN, nama : nama_penerima, hp : handphone, email : email, total_harga : totalHarga, invoice : invoice},
                    success: function(response){
                        console.log('kesimpen dong');
                        kirimPesan(invoice);
                        
                    }
                });
            }
        }

        function checkInvoice(){
            $.ajax({
                    type: "get",
                    dataType: "json",
                    url: "{{ url('/checkout/get-invoice') }}",
                    success: function(response){
                        console.log("Invoice didapatkan");
                        var invoice = '';
                            if(response['data'] != null){
                                len = response['data'].length;
                                if (len > 0) {
                                    console.log("If jalan");
                                    var inv = response['data'][0].tr_invoice;
                                    var strArray = inv.split("-");
                                    strArray[1] = parseInt(strArray[1])+1;
                                    invoice = strArray[0]+"-"+strArray[1];
                                } else {
                                    console.log("Else Jalan");
                                    invoice = "FLIES2020-1";
                                }
                            }
                        saveToDB(invoice);                               
                    }
            }); 
        }

        function kirimPesan(invoice){
            var nama_penerima = document.getElementById('nama-penerima').value;
            var handphone = document.getElementById('handphone-no').value;
            var email = document.getElementById('email').value;
            // var provinsi = document.getElementById('provinsi').value;
            // var kabupaten = document.getElementById('kabupaten').value;
            // var kecamatan = document.getElementById('kecamatan').value;
            var provinsi = $( "#provinsi option:selected" ).text();
            var kabupaten = $( "#kabupaten option:selected" ).text();
            var kecamatan = $( "#kecamatan option:selected" ).text();
            var post = document.getElementById('postal-code').value;
            var detail = document.getElementById('detail_address').value;
            var note = document.getElementById('order_notes').value;

            var carts = JSON.parse(localStorage.getItem('carts'));
            var totalHarga = 0;
            var keranjang = [];
            var text = '';
            carts.forEach(function (item, index) {
                var totHarga = parseInt(item.qty, 10)*parseInt(item.harga, 10);
                var barang = {
                    'nama' : item.nama +"-"+ item.size +" -- "+ item.qty +"X"+ item.harga,
                    'harga' : totHarga
                }
                keranjang.push(barang);
                text += item.nama +"-"+ item.size +" -- "+ item.qty +" x Rp. "+ item.harga +" = Rp. "+ totHarga +" ,\n";
                totalHarga = totalHarga + (parseInt(item.qty, 10)*parseInt(item.harga, 10));
            });
            // alert(text);
            console.log(keranjang); 
            var res = encodeURI("\n\nNama : "+ nama_penerima +" \nAlamat : "+ detail +", "+ kecamatan +", "+ kabupaten +", "+ provinsi +", "+ post +" \nHo Hp : "+ handphone +" \nEmail : "+ email +"\nCatatn : "+ note +"\nBarang : \n"+ text +"\nTotal Belanja : Rp. "+totalHarga);
            console.log("Telegram Bot");
                $.ajax({
                    type: "get",
                    dataType: "json",
                    url: "https://api.telegram.org/bot880546733:AAG-KYJwKe0Oce55Zh6VvAMsBJmgptfEyxA/sendMessage?chat_id=-482660894&text=Hi+Flies,+Ada+Order+Nih,"+res,
                    success: function(response){
                        console.log("Harusnya Sukses");   
                        localStorage.clear();
                        window.location.replace("{{ url('/checkout/finish/') }}/"+ invoice);                       
                    }
                }); 
                
        }
    });
</script>

@endsection