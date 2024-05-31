
@extends('layouts.admin')
@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-center">Data Tanaman Obat</h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            {{ $error }}</li>
                        @endforeach
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fe fe-check mr-2" aria-hidden="true"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="row row-cards">
                    @foreach ($tumbuhan as $item)
                    <div class="col-sm-6 col-lg-4">
                      <div class="card p-3">
                        <div class="text-center">
                            <a href="javascript:void(0)" class="mb-3"><img src="data_file/{{ $item->gambar }}" height="250"></a>
                        </div>
                        <div class="d-flex align-items-center px-2">
                          <div>
                            <h4>{{$item->nama}}</></h4>
                            <div><strong>Nama Latin: </strong> {{$item->nama_latin}}</div>
                            <div><strong>Famili: </strong> {{$item->famili}}</div>
                            <div><strong>Manfaat: </strong> {{$item->kegunaan}}</div>
                            <div class="pb-2"><strong>Deskripsi:</strong><br> {{$item->deskripsi}}</div>
                            <small class="d-block text-muted pb-2">Dibuat Pada: {{$item->created_at}}</small>
                          </div>
                        </div>
                        <div class="d-flex">
                            <div class="p-2">
                                <a href="/edit_tumbuhan/{{ $item->id }}" class="btn btn-primary rounded-2"><i class="fa fa-edit"></i> Edit</a>
                            </div>

                            <div class="p-2">
                                <button class="btn btn-danger rounded-2" onclick="confirmDelete()"><i class="fa fa-trash"></i> Hapus</button>
                            </div>

                            <script>
                                function confirmDelete() {
                                    Swal.fire({
                                        title: 'Apakah Anda yakin ingin menghapus ini?',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Ya, Hapus!',
                                        cancelButtonText: 'Batal'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // Jika pengguna mengonfirmasi, redirect ke halaman hapus
                                            window.location.href = "/hapus_tumbuhan/{{ $item->id }}";
                                        }
                                    });
                                }
                            </script>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
