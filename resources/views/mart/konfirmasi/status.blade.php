@extends('mart.master')

@section('css-content')

@endsection

@section('content')
<div class="main-container text-center error-404 not-found" style="padding-top: 200px">
    <div class="container">
        <img src="{{ asset('mart/images/sukses.png') }}" width="70%" alt="" srcset="">
        <h1 class="title" style="margin-top: 30px">Terima kasih, pesananmu akan segera kami proses</h1>
        <p class="subtitle">Tunggu pesan konfirmasi dari kami.</p>
        <!-- .page-content -->
        <a href="{{ url('/') }}" class="button">Back to hompage</a>
    </div>
</div>


@endsection

@section('js-content')

@endsection