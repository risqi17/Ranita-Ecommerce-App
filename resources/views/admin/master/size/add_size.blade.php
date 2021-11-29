@extends('admin.master')

@section('css-content')
    
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
        <li class="breadcrumb-item active">Tambah Size Barang</li>
    </ol>

    <div class="container-fluid">

        <div class="animated fadeIn"> 

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                                <div class="clearfix">
                                        <div class="float-left">
                                                <div class="h5 text-dark"><strong>Tambah Size Produk</strong></div>
                                                <small class="text-theme">Periksa size produk kamu yaa!!</small>
                                        </div>

                                        {{-- <div class="float-right">
                                            <div class="h3 text-dark"><strong>4</strong></div>
                                            <small>Featured</small>
                                        </div> --}}
                                    </div>
                                    <span id="result"></span>
                                    <!-- end clearfix -->

                                    <div class="row mt-5 ml-2" id="palceit">
                                        <div class="col-md-8">
                                            <div class="card card-accent-theme">
                                                <div class="card-body">
                                                    <h4 class="text-theme">Data Size Produk - {{ $name }}</h4>
                                                    <p>Pastikan data ukuran benar ya.
                                                    </p>
                                                    <form method="post" id="sizeFormm" action="{{ url('admin/master/size/save/') }}/{{ $id }}">
                                                    @csrf
                                                    <div class="table-responsive">
                                                        <table class="table" id="tb-addSize">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama Ukuran</th>
                                                                    <th class="text-center">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {{-- <tr>
                                                                    <td><input type="text" id="size1" class="form-control mt-3" placeholder="Apa nama sizemu" required></td>
                                                                    <td class="text-center"><button class="btn btn-sm btn-success" onclick="addForm()"><i class="fa fa-plus"></i></button></td>
                                                                </tr> --}}
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    
                                                                    <td></td>
                                                                    <td class="text-center"><button type="submit" id="save" class="btn btn-sm btn-success"><i class="fa fa-save"> </i>Simpan</button></td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </form>
                                                </div>
                                                <!-- end card-body -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                    </div>
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

@endsection

@section('js-content')
    <script>
        $(document).ready(function(){
            var count = 1;
            addForm(count);
            function addForm(count){
                
                if(count > 1){
                    var elemen = "<tr>" +
                                    "<td><input type='text' id='size' name='size[]' class='form-control mt-3' placeholder='Apa nama sizemu' required></td>" +
                                    "<td class='text-center'><button class='btn btn-sm btn-danger' name='remove' id='remove'><i class='fa fa-trash'></i></button></td>" +
                                "</tr>";
                    $('#tb-addSize tbody').append(elemen);

                } else {
                    var elemen = "<tr>" +
                                "<td><input type='text' id='size' name='size[]' class='form-control mt-3' placeholder='Apa nama sizemu' required></td>" +
                                "<td class='text-center'><button class='btn btn-sm btn-success' name='add' id='add'><i class='fa fa-plus'></i></button></td>" +
                            "</tr>";
                    $('#tb-addSize tbody').append(elemen);
                }
            }   

            $(document).on('click', '#add', function(){
                count++;
                console.log('add jalan');
                addForm(count);
            });

            $(document).on('click', '#remove', function(){
                count--;
                console.log('remove jalan');
                $(this).closest("tr").remove();
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#sizeForm').on('submit', function(event){
                event.preventDefault();
                var id = {{ $id }};

                $.ajax({
                    url: '/admin/master/size/save/'+ id,
                    method: 'post',
                    data: $("#sizeForm").serialize(),
                    datatype: 'json',
                    beforeSend: function(){
                        $('#save').attr('disabled','disabled');
                    },
                    success: function(data){
                        // if(data.error)
                        // {
                        //     var error_html = '';
                        //     for(var count = 0; count < data.error.length; count++)
                        //     {
                        //         error_html += '<p>'+data.error[count]+'</p>';
                        //     }
                        //     $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                        // }
                        // else
                        // {
                        //     dynamic_field(1);
                        //     $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                        // }
                        $('#save').attr('disabled', false)
                    }
                });
            });

        }); 
    </script>
    

@endsection
