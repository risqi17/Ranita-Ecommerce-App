@extends('admin.master')

@section('css-content')

    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/animate.css/animate.min.css') }}">
    <!-- data table -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/tables-datatables/dist/datatables.min.css') }}">
    <!-- jquery-loading -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/jquery-loading/dist/jquery.loading.min.css') }}">

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
        <li class="breadcrumb-item active">Barang</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <h3>Master Gambar</h3>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-accent-theme">
                        <div class="card-body">
                            <h4 class="text-theme">Data Barang</h4>
                            <br/>
                            <table class="table table-hover dataTable table-striped w-full" id="tbBarang" data-plugin="dataTable" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Jumlah Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Jumlah Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

            

        </div>
        <!-- end animated fadeIn -->
    </div>
    <!-- end container-fluid -->

    <!-- sample Large modal content -->
    <div class="modal fade bs-example-modal-lg-2" tabindex="-1" role="dialog"  aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title text-white" >Preview Produk</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p class="text-theme">Periksa Produk Kamu !!</p>
                        <div id="data-show">

                        </div>
                </div>
                <div class="modal-footer" id="mdl-footer">

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection

@section('js-content')

    <!--datatables -->
    <script src="{{ asset('vendor/libs/tables-datatables/dist/datatables.min.js') }}"></script>

    <!-- datatable examples -->
    {{-- <script src="{{ asset('vendor/js/table-datatable-example.js') }}"></script> --}}

    <!--Alertify js -->
   <script src="{{ asset('vendor/libs/Alertify/js/alertify.js') }}"></script>

    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $(document).ready(function(){
            fetchData();

            function fetchData(){

                t = $('#tbBarang').DataTable();
                t.clear().draw(false);

                $.ajax({
                    url: '/admin/master/gambar/get',
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        console.log('fetching');
                        var len = 0;
                        if(response['data'] != null){
                            len = response['data'].length;
                        }
                        console.log(len);
                            for(var i=0; i<len; i++){
                                var id = response['data'][i].pd_id;
                                var nama = response['data'][i].pd_name;
                                var kat = response['data'][i].ct_name;
                                var jml = response['data'][i].jumlah_gambar;
                                var url = "{{ url('admin/master/gambar/view/') }}";

                               
                                if(jml != 0){
                                    t.row.add([
                                    '<td>'+ nama +'</td>',
                                    '<td>'+ jml +'</td>',
                                    '<td><a href="'+ url +'/'+ id +'" id="update" class="btn btn-sm btn-success" data-id="'+ id +'">Lihat<i class="mdi mdi-eye"></i></a></td>'
                                    ]).draw(false);
                                } else {
                                    t.row.add([
                                    '<td>'+ nama +'</td>',
                                    '<td>'+ jml +'</td>',
                                    '<td><a href="'+ url +'/'+ id +'" id="update" class="btn btn-sm btn-primary" data-id="'+ id +'">Tambah<i class="mdi mdi-plus"></i></a></td>'
                                    ]).draw(false);
                                }
                                
                                
                                console.log('dapet data cuy');
                            }
                    }
                });
            }


            $(document).on("click", "#delete" , function() {
                var delete_id = $(this).data('id');
                var el = this;

                alertify.confirm("Yakin ingin menghapus data ??", function () {
                    $.ajax({
                        url: 'barang/delete/'+delete_id,
                        type: 'get',
                        success: function(response){
                            console.log('terhapus');
                            $(el).closest( "tr" ).remove();

                        }
                    });
                    alertify.success("Data Terhapus !! ");

                }, function () {

                    alertify.error("Perintah Dibatalkan");
                });
            });


            //view Barang
            $(document).on("click", "#detail" , function() {
                var id = $(this).data('id');
                console.log(id);

                $.ajax({
                    url: 'barang/detail/'+id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        if(response['data'] != null){
                            var len = len = response['data'].length;
                            console.log(len)
                            var id = response['data'][0].pd_id;
                            var kategori = response['data'][0].ct_name;
                            console.log(id);
                            var name = response['data'][0].pd_name;
                            var description = response['data'][0].pd_description;
                            var status = response['data'][0].pd_status;
                            var stocks = response['data'][0].pd_stok;
                            var harga_beli = response['data'][0].pd_harga_beli;
                            var harga_jual = response['data'][0].pd_harga_jual;
                            var harga_discount = response['data'][0].pd_harga_discount;
                            var kategori = response['data'][0].ct_name;

                            // var deskripsi = response['data'][0].ct_description;
                            // var status = response['data'][0].status;

                            var data = "<div id='form-edit'><div class='form-group row'>" +
                                    "<label class='col-md-3 form-control-label' for='text-input'>Nama Produk</label>" +
                                    "<div class='col-md-9'>: " + name +"</div></div>" +
                                    
                                    "<div class='form-group row'>" +
                                    "<label class='col-md-3 form-control-label' for='textarea-input'>Kategori</label>" +
                                    "<div class='col-md-9'>: " + kategori +"</div></div>" +

                                    "<div class='form-group row'>" +
                                    "<label class='col-md-3 form-control-label' for='textarea-input'>Status</label>" +
                                    "<div class='col-md-9'>: " + status +"</div></div>" +

                                    "<div class='form-group row'>" +
                                    "<label class='col-md-3 form-control-label' for='textarea-input'>Stok</label>" +
                                    "<div class='col-md-9'>: " + stocks +"</div></div>" +
                                    
                                    "<div class='form-group row'>" +
                                    "<label class='col-md-3 form-control-label' for='textarea-input'>Harga Beli</label>" +
                                    "<div class='col-md-9'>: Rp. " + harga_beli +"</div></div>" +
                                    
                                    "<div class='form-group row'>" +
                                    "<label class='col-md-3 form-control-label' for='textarea-input'>Harga Jual</label>" +
                                    "<div class='col-md-9'>: Rp. " + harga_jual +"</div></div>" +
                                    
                                    
                                    "<div class='form-group row'>" +
                                    "<label class='col-md-3 form-control-label' for='textarea-input'>Harga Discount</label>" +
                                    "<div class='col-md-9'>: Rp. " + harga_discount +"</div></div>" +


                                    "<div class='form-group row'>" +
                                    "<label class='col-md-3 form-control-label' for='textarea-input'>Deskripsi</label>" +
                                    "<div class='col-md-9'>: " + description +"</div>"+"</div></div>";

                                $("#data-show").html('')
                                $("#data-show").html(data);

                            var button =  "<div id='update-btn'><button type='button' id='doUpdate' class='btn btn-primary waves-effect text-left' data-id='"+ id +"' data-dismiss='modal'><i class='mdi mdi-content-save'></i>Update</button></div>"

                                $("#mdl-footer").html('');
                                $("#mdl-footer").html(button);


                        } else {
                            console.log(' datakosong')
                        }

                    }
                });

            });


        });
    </script>

@endsection
