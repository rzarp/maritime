@extends('dashboard.base')
@section('content')
     <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">About</strong></div>
        </div>
      </div>
    </div>  
    <div class="site-section">
      <div class="container">
      @forelse($about as $ab)
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-black">{{$ab->title}}</h2>
            <hr>
            <p>
               {{$ab->description}}
            </p>    
          </div>
          @empty
          <div class="col-md-12">
            <h2 class="text-black">Data Kosong</h2>
          </div>
        </div>
      </div>
      @endforelse
    </div>
    

    

@endsection