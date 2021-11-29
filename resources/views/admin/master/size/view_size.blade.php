@extends('admin.master')

@section('css-content')
        <!-- animate css {{ asset('vendor/') }} -->
        <link rel="stylesheet" href="{{ asset('vendor/libs/animate.css/animate.min.css') }}">

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
        <li class="breadcrumb-item">
            <a href="{{ url('admin/master/size') }}">Size</a>
        </li>
        <li class="breadcrumb-item active">View Size Barang</li>
    </ol>

    <div class="container-fluid">

        <div class="animated fadeIn"> 

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                                <div class="clearfix">
                                        <div class="float-left">
                                                <div class="h5 text-dark"><strong>Size Produk</strong></div>
                                                <small class="text-theme">Periksa size produk kamu yaa!!</small>
                                        </div>
                                        
                                        {{-- <div class="float-right">
                                            <div class="h3 text-dark"><strong>4</strong></div>
                                            <small>Featured</small>
                                        </div> --}}
                                    </div>
                                    <a href="#" type="button" class="btn btn-primary"  data-toggle="modal" data-target=".bs-example-modal-md">
                                        <i class="mdi mdi-plus"></i>Tambah Size</a>
                                    <!-- end clearfix -->

                                    <div class="row mt-5 ml-2" id="palceit">
                                        <div class="col-md-8">
                                            <div class="card card-accent-theme">
                                                <div class="card-body">
                                                    <h4 class="text-theme">Data Size Produk - {{ $name }}</h4>
                                                    <p>Tekan tombol 
                                                        <code>.ON</code> untuk aktifkan dan
                                                        <code>.OFF </code> Untuk matikan
                                                    </p>
                                                    <div class="table-responsive">
                                                        <table class="table" id="tb-size">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama Ukuran</th>
                                                                    <th class="text-center">isActive</th>
                                                                    <th class="text-center">Edit</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($size as $s)
                                                                    <tr>
                                                                        <td>{{ $s->sz_name }}</td>
                                                                        <td class="text-center"><input type="checkbox"
                                                                            @if ($s->sz_status == 'on')
                                                                                checked
                                                                            @endif
                                                                            data-on-color="primary" id="isChecked{{ $s->sz_id }}" onchange="updateSize(this)" data-id="{{ $s->sz_id }}" data-status="{{ $s->sz_status }}" data-off-color="danger" name="my-checkbox">
                                                                        </td>
                                                                    <td class="text-center"><a href="#" type="button" class="btn btn-warning" id="update" data-toggle="modal" data-target=".bs-example-modal-md-edit" data-id="{{ $s->sz_id }}">
                                                                            <i class="mdi mdi-pencil"></i></a></td>
                                                                        </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- end card-body -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                    </div>
                                    <div class="row ml-2">
                                    
                            </div>
                                    <!-- end inside row  -->
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

</main>
<!-- end main -->


 <!-- sample Large modal content -->
 <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog"  aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <form action="{{ url('admin/master/size/save/') }}/{{ $id }}" method="POST">
        @csrf
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title text-white" >Tambah Size Barang</h6>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p class="text-theme">Tambahkan Size Barang Anda !!</p>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nama Ukuran</label>
                        <div class="col-md-9">
                            <input type="text" id="size" name="size[]" class="form-control" placeholder="Nama Ukuran">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit"  class="btn btn-primary waves-effect text-left"><i class="mdi mdi-content-save"></i>Simpan</button>
            </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- sample Large modal content -->
<div class="modal fade bs-example-modal-md-edit" tabindex="-1" role="dialog"  aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        
        
       
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title text-white" >Edit Size Barang</h6>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            
            <div id="addForm">
                @csrf
            </div>
        </div>
        
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection

