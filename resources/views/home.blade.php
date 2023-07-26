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

      {{ __('Kamu login sebagai') }} <b> {{ Auth::user()->name }} </b> <b> {{ Auth::user()->role === "1" ? '(Admin)' : '(Kasir)' }} </b>
    </div>
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
              <h4>{{$orders_count}}</h4>
            <p>Sell Orders Count</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <div class="small-box">
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
              <h4>{{config('settings.currency_symbol')}} {{number_format($income, 2)}}</h4>
            <p>Income</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h4>{{$buys_count}}</h4>

            <p>Buy Order Count</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
              <h4>{{config('settings.currency_symbol')}} {{number_format($outcome, 2)}}</h4>
            <p>Outcome</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
</div>
</div>
@endsection
