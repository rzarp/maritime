@extends('dashboard.base')
@section('content')
     <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Detail Pariwisata</strong></div>
        </div>
      </div>
    </div>  
@foreach ($pariwisata as $ps)
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset($ps->gambar)}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black">{{$ps->judul}}</h2>
            <p>desk {{$ps->deskripsi}}</p>
            <p class="mb-2">Informasi Penjual : {{$ps->user['name']}}</p>
            <p class="mb-2">kontak {{$ps->kontak}}</p>
            <p><strong class="text-primary h4">htm {{$ps->htm}}</strong></p>
            <p class="mb-2">fasilitas {{$ps->fasilitas}}</p>
            <p class="mb-2">alamat {{$ps->alamat}}</p>
            
            {{-- <p><a href="https://api.whatsapp.com/send?phone={{$ps->kontak}}" class="buy-now btn btn-sm btn-success">whatsapp</a></p> --}}

          </div>
        </div>
      </div>
    </div>
    @endforeach

    

@endsection