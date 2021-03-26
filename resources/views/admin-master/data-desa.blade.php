@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Lihat Data Desa</h1>        
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
                    <h4>Desa Binaan</h4>
                    <a class="btn btn-primary" href="">Print</a>
                  </div>
                  
                  <div class="card-body">
                    <table class="table data-table">
                      <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">satker</th>
                            <th scope="col">provinsi</th>
                            <th scope="col">Kabupate</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Kelurahan</th>
                            <th scope="col">Jumlah Penduduk</th>
                            <th scope="col">Action</th>
                        </tr>
                      </thead>
                        
                        </tbody> 
                    </table>
                  </div>
                </div>
              </div>
    </div>


    

    
@endsection

@section('script')

<script>
  $('body').on('click','.delete-confirm',function (event) {
    event.preventDefault();
    const url = $(this).attr('href');

    Swal.fire({
      title: 'Apakah Kamu Yakin ? ',
      text: "Hapus Data ini!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus'
    }).then((result) => {
      if (result.value) {
        window.location.href = url;
      }
    })
  });
</script>


@endsection
