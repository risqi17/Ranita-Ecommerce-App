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
        <li class="breadcrumb-item active">Kategori</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <h3>Master Kategori</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                <i class="mdi mdi-plus"></i>Tambah Kategori</button>

            <small>
                <a href="#">Bissmillah, semoga banyak yang laku</a>
            </small>
            <br/>
            <br/>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-accent-theme">
                        <div class="card-body">
                            <h4 class="text-theme">Data Kategori</h4>
                            <br/>
                            <table class="table table-hover dataTable table-striped w-full" id='tbKategori' data-plugin="dataTable" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                {{-- <tbody>

                                </tbody> --}}
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
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h6 class="modal-title text-white" >Tambah Kategori</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <p class="text-theme">Tambahkan Kategori Barang Anda !!</p>

                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Nama Kategori</label>
                                <div class="col-md-9">
                                    <input type="text" id="kategori" name="kategori" class="form-control" placeholder="Kategori..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="textarea-input">Deskripsi</label>
                                <div class="col-md-9">
                                    <textarea name="deskripsi" rows="9" id="deskripsi" class="form-control" placeholder="Deskripsi.."></textarea>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" id="saveKategori" class="btn btn-primary waves-effect text-left" data-dismiss="modal"><i class="mdi mdi-content-save"></i>Simpan</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

           <!-- sample Large modal content -->
           <div class="modal fade bs-example-modal-lg-2" tabindex="-1" role="dialog"  aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h6 class="modal-title text-white" >Update Kategori</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <p class="text-theme">Ubah Kategori !!</p>
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

            // Fetch records
            fetchRecords();

            $('#saveKategori').click(function(){
                console.log('fungsi jalan');
                var kategori = $('#kategori').val();
                var deskripsi = $('#deskripsi').val();

                $.ajax({
                    url: 'kategori/save',
                    type: 'post',
                    data: {_token: CSRF_TOKEN,kategori: kategori, deskripsi: deskripsi},
                    success: function(response){
                        console.log('kesimpen dong');
                        document.getElementById('kategori').value = '';
                        document.getElementById('deskripsi').value = '';
                        fetchRecords();

                    }
                });
            });
            //endSaveKategori



            function fetchRecords(){

                t = $('#tbKategori').DataTable();
                t.clear().draw(false);

                $.ajax({
                    url: 'kategori/getKategori',
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        console.log('fetching');
                        var len = 0;
                        //$('#tbKategori tbody').empty();
                        if(response['data'] != null){
                            len = response['data'].length;
                        }
                            for(var i=0; i<len; i++){
                                var id = response['data'][i].ct_id;
                                var kategori = response['data'][i].ct_name;
                                var deskripsi = response['data'][i].ct_description;
                                var status = response['data'][i].status;

                                t.row.add([
                                    '<td>'+ kategori +'</td>',
                                    '<td>'+ deskripsi +'</td>',
                                    '<td>'+ status +'</td>',
                                    '<td><button type="button" id="delete" class="btn btn-sm btn-danger" data-id="'+ id +'"><i class="mdi mdi-delete"></i></button><button type="button" id="update" class="btn btn-sm btn-success" data-id="'+ id +'" data-toggle="modal" data-target=".bs-example-modal-lg-2"><i class="mdi mdi-pencil"></i></button></td>'
                                ]).draw(false);

                                console.log('dapet data cuy')
                            }
                    }
                });
            }


            $(document).on("click", "#delete" , function() {
                var delete_id = $(this).data('id');
                var el = this;

                alertify.confirm("Yakin ingin menghapus data ??", function () {
                    $.ajax({
                        url: 'kategori/delete/'+delete_id,
                        type: 'get',
                        success: function(response){
                            $(el).closest( "tr" ).remove();

                        }
                    });
                    alertify.success("Data Terhapus !! ");

                }, function () {

                    alertify.error("Perintah Dibatalkan");
                });
            });

            $(document).on("click", "#update" , function() {
                var id = $(this).data('id');
                console.log(id);

                $.ajax({
                    url: 'kategori/edit/'+id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        if(response['data'] != null){
                            var len = len = response['data'].length;
                            console.log(len)
                            var id = response['data'][0].ct_id;
                            var kategori = response['data'][0].ct_name;
                            console.log(kategori);
                            var deskripsi = response['data'][0].ct_description;
                            var status = response['data'][0].status;

                            var data = "<div id='form-edit'><div class='form-group row'>" +
                                    "<label class='col-md-3 form-control-label' for='text-input'>Nama Kategori</label>" +
                                    "<div class='col-md-9'>" +
                                        "<input type='text' id='edt_kategori' name='kategori' class='form-control' value='"+ kategori +"' placeholder='Kategori..''></div></div>" +
                                "<div class='form-group row'>" +
                                    "<label class='col-md-3 form-control-label' for='textarea-input'>Deskripsi</label>" +
                                    "<div class='col-md-9'>" +
                                        "<textarea name='deskripsi' rows='9' id='edt_deskripsi' class='form-control' placeholder='Deskripsi..'>"+ deskripsi +"</textarea></div></div></div>";

                                $("#data-show").html('');
                                $("#data-show").html(data);

                            var button =  "<div id='update-btn'><button type='button' id='doUpdate' class='btn btn-primary waves-effect text-left' data-id='"+ id +"' data-dismiss='modal'><i class='mdi mdi-content-save'></i>Update</button></div>"

                                $("#mdl-footer").html('');
                                $("#mdl-footer").html(button);


                        } else {
                            console.log('kosong')
                        }

                    }
                });

            });

            $(document).on("click", "#doUpdate" , function() {
                var id = $(this).data('id');
                var kategori = $('#edt_kategori').val();
                console.log(kategori);
                var deskripsi = $('#edt_deskripsi').val();
                console.log(deskripsi);

                $.ajax({
                    url: 'kategori/update',
                    type: 'post',
                    data: {_token: CSRF_TOKEN,id: id, kategori: kategori, deskripsi: deskripsi},
                    success: function(response){
                        console.log('terupdate');
                        fetchRecords();
                    }
                });
            });


        });
    </script>

@endsection
