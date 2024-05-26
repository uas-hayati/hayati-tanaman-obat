@extends('layouts.admin')
@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tanaman Obat</h3>
            </div>

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-icon alert-danger" role="alert">
                        <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i>
                        @foreach ($errors->all() as $error)
                            {{ $error }}</li>
                        @endforeach
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-icon alert-success" role="alert">
                        <i class="fe fe-check mr-2" aria-hidden="true"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-6 col-md-6">
                            <label>Nama Tanaman<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="nama" id="nama" required placeholder="Masukan nama tanaman">
                        </div>
                        <div class="form-group col-sm-6 col-md-6">
                            <label>Nama Latin<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="nama_latin" id="nama_latin" required placeholder="Masukan nama latin tanaman">
                        </div>
                        <div class="form-group col-sm-6 col-md-6">
                            <label>Famili <span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="famili" id="famili" required placeholder="Masukan famili tanaman">
                        </div>
                        <div class="form-group col-sm-6 col-md-6">
                            <label>Foto Tanaman<span class="form-required">*</span></label>
                            <input type="file" class="form-control" name="gambar" id="gambar" required accept=".png, .jpg">
                        </div>
                        </div>
                        <div class="form-group">
                            <label>Manfaat <span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="kegunaan" id="kegunaan" placeholder="Masukan manfaat tanaman">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi <span class="form-required">*</span></label>
                            <textarea rows="10" cols="30" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukan deskripsi dari tanaman" required></textarea>
                        </div>
                        <div class="card-footer text-right"><button type="submit" class="btn btn-primary">Simpan</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
