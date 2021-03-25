@extends('user-master.base')
@section('content')
    <div class="section-header">
        <h1>Edit Pariwisata</h1>        
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

    <form action="{{ route('pariwisata.update',['id' => $pariwisata->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @method('PUT')
        @csrf                                
    <div class="row">
<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Pariwisata</h4>
                  </div>
                  <div class="card-body">
                  <input name="user_id" type="hidden" value="">
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" name="judul" class="form-control" placeholder="Judul" required value="{{ $pariwisata->judul}}">
                      @error('judul')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                    <label>Deskripsi</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                            </div>
                            <input type="tel" class="form-control" name="deskripsi" placeholder="Harga" aria-label="Username" aria-describedby="basic-addon1" required value="{{ $pariwisata->deskripsi}}">
                        @error('deskripsi')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="tel" name="alamat" class="form-control" placeholder="alamat" required value="{{ $pariwisata->alamat}}">
                      @error('alamat')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Harga Tiket Masuk </label>
                        <input type="number" name="htm" class="form-control" placeholder="alamat" required value="{{ $pariwisata->htm}}">
                        @error('alamat')
                              <div class="text-danger">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label>Contact </label>
                        <input type="tel" name="kontak" class="form-control" placeholder="alamat" required value="{{ $pariwisata->kontak}}">
                        @error('alamat')
                              <div class="text-danger">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                    <div class="form-group">
                        <form>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Input Gambar</label>
                            <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1" required>
                             @error('gambar')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                        </form>
                        <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                    </div>
                    <div class="form-group">
                      <label>Fasilitas</label>
                      <textarea class="form-control" rows="3" name="fasilitas" required >{{ $pariwisata->desk}}</textarea>
                       @error('fasilitas')
                        <div class="text-danger">
                          {{ $message }}
                        </div>
                      @enderror
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