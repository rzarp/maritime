@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Input Berita</h1>        
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

    <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
     @csrf                                  
    <div class="row">
<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Input Berita</h4>
                  </div>
                  <div class="card-body">
                  <input name="user_id" type="hidden" value="">
                    <div class="form-group">
                      <label>title</label>
                      <input type="text" name="judul" class="form-control" placeholder="Judul" required>
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
                        <button class="btn btn-danger" type="reset" value="Reset">Reset</button>
                        <button class="btn btn-primary" type="submit">Input</button>
                    </div>
                  </div>
                </div>
              </div>     
    </div>

    </form> 
@endsection