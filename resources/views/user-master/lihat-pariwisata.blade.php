@extends('user-master.base')
@section('content')
    <div class="section-header">
        <h1>Lihat Pariwisata</h1>
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

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Simple</h4>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Desc</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tiket</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Fasilitas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
    </div>


@endsection