@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Lihat Data User</h1>        
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
        <div class="col-md-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Full Width</h4>
                    <a class="btn btn-primary" href="">Input</a>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th>Id</th>
                            <th>Satker</th>
                            <th>Wilayah</th>
                            <th>Jmlh Penduduk</th>
                            <th>Pria</th>
                            <th>Wanita</th>
                            <th>0-18 Tahun</th>
                            <th>18-40 Tahun</th>
                            <th>40-45 Tahun</th>
                            <th> >55 Tahun</th>
                            <th>Tahun</th>
                            <th>Kelahiran</th>
                            <th>Kematian</th>
                            <th>Smp</th>
                            <th>SMA</th>
                            <th>S1</th>
                            <th>S2</th>
                            <th>Action</th>
                        </tr>
                        {{-- <tr>
                          <td>1</td>
                          <td>Irwansyah Saputra</td>
                          <td>2017-01-09</td>
                          <td><div class="badge badge-success">Active</div></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                         --}}
                      </tbody></table>
                    </div>
                  </div>
                  
              </div>
    </div>


    

    
@endsection

{{-- @section('script')

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
</script> --}}


{{-- @endsection --}}
