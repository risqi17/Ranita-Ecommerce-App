<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Admin, Dashboard, Bootstrap" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>LVMCH - Store Administration</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vendor/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vendor/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendor/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('vendor/img/favicon/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('vendor/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('vendor/fonts/md-fonts/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    @yield('css-content')

    <!-- octadmin main style -->
    <link id="pageStyle" rel="stylesheet" href="{{ asset('vendor/css/style-xing.css') }}">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="app sidebar-fixed aside-menu-off-canvas aside-menu-hidden header-fixed">

        @include('admin._navbar')

        @include('admin._sidebar')

        @yield('content')

    </div>
    <!-- end app-body -->



    <footer class="app-footer">
        <a href="#" class="text-theme">LVMCH</a> &copy; 2020 Administration.
    </footer>




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

    @yield('js-content')



</body>

</html>
