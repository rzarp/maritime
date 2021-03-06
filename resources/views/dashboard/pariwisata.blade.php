@extends('dashboard.base')
@section('content')
  <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-2">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Pariwisata</h2></div>
              </div>
            </div>
            <div class="row mb-5">
            @forelse($pariwisata as $ps)
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="#"><img src="{{asset($ps->gambar)}}" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="{{ route('detail.pariwisata',$ps->id) }}">{{$ps->judul}}</a></h3>
                    <p class="mb-0">{{$ps->deskripsi}}</p>
                    <p class="mb-0">{{$ps->alamat}}</p>
                  </div>
                </div>
              </div>
            @empty
            <p class="text-justify bold">Data Kosong</p>
            @endforelse
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                  <ul>
                    {{ $pariwisata->links() }}
                  </ul>
              </div>
            </div>
          </div>

          
        
        
      </div>
    </div>
@endsection