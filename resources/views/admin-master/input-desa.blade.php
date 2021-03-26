@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Input Penduduk</h1>        
    </div>

    @if (session()->has('pesan'))
    <div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>×</span>
        </button>
        {{ session()->get('pesan') }}
    </div>
    </div>
    @endif

    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf                                
    <div class="row">
<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  
                  <div class="card-body">
                    <div class="form-group">
                      <label>Satuan Kerja</label>
                      <input type="text" name="name" class="form-control" placeholder="satker" required>
                    </div>
                     <div class="form-group">
                      <label>Provinsi</label>
                      <input type="text" name="wilayah" class="form-control" placeholder="Provinsi" required>
                    </div>
                    <div class="form-group">
                      <label>Kabupate</label>
                      <input type="text" name="penduduk" class="form-control" placeholder="Kabupaten" required>
                    </div>
                    <div class="form-group">
                      <label>Kecamatan</label>
                      <input type="text" name="pria" class="form-control" placeholder="kecamatan" required>
                    </div>
                    <div class="form-group">
                      <label>Kelurahan</label>
                      <input type="text" name="wanita" class="form-control" placeholder="Kelurahan" required>
                    </div>
                    <div class="form-group">
                      <label>Jumlah Penduduk</label>
                      <input type="text" name="delapanbelas" class="form-control" placeholder="Jumlah Penduduk" required>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-danger" type="reset" value="Reset">Reset</button>
                        <button class="btn btn-primary" type="submit">Input</button>
                    </div>
                  </div>
                </div>
              </div>     
    </div>

    </form> 
@endsection