@extends('admin.master')

@section('css-content')
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('vendor/libs/editor-summernote/dist/summernote-lite.css') }}">

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
        <li class="breadcrumb-item active">Edit</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <h3>Edit Barang</h3>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-theme">
                            <strong>Edit Barang Jualan Kamu</strong>
                            Semangatss
                        </div>
                        <div class="card-body">
                            @forelse ($barang as $b)
                                    <form action="#" id="needs-validation" novalidate>

                                        <div class="form-group row">
                                            <label class="col-md-2 form-control-label" for="text-input">Nama Produk</label>
                                            <div class="col-md-10">
                                            <input type="text" value="{{ $b->pd_id  }}" id="id" hidden>
                                            <input type="text" id="nama_produk" class="form-control" value="{{ $b->pd_name }}" placeholder="Apa nama produk kamu" required>
                                                <div class="invalid-feedback">
                                                    Isi dulu dong nama barangnya.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 form-control-label" for="email-input">Kategori</label>
                                            <div class="col-md-5">
                                                <select class="custom-select d-block my-3" id="kategori" required>
                                                    <option value="">Pilih Kategorinya</option>
                                                    @forelse ($category as $cat)
                                                        <option value="{{ $cat->ct_id }}"
                                                            @php
                                                                if($b->ct_id == $cat->ct_id){
                                                                    echo "selected";
                                                                }
                                                            @endphp
                                                            >
                                                            {{ $cat->ct_name }}
                                                        </option>
                                                    @empty
                                                        <option value="">Belum ada kategori</option>
                                                    @endforelse

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 form-control-label" for="password-input">Harga Beli</label>
                                            <div class="col-md-3">
                                                <input type="number" id="harga_beli" value="{{ $b->pd_harga_beli }}" class="form-control" placeholder="Harga Kulakan " required>
                                                <div class="invalid-feedback">
                                                    Isi dulu dong harga beli nya.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 form-control-label" for="email-input">Harga Jual</label>
                                            <div class="col-md-4">
                                                <input type="number" id="harga_jual"  value="{{ $b->pd_harga_jual }}" class="form-control" placeholder="Dijual harga berapa " required>
                                                <div class="invalid-feedback">
                                                    Isi dulu dong harga jualnya.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 form-control-label" for="email-input">Diskon</label>
                                            <div class="col-md-4">
                                                <input type="number" id="harga_diskon" value="{{ $b->pd_harga_discount }}" class="form-control" placeholder="Mau diskon berapa" required>
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
                                        <label class="col-md-2 form-control-label" for="text-input">Stok</label>
                                        <div class="col-md-5">
                                            <input type="number" id="stok" class="form-control" value="{{ $b->pd_stok }}" placeholder="Masukkan stok produkmu" required>
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
                                        <label class="col-md-2 form-control-label" for="text-input">SKU</label>
                                        <div class="col-md-5">
                                            <input type="text" id="sku" class="form-control" value="{{ $b->pd_sku }}" placeholder="Masukkan nomor sku produkmu" required>
                                            <div class="invalid-feedback">
                                                Isi dulu dong nomor skunya
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
                                    <textarea id="summernote" name="editordata">{{ $b->pd_description }}</textarea>
                                    // <div id="summernote">
                                    //     {{ $b->pd_description }}
                                    // </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" id="simpan" class="btn btn-sm btn-primary">
                                        <i class="fa fa-dot-circle-o"></i> Simpan</button>
                                    <button type="reset" class="btn btn-sm btn-danger">
                                        <i class="fa fa-ban"></i> Reset</button>
                                </div>
                            </form>
                            @empty

                            @endforelse

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

    <script>
         var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


        $(document).ready(function(){
            //$('#simpan').click(function(){
            window.addEventListener('load', function () {
                //window.addEventListener('load', function () {
                    var form = document.getElementById('needs-validation');
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                            console.log('if jalan');
                            //document.getElementById('needs-validation').scrollIntoView();
                        } else {
                            console.log('else jalan');
                            var id = $('#id').val();
                            console.log(id);
                            var nama = $('#nama_produk').val();
                            var kategori = $('#kategori').val();
                            var beli = $('#harga_beli').val();
                            var jual = $('#harga_jual').val();
                            var diskon = $('#harga_diskon').val();
                            var stok = $('#stok').val();
                            var sku = $('#sku').val();
                            var deskripsi = $('#summernote').summernote('code');
                            $.ajax({
                                url: '/admin/master/barang/update',
                                type: 'post',
                                data: {_token: CSRF_TOKEN, id: id, nama_produk: nama, kategori: kategori, beli: beli, jual: jual, diskon: diskon, stok: stok, sku: sku, deskripsi: deskripsi},
                                success: function(response){
                                    console.log('tersimpan');
                                    window.location.replace("/admin/master/barang");
                                }
                            });
                            //end ajax
                            //window.location = "{{ url('/admin/master/barang') }}";
                        }
                        document.getElementById('needs-validation').scrollIntoView();
                        form.classList.add('was-validated');
                        window.location = "{{ url('/admin/master/barang') }}";

                    }, false);
            }, false);
        });

    </script>

@endsection
