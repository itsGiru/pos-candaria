@extends('layouts.app')

@section('content-header', 'Dashboard')

@section('content')
<div class="row">
  <div class="col-md-12">
  <div class="card card-primary">
  <div class="card-header info">
  <h3 class="card-title">Dashboard</h3>
</div>
</div>
</div>
</div>

<div class="container-fluid">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

      {{ __('Kamu login sebagai') }} <b> {{ Auth::user()->name }} </b> <b>
    @if(Auth::user()->role === "1")
        (Admin)
    @elseif(Auth::user()->role === "2")
        (Kasir)
    @elseif(Auth::user()->role === "3")
        (Menunggu Persetujuan)
    @else
        (Peran Tidak Dikenal)
    @endif</b>
    </div>

    @if (Auth::user()->role == 1 )
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
              <h4>{{$orders_count}}</h4>
            <p>Total Transaksi</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <div class="small-box">
          <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
              <h4>{{config('settings.currency_symbol')}} {{number_format($income, 2)}}</h4>
            <p>Pemasukan</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h4>{{$products_count}}</h4>
            <p>Total Produk</p>
          </div>
          <div class="icon">
            <i class="ion ion-pricetags"></i>
          </div>
          <a href="/products" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
</div>
@endif

@if (Auth::user()->role == 2 )
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
              <h4>{{$orders_count}}</h4>
            <p>Total Transaksi</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <div class="small-box">
          <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
              <h4>{{config('settings.currency_symbol')}} {{number_format($income, 2)}}</h4>
            <p>Pemasukan</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h4>{{$products_count}}</h4>
            <p>Total Produk</p>
          </div>
          <div class="icon">
            <i class="ion ion-pricetags"></i>
          </div>
          <a href="/products" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
</div>
@endif

@if (Auth::user()->role == 3 )
  <div class="alert alert-warning" role="alert">
    Akunmu sedang menunggu persetujuan Admin
  </div>
@endif

</div>
@endsection