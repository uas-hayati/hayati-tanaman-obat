
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
                    <div class="alert alert-danger" role="alert">
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
                    @foreach ($tumbuhan as $item)
                    <div class="row">
                        <div class="form-group">
                            <label>ID Tanaman Obat</label>
                            <input type="text" class="form-control" name="id" id="id" value={{ $item->id }} readonly disabled>
                        </div>
                        <div class="form-group col-sm-6 col-md-6">
                            <label>Nama Tanaman<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="nama" id="nama" required placeholder="Masukan nama tanaman" value="{{$item->nama}}">
                        </div>
                        <div class="form-group col-sm-6 col-md-6">
                            <label>Nama Latin<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="nama_latin" id="nama_latin" required placeholder="Masukan nama latin tanaman" value="{{$item->nama_latin}}">
                        </div>
                        <div class="form-group col-sm-6 col-md-6">
                            <label>Famili <span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="famili" id="famili" required placeholder="Masukan famili tanaman" value="{{$item->famili}}">
                        </div>
                        <div class="form-group col-sm-6 col-md-6">
                            <label>Foto Tanaman<span class="form-required">*</span></label>
                            <input type="file" class="form-control" name="gambar" id="gambar" accept=".png, .jpg">
                        </div>
                        </div>
                        <div class="form-group">
                            <label>Manfaat <span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="kegunaan" id="kegunaan" placeholder="Masukan manfaat tanaman" value="{{$item->kegunaan}}">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi <span class="form-required">*</span></label>
                            <textarea rows="10" cols="30" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukan deskripsi dari tanaman" required>{{$item->deskripsi}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
