<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
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

      <!-- SidebarSearch Form -->
      {{--<div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>--}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{--<li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>--}}
          <li class="nav-item">
            <a href="{{URL::to('/home')}}" class="nav-link {{ activeSegment('home', 1) }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-header">Manajemen</li>
@if (Auth::user()->role == 1 )
          <li class="nav-item">
            <a href="{{URL::to('/user_list')}}" class="nav-link {{ activeSegment('user_list', 1) }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                List Akun
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        
@endif
<li class="nav-header">Transaksi</li>
<li class="nav-item has-treeview">
  <a href="{{ route('cart.index') }}" class="nav-link {{ activeSegment('cart') }}">
      <i class="nav-icon fas fa-barcode"></i>
      <p>Transaksi Baru</p>
  </a>
</li>
<li class="nav-item has-treeview">
  <a href="{{ route('products.index') }}" class="nav-link {{ activeSegment('products', 1) }}">
      <i class="nav-icon fas fa-th-large"></i>
      <p>Produk</p>
  </a>
</li>

@if (Auth::user()->role == 2 )

     
        
@endif
<li class="nav-item">
  <a href="{{URL::to('/changelogs')}}" class="nav-link {{ activeSegment('changelogs', 1) }}">
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

<li class="nav-item">
  <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
    <i class="nav-icon fas fa-sign-out-alt"></i>
    <p>Keluar</p>
    <form action="{{route('logout')}}" method="POST" id="logout-form">
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