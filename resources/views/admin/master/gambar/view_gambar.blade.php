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
            <a href="{{ url('admin/master/gambar') }}">Gambar</a>
        </li>
        <li class="breadcrumb-item active">View Gambar</li>
    </ol>

    <div class="container-fluid">

        <div class="animated fadeIn"> 

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                                <div class="clearfix">
                                        <div class="float-left">
                                                <div class="h5 text-dark"><strong>Gambar Produk</strong></div>
                                                <small class="text-theme">Periksa gambar produk kamu yaa!!</small>
                                        </div>

                                        {{-- <div class="float-right">
                                            <div class="h3 text-dark"><strong>4</strong></div>
                                            <small>Featured</small>
                                        </div> --}}
                                    </div>
                                    <!-- end clearfix -->

                                    <div class="row mt-5 ml-2" id="palceit">
                                         <div class="col-md-3 duplicateable-content model" id="upload_main_image">
                                           {{-- form upload disini --}}
                                           
                                           <div class="row">
                                            <div class="card card-accent-theme">
                                            <form action="{{ url('admin/master/gambar/upload/') }}/{{ $id }}/0" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                                <div class="card-body">
                                                    <h4 class="text-theme">Unggah Foto Utama</h4>
                                                    <small>(*) Maksimum 2 mb yahh</small>
                                                    @if($cek == 0)
                                                            <input type="file" name="photos" id="input-file-now-custom-2" class="dropify" data-height="200" data-default-file="{{ asset('images/produk/default.PNG') }}" data-show-remove="false"/>
                                                    @endif
                                                    
                                                    @if ($cek != 0)
                                                        @foreach ($utama as $utm)
                                                            <input type="file" name="photos" id="input-file-now-custom-2" class="dropify" data-height="200" data-default-file="{{ asset('images/produk') }}/{{ $utm->pc_file }}" data-show-remove="false"/>
                                                        @endforeach
                                                    @endif
                                                    
                                                </div>
                                                <div class="pull-right">
                                                    @if ($cek != 0)
                                                        @foreach ($utama as $utm)
                                                            <a href="{{ url('admin/master/gambar/delete/') }}/{{ $id }}/0/{{ $utm->pc_file }}" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
                                                        @endforeach
                                                    @endif
                                                
                                                    <button type="submit" class="btn btn-outline-success btn-sm">Update Gambar <i class="mdi mdi-refresh"></i></button>
                                                </div>
                                            </form>
                                            </div>
                                           </div>
                                         </div>
                                    </div>
                                    <div class="row ml-2">
                                        <div class="col-md-3" id="upload_main_image">
                                            {{-- form upload disini --}}
                                            <div class="row">
                                                <div class="card card-accent-theme">
                                                    <form action="{{ url('admin/master/gambar/upload/') }}/{{ $id }}/1" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                        <div class="card-body">
                                                            <h5 class="text-theme">Foto 2</h5>
                                                            <small>(*) Maksimum 2 mb yahh</small>
                                                            @if($cek1 == 0)
                                                                    <input type="file" name="photos" id="input-file-now-custom-2" class="dropify" data-height="200" data-default-file="{{ asset('images/produk/default.PNG') }}" data-show-remove="false"/>
                                                            @endif
                                                            
                                                            @if ($cek1 != 0)
                                                                @foreach ($foto1 as $utm)
                                                                    <input type="file" name="photos" id="input-file-now-custom-2" class="dropify" data-height="200" data-default-file="{{ asset('images/produk') }}/{{ $utm->pc_file }}" data-show-remove="false"/>
                                                                @endforeach
                                                            @endif
                                                            
                                                        </div>
                                                        <div class="pull-right">
                                                            @if ($cek1 != 0)
                                                                @foreach ($foto1 as $utm)
                                                                    <a href="{{ url('admin/master/gambar/delete/') }}/{{ $id }}/1/{{ $utm->pc_file }}" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
                                                                @endforeach
                                                            @endif
                                                        
                                                            <button type="submit" class="btn btn-outline-success btn-sm">Update Gambar <i class="mdi mdi-refresh"></i></button>
                                                        </div>
                                                    </form>
                                                    </div>
                                            </div>
                                          </div>
                                        <!-- end inside col -->
                                        <div class="col-md-3" id="upload_main_image">
                                            {{-- form upload disini --}}
                                            <div class="row">
                                                <div class="card card-accent-theme">
                                                    <form action="{{ url('admin/master/gambar/upload/') }}/{{ $id }}/2" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                        <div class="card-body">
                                                            <h5 class="text-theme">Foto 3</h5>
                                                            <small>(*) Maksimum 2 mb yahh</small>
                                                            @if($cek2 == 0)
                                                                    <input type="file" name="photos" id="input-file-now-custom-2" class="dropify" data-height="200" data-default-file="{{ asset('images/produk/default.PNG') }}" data-show-remove="false"/>
                                                            @endif
                                                            
                                                            @if ($cek2 != 0)
                                                                @foreach ($foto2 as $utm)
                                                                    <input type="file" name="photos" id="input-file-now-custom-2" class="dropify" data-height="200" data-default-file="{{ asset('images/produk') }}/{{ $utm->pc_file }}" data-show-remove="false"/>
                                                                @endforeach
                                                            @endif
                                                            
                                                        </div>
                                                        <div class="pull-right">
                                                            @if ($cek2 != 0)
                                                                @foreach ($foto2 as $utm)
                                                                    <a href="{{ url('admin/master/gambar/delete/') }}/{{ $id }}/2/{{ $utm->pc_file }}" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
                                                                @endforeach
                                                            @endif
                                                        
                                                            <button type="submit" class="btn btn-outline-success btn-sm">Update Gambar <i class="mdi mdi-refresh"></i></button>
                                                        </div>
                                                    </form>
                                                    </div>
                                            </div>
                                          </div>
                                    <!-- end inside col -->
                                    <!-- end inside col -->
                                    <div class="col-md-3" id="upload_main_image">
                                        {{-- form upload disini --}}
                                        <div class="row">
                                            <div class="card card-accent-theme">
                                                <form action="{{ url('admin/master/gambar/upload/') }}/{{ $id }}/3" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <div class="card-body">
                                                        <h5 class="text-theme">Foto 4</h5>
                                                        <small>(*) Maksimum 2 mb yahh</small>
                                                        @if($cek3 == 0)
                                                                <input type="file" name="photos" id="input-file-now-custom-2" class="dropify" data-height="200" data-default-file="{{ asset('images/produk/default.PNG') }}" data-show-remove="false"/>
                                                        @endif
                                                        
                                                        @if ($cek3 != 0)
                                                            @foreach ($foto3 as $utm)
                                                                <input type="file" name="photos" id="input-file-now-custom-2" class="dropify" data-height="200" data-default-file="{{ asset('images/produk') }}/{{ $utm->pc_file }}" data-show-remove="false"/>
                                                            @endforeach
                                                        @endif
                                                        
                                                    </div>
                                                    <div class="pull-right">
                                                        @if ($cek3 != 0)
                                                            @foreach ($foto3 as $utm)
                                                                <a href="{{ url('admin/master/gambar/delete/') }}/{{ $id }}/3/{{ $utm->pc_file }}" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
                                                            @endforeach
                                                        @endif
                                                    
                                                        <button type="submit" class="btn btn-outline-success btn-sm">Update Gambar <i class="mdi mdi-refresh"></i></button>
                                                    </div>
                                                </form>
                                                </div>
                                        </div>
                                      </div>
                                <!-- end inside col -->
                                <!-- end inside col -->
                                    <div class="col-md-3" id="upload_main_image">
                                        {{-- form upload disini --}}
                                        <div class="row">
                                            <div class="card card-accent-theme">
                                                <form action="{{ url('admin/master/gambar/upload/') }}/{{ $id }}/4" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <div class="card-body">
                                                        <h5 class="text-theme">Foto 5</h5>
                                                        <small>(*) Maksimum 2 mb yahh</small>
                                                        @if($cek4 == 0)
                                                                <input type="file" name="photos" id="input-file-now-custom-2" class="dropify" data-height="200" data-default-file="{{ asset('images/produk/default.PNG') }}" data-show-remove="false"/>
                                                        @endif
                                                        
                                                        @if ($cek4 != 0)
                                                            @foreach ($foto4 as $utm)
                                                                <input type="file" name="photos" id="input-file-now-custom-2" class="dropify" data-height="200" data-default-file="{{ asset('images/produk') }}/{{ $utm->pc_file }}" data-show-remove="false"/>
                                                            @endforeach
                                                        @endif
                                                        
                                                    </div>
                                                    <div class="pull-right">
                                                        @if ($cek4 != 0)
                                                            @foreach ($foto4 as $utm)
                                                                <a href="{{ url('admin/master/gambar/delete/') }}/{{ $id }}/4/{{ $utm->pc_file }}" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
                                                            @endforeach
                                                        @endif
                                                    
                                                        <button type="submit" class="btn btn-outline-success btn-sm">Update Gambar <i class="mdi mdi-refresh"></i></button>
                                                    </div>
                                                </form>
                                                </div>
                                        </div>
                                      </div>
                            <!-- end inside col -->

                                      

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
@endsection