@section('js-content')
    <!--bootstrap switch -->
    <script src="{{ asset('vendor/libs/bootstrap-switch/bootstrap-switch.min.js') }}"></script>

    <!-- bootstrap-switch examples -->
    <script src="{{ asset('vendor/js/bootstrap-switch-examples.js') }}"></script>

    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            // fetchData();
            function fetchData(){
                var id = {{ $id }};
                $.ajax({
                    url: '/admin/master/size/get/'+ id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        if(response['size'] != null){
                            var len = response['size'].length;
                            console.log(len);
                            $("#tb-size tbody").empty();
                            for(var i=0; i<len; i++){
                                var id = response['size'][i].sz_id;
                                var nama = response['size'][i].sz_name;
                                var status = response['size'][i].sz_status;
                                var isChecked;
                                if (status == 'on') {
                                    isChecked = 'checked';
                                } else {
                                    isChecked = '';
                                }
                                
                                var elemen = "<tr>" +
                                                "<td>"+ nama +"</td>" +
                                                "<td class='text-center'><input type='checkbox' "+ isChecked +" data-on-color='primary' onclick='updateSize(this)' id='isChecked' data-id='"+ id +"' data-status='"+ status +"' data-off-color='info' name='my-checkbox'></td>" +
                                              "</tr>";
                                $("#tb-size tbody").append(elemen);
                                
                            }


                        }
                    
                    }
                });
            
            }

        function updateSize(elem){
                var id = $(elem).data("id");
                var status = $(elem).data("status");
                var htmlId = 'isChecked'+id;

                $.ajax({
                    url: '/admin/master/size/update/'+ id,
                    type: 'post',
                    data: {_token: CSRF_TOKEN, status: status},
                    success: function(response){
                        // fetchData();
                        if (status == 'on') {
                            $('#'+htmlId).removeAttr('data-status');
                            $('#'+htmlId).removeAttr('checked');
                            $('#'+htmlId).attr('data-status','off');
                            console.log('jadi off');
                        } else {
                            $('#'+htmlId).removeAttr('data-status');
                            $('#'+htmlId).attr('checked','checked');
                            $('#'+htmlId).attr('data-status','on');
                            console.log('jadi on');
                        }

                        location.replace("{{ url('admin/master/size/view/') }}/{{ $id }}");
                        console.log('berhasil ubah status');
                    }
                });
            }

            $(document).on("click", "#update" , function() {
                var id = $(this).data('id');
                console.log(id);
                
                $.ajax({
                    url: "{{ url('admin/master/size/getOne/') }}/"+id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        if(response['data'] != null){
                            var len = len = response['data'].length;
                            console.log(len)
                            var id = response['data'][0].sz_id;
                            var name = response['data'][0].sz_name;
                            var pdid = response['data'][0].pd_id;

                            var form = "<form action='{{ url('admin/master/size/updateOne/') }}/"+ id +"' method='POST' id='formS'>" +
                                        "<div class='modal-body'>" +
                                        "<p class='text-theme'>Perbarui Size Barang Anda !!</p>" +
                                        "<div class='form-group row'>" +
                                        "<label class='col-md-3 form-control-label' for='text-input'>Nama Ukuran</label>" +
                                        "<div class='col-md-9'>" +
                                        "<input type='text' id='sizeEdit' name='sizeEdit' class='form-control' value='"+ name +"' placeholder='Nama Ukuran'>" +
                                        "<input type='hidden' id='pdid' name='pdid' class='form-control' value='"+ pdid +"' placeholder='Nama Ukuran'>" +
                                        "</div></div>" +
                                        "<div class='modal-footer'>" +
                                            "<button type='button'  class='btn btn-primary waves-effect text-left' data-id='"+ id +"' id='doUpdate'><i class='mdi mdi-content-save'></i>Simpan</button>" +
                                        "</div>" +
                                        "</form>";

                            $("#addForm").html('');
                            $("#addForm").html(form);

                        }
                    }
                });
            
            });

            $(document).on("click", "#doUpdate" , function() {
                var id = $(this).data('id');
                var size = $('#sizeEdit').val();
                console.log(size);
                var pdid = $('#pdid').val();
                console.log(pdid);

                $.ajax({
                    url: "{{ url('admin/master/size/updateOne/') }}/"+id,
                    type: 'post',
                    data: {_token: CSRF_TOKEN,id: id, size: size},
                    success: function(response){
                        window.location.replace("{{ url('admin/master/size/view/') }}/"+pdid);
                        console.log('terupdate');
                    }
                });
            });
    </script>

@endsection
