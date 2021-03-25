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
                    <h4>Data Pariwisata</h4>
                  </div>
                  <div class="card-body">
                    <table class="table data-table">
                      <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Desc</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Harga Tiket Masuk</th>
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
@section('script')
<script>
    $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('lihat.pariwisata')}}",
        columns: [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
            },            
            {
                data: 'judul',
                name: 'judul',
            },
            {
                data: 'deskripsi',
                name: 'deskripsi',
            },
            {
                data: 'alamat',
                name: 'alamat',
            },
            {
                data: 'htm',
                name: 'htm',
            },
            {
                data: 'kontak',
                name: 'kontak',
            },
            {
                data: 'gambar',
                name: 'gambar',
                render: function(data) {
                return '<img width="100px" src="/'+data+'">'
            },
            },
            {
                data: 'fasilitas',
                name: 'fasilitas',
            },
            {
                data: 'action',
                name: 'action',
            },
        ]
    });
    
</script>

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