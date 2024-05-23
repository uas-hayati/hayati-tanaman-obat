@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header text-center">
                            <h2 class="mb-0">List Tumbuhan</h2>
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
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                            </div>

                            <div class="col-12 mb-4 mt-4">
                                <div class="row mb-5">
                                    @foreach ($tumbuhan as $item)
                                        <div class="col-md-6 col-lg-4 mb-3">
                                            <div class="card">
                                                <div class="card-body text-wrap text-start ">
                                                    <div class="  justify-content-between flex-sm-row flex-column gap-3">
                                                        <div
                                                            class="d-flex flex-sm-column flex-row align-items-start justify-content-between overflow-auto text-wrap">
                                                            <img src="data_file/{{ $item->gambar }}"
                                                                class="object-fit-cover" width="235" height="220"
                                                                style="object-fit: :cover">
                                                            <div class="card-title text-wrap">
                                                                <h5 class="text-wrap my-3 fw-bold fs-2">
                                                                    {{$item->nama}}
                                                                   </h5>
                                                                <p class="fs-5"> 
                                                                    {{$item->nama_latin}}
                                                                </p>
                                                                <span
                                                                    class="badge bg-label-secondary rounded-pill text-start">
                                                                   {{$item->famili}}
                                                                </span>

                                                            </div>
                                                            <h6>{{$item->kegunaan}}</h6>
                                                            <p class=""> {{ $item->deskripsi }}</p>

                                                            <p class="text-wrap">Dibuat pada: {{$item->created_at}} </p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="me-4">
                                                            <a href="/edit_tumbuhan/{{$item->id}}">
                                                                <button class="btn-primary rounded-2">Edit</button>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <button class="btn-danger rounded-2" onclick="confirmDelete()">Hapus</button>
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
                                        </div>
                                    @endforeach 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
@endsection
