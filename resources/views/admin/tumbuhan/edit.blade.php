@extends('layouts.admin')

@section('content')


    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header text-center">
                            <h2 class="mb-0">Tambah Data Tumbuhan Obat Kalimantan Timur</h2>
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
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                @foreach ($tumbuhan as $item)
                                <div class="mb-3">
                                    <label class="form-label" for="alamat">ID Tanaman Obat:</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="id" class="px-3" readonly disabled
                                            value={{ $item->id }}>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="nama">Nama Tumbuhan:</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="nama" id="nama" class="form-control" required value="{{$item->nama}}"
                                            placeholder="Masukan nama tumbuhan obat" />
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="nama_latin">Nama Latin Tumbuhan:</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="nama_latin" id="nama_latin" class="form-control" required value="{{$item->nama_latin}}"
                                            placeholder="Masukan nama tumbuhan obat" />
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="famili">Famili:</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="famili" id="famili" class="form-control" required value="{{$item->famili}}"
                                            placeholder="Masukan famili tumbuhan obat" />
                                    </div>
                                </div>

                                <div class="row my-4">
                                    <div class="col">
                                        <label class="form-label" for="kegunaan">Manfaat:</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" name="kegunaan" id="kegunaan" class="form-control" required value="{{$item->kegunaan}}"
                                                placeholder="Masukan manfaat dari tumbuhan" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="gambar" class="form-label">Foto Tumbuhan: </label>
                                        <input type="file" name="gambar" id="gambar" class="form-control" 
                                            accept=".png, .jpg">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="deksripsi">Deskripsi:</label>
                                    <div class="input-group input-group-merge">
                                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10">{{$item->deskripsi}}</textarea>
                                        {{-- <input type="text" name="deksripsi" id="deksripsi" class="form-control"
                                            placeholder="Masukan deskripsi tumbuhan obat" /> --}}
                                    </div>
                                </div>

        

                                <div class="d-grid gap-2 mb-3">
                                    <button class="btn btn-primary" type="submit">Ubah Data Tumbuhan</button>
                                </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
@endsection
