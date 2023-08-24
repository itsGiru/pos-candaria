<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
        <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt=""
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://www.gravatar.com/avatar/" class="img-circle elevation-2" alt="">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @if (Auth::user()->role == 1)
                    <li class="nav-item">
                        <a href="{{ URL::to('/home') }}" class="nav-link {{ activeSegment('home', 1) }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-header">Manajemen</li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/user_list') }}" class="nav-link {{ activeSegment('user_list', 1) }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                List Akun
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('products.index') }}" class="nav-link {{ activeSegment('products', 1) }}">
                            <i class="nav-icon fas fa-th-large"></i>
                            <p>
                                Produk
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">Transaksi</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link {{ activeSegment('cart', 1) }}">
                            <i class="nav-icon fas fa-barcode"></i>
                            <p>Transaksi Baru</p>
                        </a>
                    </li>
                    <li class="nav-header">Laporan</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link {{ activeSegment('orders', 1) }}">
                            <i class="nav-icon fas fa-cart-plus"></i>
                            <p>Riwayat</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ activeSegment('changelogs', 1) }}">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>Perubahan</p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="{{ route('settings.index') }}" class="nav-link {{ activeSegment('settings', 1) }}">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>Pengaturan</p>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->role == 2)
                    <li class="nav-item">
                        <a href="{{ URL::to('/home') }}" class="nav-link {{ activeSegment('home', 1) }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-header">Manajemen</li>
                    <li class="nav-item">
                        <a href="{{ route('products.index') }}" class="nav-link {{ activeSegment('products', 1) }}">
                            <i class="nav-icon fas fa-th-large"></i>
                            <p>
                                Produk
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">Transaksi</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link {{ activeSegment('cart', 1) }}">
                            <i class="nav-icon fas fa-barcode"></i>
                            <p>Transaksi Baru</p>
                        </a>
                    </li>
                    <li class="nav-header">Laporan</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link {{ activeSegment('orders', 1) }}">
                            <i class="nav-icon fas fa-cart-plus"></i>
                            <p>Riwayat</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ activeSegment('changelogs', 1) }}">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>Perubahan</p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="{{ route('settings.index') }}" class="nav-link {{ activeSegment('settings', 1) }}">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>Pengaturan</p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Keluar</p>
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
