@extends('admin.master')

@section('css-content')
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('vendor/libs/editor-summernote/dist/summernote-lite.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/animate.css/animate.min.css') }}">
@endsection

@section('content')
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb bc-colored bg-theme" id="breadcrumb">
        <li class="breadcrumb-item ">
            <a href="">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Master</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ url('admin/master/barang') }}">Barang</a>
        </li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <h3>Tambah Barang</h3>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-theme">
                            <strong>Tambah Barang Jualan Kamu</strong>
                            Semangatss
                        </div>
                        <div class="card-body">
                            <form action="#" id="needs-validation" novalidate>

                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="text-input">Nama Produk(*)</label>
                                    <div class="col-md-10">
                                        <input type="text" id="nama_produk" class="form-control" placeholder="Apa nama produk kamu" required>
                                        <div class="invalid-feedback">
                                            Isi dulu dong nama barangnya.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="email-input">Kategori(*)</label>
                                    <div class="col-md-5">
                                        <select class="custom-select d-block my-3" id="kategori" required>
                                            <option value="">Pilih Kategorinya</option>
                                            @forelse ($category as $cat)
                                                <option value="{{ $cat->ct_id }}">{{ $cat->ct_name }}</option>
                                            @empty
                                                <option value="">Belum ada kategori</option>
                                            @endforelse

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="password-input">Harga Beli(*)</label>
                                    <div class="col-md-3">
                                        <input type="number" id="harga_beli" class="form-control" placeholder="Harga Kulakan " required>
                                        <div class="invalid-feedback">
                                            Isi dulu dong harga beli nya.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="email-input">Harga Jual(*)</label>
                                    <div class="col-md-4">
                                        <input type="number" id="harga_jual"  class="form-control" placeholder="Dijual harga berapa " required>
                                        <div class="invalid-feedback">
                                            Isi dulu dong harga jualnya.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="email-input">Diskon</label>
                                    <div class="col-md-4">
                                        <input type="number" id="harga_diskon" class="form-control" placeholder="Mau diskon berapa" required>
                                        <div class="invalid-feedback">
                                            Mau didiskon berapa dulu, klo nggak isi 0 aja.
                                        </div>

                                    </div>
                                </div>
                        </div>

                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label" for="text-input">Stok(*)</label>
                                <div class="col-md-5">
                                    <input type="number" id="stok" class="form-control" placeholder="Masukkan stok produkmu" required>
                                    <div class="invalid-feedback">
                                        Isi dulu dong stok awalnya.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label" for="text-input">SKU(*)</label>
                                <div class="col-md-5">
                                    <input type="text" id="sku" class="form-control" placeholder="Masukkan stok produkmu" required>
                                    <div class="invalid-feedback">
                                        Isi nomor sku produkmu
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-header text-theme">
                            <strong>Deskripsi Produk</strong>
                        </div>

                        <div class="card-body">
                            <textarea id="summernote" name="editordata"></textarea>

                        </div>

                        <div class="card-footer">
                            <button type="button" id="simpan" class="btn btn-sm btn-primary">
                                <i class="fa fa-dot-circle-o"></i> Simpan</button>
                            <button type="reset" class="btn btn-sm btn-danger">
                                <i class="fa fa-ban"></i> Reset</button>
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
    <!--summernote -->
    <script src="{{ url('vendor/libs/editor-summernote/dist/summernote-lite.js') }}"></script>

    <!-- summernote -example -->
    <script src="{{ url('vendor/js/editor-summernote-example.js') }}"></script>

     <!-- jquery-loading -->
     <link rel="stylesheet" href="{{ asset('vendor/libs/jquery-loading/dist/jquery.loading.min.css') }}">

    <!--Alertify js -->
   <script src="{{ asset('vendor/libs/Alertify/js/alertify.js') }}"></script>

    <script>
         var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $(document).ready(function(){
            $('#simpan').click(function(){
                            var nama = $('#nama_produk').val();
                            var kategori = $('#kategori').val();
                            var beli = $('#harga_beli').val();
                            var jual = $('#harga_jual').val();
                            var diskon = $('#harga_diskon').val();
                            var stok = $('#stok').val();
                            var sku= $('#sku').val();
                            var deskripsi = $('#summernote').summernote('code');

                            if(diskon == ''){
                                diskon = 0;
                                console.log('diskon Kosong');
                            }
                            if(deskripsi == ''){
                                deskripsi = "Belum ada deskripsi";
                                console.log('deskripsi Kosong');
                            }

                            if(nama == '' || kategori == '' || beli == '' || jual == '' || stok == '' || sku == ''){
                                alertify.error("Pastikan form bertanda (*) diisi yah !!");
                                console.log('Kosong');
                            } else {
                                $.ajax({
                                url: 'save',
                                type: 'post',
                                data: {_token: CSRF_TOKEN, nama_produk: nama, kategori: kategori, beli: beli, jual: jual, diskon: diskon, stok: stok, sku: sku, deskripsi: deskripsi},
                                success: function(response){
                                    console.log('tersimpan');
                                    window.location.replace("/admin/master/barang");
                                }
                                });
                                //end ajax
                                // window.location.replace("/admin/master/barang");
                            }
                            
            });
        });
                    

    </script>

@endsection
