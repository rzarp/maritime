@extends('user-master.base')
@section('content')
<div class="section-header">
    <h1>Dashboard</h1>         
</div>
<div class="row">
  <div class="col-12 mb-4">
    <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="../assets/img/unsplash/andre-benz-1214056-unsplash.jpg">
      <div class="hero-inner">
        <h2>Welcome, {{ Auth::user()->name }} !</h2>
        <p class="lead">Anda telah selesai mendaftar, Silahkan jika ingin menambahkan produk atau tempat pariwisata</p>
         <div class="mt-4">
          <a href="/product/input" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-columns"></i> Input Product</a>
          <a href="/pariwisata/input" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-map-marker-alt"></i> Input Pariwisata</a>
        </div>
      </div>
    </div>
  </div>           
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="fas fa-columns"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Product</h4>
        </div>
        <div class="card-body">
          {{$product}}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-success">
        <i class="fas fa-map-marker-alt"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Pariwisata</h4>
        </div>
        <div class="card-body">
          {{$pariwisata}}
        </div>
      </div>
    </div>
  </div>
</div>    
@endsection