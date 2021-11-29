<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Admin, Dashboard, Bootstrap" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>LVMCH - Administration</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vendor/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vendor/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendor/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('vendor/img/favicon/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('vendor/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('vendor/fonts/md-fonts/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/animate.css/animate.min.css') }}">
     <!-- jquery-loading -->
     <link rel="stylesheet" href="{{ asset('vendor/libs/jquery-loading/dist/jquery.loading.min.css') }}">

    <!-- octadmin main style -->
    <link id="pageStyle" rel="stylesheet" href="{{ asset('vendor/css/style-xing.css') }}">

</head>

<body>
    <section class="container-pages">

        <div class="brand-logo float-left"><a class="" href="#"> LVMCH</a></div>

        <div class="pages-tag-line text-white">
            <div class="h4">Halaman Administration .!</div>
            <small> Selamat datang di LVMCH Administration</small>
        </div>

        <div class="card pages-card col-lg-4 col-md-6 col-sm-6">
            <div class="card-body ">
                <div class="h4 text-center text-theme"><strong>Login</strong></div>
                <div class="small text-center text-dark"> Login to Account </div>

                    <form action="{{ url('auth/dologin') }}" method="post" >
                        @csrf

                        <div class="form-group">
                            <div class="input-group">
                                 <span class="input-group-addon text-theme"><i class="fa fa-user"></i>
                                </span>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon text-theme"><i class="fa fa-asterisk"></i></span>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">

                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <button type="submit" class="btn  btn-theme login-btn ">   Login   </button>
                        </div>
                    </form>



            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </section>
    <!-- end section container -->
    <div class="half-circle"></div>
    <div class="small-circle"></div>

    <div id="mybutton">
            <div class="btn-group dropup">
                 <button type="button" class="btn btn-round btn-theme " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="mdi mdi-account-circle"></i>
                 </button>
            </div>
         </div>
         <!-- end mybutton -->


        <!-- Bootstrap and necessary plugins -->
        <script src="{{ asset('vendor/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/libs/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/libs/PACE/pace.min.js') }}"></script>
        <script src="{{ asset('vendor/libs/chart.js/dist/Chart.min.js') }}"></script>
        <script src="{{ asset('vendor/libs/nicescroll/jquery.nicescroll.min.js') }}"></script>

        <!-- jquery-loading -->
        <script src="{{ asset('vendor/libs/jquery-loading/dist/jquery.loading.min.js') }}"></script>

        <!-- octadmin Main Script -->
        <script src="{{ asset('vendor/js/app.js') }}"></script>

</body>

</html>
