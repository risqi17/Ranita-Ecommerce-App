<div class="app-body">
    <div class="sidebar" id="sidebar">
        <nav class="sidebar-nav" id="sidebar-nav-scroller">
            <ul class="nav">
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="mdi mdi-gauge"></i> Dashboard
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="../../contents/dashboards/dashboard-sales.html"> Penjualan </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../contents/dashboards/dashboard-property.html"> Stok Barang </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../contents/dashboards/dashboard-project-management.html"> Analisis </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-title">
                    Penjualan / Sales
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-check-all"></i> Konfirmasi Pemesanan</a>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-airplane-takeoff"></i> Tracking Barang</a>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-widgets"></i> Issue Sales</a>
                </li>


                <li class="nav-title">
                    Transaksi
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-chart-areaspline"></i> Transaksi </a>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-chart-bubble"></i> Advanced Analytics </a>

                </li>


                <li class="nav-title">Master</li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="mdi mdi-layers"></i> Barang
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/master/barang') }}"> Master Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/master/stok') }}"> Stok Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/master/gambar') }}"> Gambar Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/master/size') }}"> Size Barang</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/master/kategori') }}"> Master Kategori</a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="mdi mdi-account-card-details"></i> User </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="../../contents/layouts/sidebar-dark.html"> Master User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../contents/layouts/sidebar-dark.html"> Master Buyer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../contents/layouts/sidebar-light.html"> Master Alamat </a>
                        </li>
                    </ul>

                </li>


            </ul>
        </nav>

    </div>
    <!-- end sidebar -->
