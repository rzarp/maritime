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
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
              </div>
            </div>
            <div class="row mb-5">
            @forelse($product as $p)
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="#"><img src="{{asset($p->gambar)}}" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="{{ route('detail.shop',$p->id) }}">{{$p->judul}}</a></h3>
                    <p class="mb-0">{{$p->kategori}}</p>
                    <p class="mb-0">{{$p->desk}}</p>
                    <p class="mb-0">{{$p->user['name']}}</p>
                    <p class="text-primary font-weight-bold">Rp.{{$p->harga}}</p>
                  </div>
                </div>
              </div>
            @empty
            <p class="text-justify bold">Data Kosong</p>
            @endforelse
              {{-- <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.html"><img src="{{asset('boostrap/images/cloth_1.jpg')}}" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html">Corater</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.html"><img src="{{asset('boostrap/images/cloth_1.jpg')}}" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html">Polo Shirt</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div> --}}
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                  <ul>
                    {{ $product->links() }}
                  </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="{{route('dashboard.hasilhutan')}}" class="d-flex"><span>Hasil Hutan</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.rumahtangga')}}" class="d-flex"><span>Rumah Tangga</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.manufaktur')}}" class="d-flex"><span>Manufaktur</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.pengeringanikan')}}" class="d-flex"><span>Pengeringan Ikan</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.pengolahanmakanan')}}" class="d-flex"><span>Pengolahan Makanan</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.pertenunan')}}" class="d-flex"><span>Pertenunan</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.pengolahanikan')}}" class="d-flex"><span>Pengolahan Ikan</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.perebusanikanteri')}}" class="d-flex"><span>Perebusan Ikan Teri</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.pengawetanikan')}}" class="d-flex"><span>Pengawetan Ikan</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.pengasapanikan')}}" class="d-flex"><span>Pengasapan Ikan</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.pembekuanikan')}}" class="d-flex"><span>Pembekuan Ikan</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.pakaianjadi')}}" class="d-flex"><span>Pakaian Jadi</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.kerajinan')}}" class="d-flex"><span>Kerajinan</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.industrilba')}}" class="d-flex"><span>Industri Berbasis Lumatan Biota Air</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.batik')}}" class="d-flex"><span>Batik</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.logamelektro')}}" class="d-flex"><span>Logam Dan Elektronik</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.kerajinanumum')}}" class="d-flex"><span>Kerajinan Umum</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.kimiabahanbangunan')}}" class="d-flex"><span>Kimia Dan Bahan Bangunan</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.perahunelayan')}}" class="d-flex"><span>Pembuatan Perahu Nelayan</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.esbatubelah')}}" class="d-flex"><span>Pabrik Es Batu Belah</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.esantang')}}" class="d-flex"><span>Pabrik Es Antang</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.ikanasin')}}" class="d-flex"><span>Ikan Asin</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.minyakkelapa')}}" class="d-flex"><span>Minyak Kelapa</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="{{route('dashboard.kayu')}}" class="d-flex"><span>Kayu</span> <span class="text-black ml-auto">(2,220)</span></a></li>
              </ul>
            </div>

           
          </div>
        </div>
      
      </div>
    </div>
@endsection