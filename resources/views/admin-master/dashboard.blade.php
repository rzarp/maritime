@extends('admin-master.base')
@section('content')
<div class="section-header">
    <h1>Dashboard</h1>         
</div>
<div class="row">
<div class="col-12 mb-4">
    <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="../assets/img/unsplash/andre-benz-1214056-unsplash.jpg">
      <div class="hero-inner">
        <h2>Welcome, {{ Auth::user()->name }} !</h2>
        <p class="lead">Selamat Datang Kembali</p>
         <div class="mt-4">
          <a href="/admin/home" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-fire"></i> Dashboard</a>
        </div>
      </div>
    </div>
  </div>      
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="far fa-user"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total User</h4>
        </div>
        <div class="card-body">
          {{$user}}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="far fa-newspaper"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>News</h4>
        </div>
        <div class="card-body">
            {{$berita}}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-warning">
        <i class="far fa-id-card"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
           <h4>Contact</h4>
        </div>
        <div class="card-body">
          {{$contact}}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-success">
        <i class="fas fa-circle"></i>
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
</div>  
@endsection