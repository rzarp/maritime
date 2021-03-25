@extends('dashboard.base')
@section('content')
     <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Visi Misi</strong></div>
        </div>
      </div>
    </div>  
    <div class="site-section">
      <div class="container">
      @forelse($vismis as $v)
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-black">Visi</h2>
            <p>{{$v->visi}}</p>    
            <h2 class="text-black">Misi</h2>
            <p>{{$v->misi}}</p>    
          </div>
          
        </div>
        @empty
        <div class="col-md-12">
          <h2 class="text-black">Data Kosong</h2>   
        </div>
      </div>
      @endforelse
    </div>
    

    

@endsection