@section('js-content')


        <script>
            $(document).ready(function(){
                //fetchRecords();

                $('.dropify').dropify();

                $("body").on("click",".btn-duplicator", clone_model);
                $("body").on("click",".btn-remove", remove);

                //Functions
                function clone_model() {
                var b = $(this).parent(".duplicateable-content"),
                    c = $(".model").clone(true, true);

                c.removeClass('model');
                c.find('input').addClass('dropify');

                $(b).before(c);
                $('.dropify').dropify();
                console.log('jalan dong clone');
                }

                function remove() {
                $(this).closest('.duplicateable-content').remove();
                }
                
                $(document).on("click", "#update", function() {
                    var id = {{ $id }};
                    $.ajax({
                        url: '/admin/master/gambar/view/'+id,
                        success: function(result){
                            $('.dropify').dropify();
                            const div = document.createElement('div');

                            div.className = 'row';

                            div.innerHTML = `
                            <div class="card card-accent-theme">
                                <div class="card-body">
                                    <h4 class="text-theme">Unggah Foto Utama</h4>
                                    <input type="file" id="input-file-now-custom" class="dropify" data-height="200" />
                                </div>
                            </div>
                            `;

                            document.getElementById('upload_main_image').appendChild(div);
                            
                            console.log('jalan lagi');
                            }
                        });
                    });


                    function fetchRecords(){
                        var id = {{ $id }};

                        $.ajax({
                            url: 'get/'+id,
                            type: 'get',
                            dataType: 'json',
                            success: function(response){
                                if(response['utama'] != null){
                                    var len = len = response['utama'].length;
                                    console.log(len);

                                }
                            }
                        });
                    }

                });
        </script>
        
        
        <!-- dropify -->
        <script src="{{ asset('vendor/libs/dropify/dist/js/dropify.min.js') }}"></script>


        <!-- dropify examples -->
        <script src="{{ asset('vendor/js/dropify-examples.js') }}"></script>
@endsection
