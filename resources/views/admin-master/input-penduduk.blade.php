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
                      <label>Nama Wilayah</label>
                      <input type="text" name="wilayah" class="form-control" placeholder="Nama Wilayah" required>
                    </div>
                    <div class="form-group">
                      <label>Jumlah Penduduk (Orang) </label>
                      <input type="text" name="penduduk" class="form-control" placeholder="Jumlah Penduduk" required>
                    </div>
                    <div class="form-group">
                      <label>Pria</label>
                      <input type="text" name="pria" class="form-control" placeholder="Jumlah Pria" required>
                    </div>
                    <div class="form-group">
                      <label>Wanita</label>
                      <input type="text" name="wanita" class="form-control" placeholder="Jumlah Wanita" required>
                    </div>
                    <div class="form-group">
                      <label>0-18 (Tahun)</label>
                      <input type="text" name="delapanbelas" class="form-control" placeholder="0-18 (Tahun)" required>
                    </div>
                    <div class="form-group">
                      <label>18-40 (Tahun)</label>
                      <input type="text" name="delapanbelas" class="form-control" placeholder="18-40 (Tahun)" required>
                    </div>
                    <div class="form-group">
                      <label>40-45 (Tahun)</label>
                      <input type="text" name="delapanbelas" class="form-control" placeholder="40-45 (Tahun)" required>
                    </div>
                    <div class="form-group">
                      <label>>55 (Tahun)</label>
                      <input type="text" name="delapanbelas" class="form-control" placeholder=">55 (Tahun)" required>
                    </div>
                    <div class="form-group">
                      <label>Tahun</label>
                      <input type="text" name="delapanbelas" class="form-control" placeholder="Tahun" required>
                    </div>

                    <div class="form-group">
                      <label>Kelahiran</label>
                      <input type="text" name="delapanbelas" class="form-control" placeholder="Kelahiran" required>
                    </div>

                    <div class="form-group">
                      <label>Kematian</label>
                      <input type="text" name="delapanbelas" class="form-control" placeholder="Kematian" required>
                    </div>

                    <div class="form-group">
                      <label>Smp</label>
                      <input type="text" name="delapanbelas" class="form-control" placeholder="Smp" required>
                    </div>

                    <div class="form-group">
                      <label>SMA</label>
                      <input type="text" name="delapanbelas" class="form-control" placeholder="SMA" required>
                    </div>

                    <div class="form-group">
                      <label>S1</label>
                      <input type="text" name="delapanbelas" class="form-control" placeholder="S1" required>
                    </div>

                    <div class="form-group">
                      <label>S2</label>
                      <input type="text" name="delapanbelas" class="form-control" placeholder="S2" required>
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