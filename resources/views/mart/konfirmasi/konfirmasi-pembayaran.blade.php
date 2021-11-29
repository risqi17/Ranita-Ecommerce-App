@extends('mart.master')

@section('css-content')

@endsection

@section('content')


<div class="banner-wrapper has_background" >
    <div class="banner-wrapper-inner" style="padding-top: 200px">
        <h1 class="page-title">Konfirmasi Pembayaranmu</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Konfirmasi Pembayaran</span>
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
                        <form class="track_order">
                            <p>Masukkan nomor transaksimu untuk konfirmasi pembayaran, Jika kamu sudah konfirmasi lewat WA
                                tidak perlu upload bukti pembayaran lewat menu ini.</p>
                            <p class="form-row form-row-first"><label for="orderid">Order ID</label>
                                <input class="input-text" type="text" name="orderid" id="orderid"
                                       value="" placeholder="Masukkan nomor order id.">
                            </p>
                            <p class="form-row form-row-last"><label for="order_email">Nama Di Nomor Rekening</label>
                                <input class="input-text" type="text" name="order_email" id="order_email" value="" placeholder="Nama rekening."></p>
                            <p class="form-row form-row-last"><label for="order_email">Nama Bank</label>
                                <input class="input-text" type="text" name="order_email" id="order_email" value="" placeholder="Nama bank."></p>
                            <p class="form-row form-row-last"><label for="order_email">Unggah Bukti Pembayaran</label>
                                <input class="input-text" type="file" size="60" name="order_email" id="order_email" value="" placeholder="Email you used during checkout."></p>
                            <div class="clear"></div>
                            <p class="form-row">
                                <button type="submit" class="button" name="track" value="Track">Unggah Pembayaran</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection

@section('js-content')

@endsection