@extends('mart.master')

@section('css-content')

@endsection

@section('content')
<div class="main-container text-center error-404 not-found" style="padding-top: 200px">
    <div class="container">
        <img src="{{ asset('mart/images/finish.png') }}" width="50%" alt="" srcset="">
        <h1 class="title" style="margin-top: 30px">No Transaksi <span style="color: #069C54">{{ $id }}</span> pesananmu akan segera kami proses</h1>
        <p class="subtitle">Silahkan lakukan pembayaran ke nomor rekening yang dikirim lewat WhatsApp kamu.</p>
        <!-- .page-content -->
        <a href="{{ url('/konfirmasi-pembayaran') }}" class="button">Konfirmasi Pembayaran</a>
    </div>
</div>


@endsection

@section('js-content')

@endsection