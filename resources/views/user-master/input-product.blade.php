@extends('user-master.base')
@section('content')
    <div class="section-header">
        <h1>Input Product</h1>        
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

    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf                                
    <div class="row">
<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Input Product</h4>
                  </div>
                  <div class="card-body">
                  <input name="user_id" type="hidden" value="">
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                    </div>
                    <div class="form-group">
                    <label>Harga</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                            </div>
                            <input type="number" class="form-control" name="harga" placeholder="Harga" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control select2" name="kategori">
                        <option>Hasil Hutan</option>
                        <option>Rumah Tangga</option>
                        <option>Manufaktur</option>
                        <option>Pengeringan Ikan</option>
                        <option>Pengolahan Makanan</option>
                        <option>Pertenunan</option>
                        <option>Pengolahan Ikan</option>
                        <option>Perebusan Ikan Teri</option>
                        <option>Pengawetan Ikan</option>
                        <option>Pengasapan Ikan</option>
                        <option>Pembekuan Ikan</option>
                        <option>Pakaian Jadi</option>
                        <option>Kerajinan</option>
                        <option>Industri Berbasis Lumatan Biota Air</option>
                        <option>Batik</option>
                        <option>Logam Dan Elektronik</option>
                        <option>Kerajinan Umum</option>
                        <option>Kimia Dan Bahan Bangunan</option>
                        <option>Pembuatan Perahu Nelayan</option>
                        <option>Pabrik Es Batu Belah</option>
                        <option>Pabrik Es Antang</option>
                        <option>Ikan Asin</option>
                        <option>Minyak Kelapa</option>
                        <option>Kayu</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>No Wa</label>
                      <input type="tel" name="wa" class="form-control" value="0858xxxxx" placeholder="Whatsapp" required>
                    </div>
                    <div class="form-group">
                        <form>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Input Gambar</label>
                            <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1" required>
                          </div>
                        </form>
                        <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                    </div>
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea class="form-control" rows="3" name="desk" required></textarea>
                    </div>
                     <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" rows="3" name="alamat" required></textarea>
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