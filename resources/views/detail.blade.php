@extends('layouts.user')
@section('content')
<section class="py-5">
    <div class="bg-holder" style="background-image:url(../assets/img/hero-bg.png);background-position:bottom;background-size:cover;"></div>
    <div class="container position-relative">
        <a href="/" class="btn btn-success my-2 my-sm-0 rounded-pill" role="button" style="background-image: linear-gradient(to right, #07441e, #199472)">Beranda</a>
        <a href="/products" class="btn btn-success my-2 my-sm-0 rounded-pill" role="button">Halaman Sebelumnya</a>
        <div class="pt-4">
            <h1 class="mb-4 display-3 fw-bold lh-sm">Detail Tanaman <br> {{ $tumbuhan[0]->nama }} </h1>
            <p class="mt-3 mb-4 fs-1 text-justify">Berikut merupakan informasi terkait tanaman Kalimantan Timur yaitu {{ $tumbuhan[0]->nama }}. Mari kita jaga dan lestarikan keanekaragaman hayati dengan penuh kepedulian dan tanggung jawab</p>
        </div>
        <div class="container">
            <div class="row align-items-center mb-6">
            @if (empty($tumbuhan))
                <div>
                    <p>Data menu kosong. Harap beritahu admin untuk mengisi menu</p>
                </div>
            @else
            <div class="col-md-5 col-lg-4 offset-lg-1">
                <h1 class="fw-bold lh-base"><img class="w-100" src="/data_file/{{ $tumbuhan[0]->gambar }}" alt=""></h1>
            </div>
            <div class="col-md-6 col-lg-5 offset-lg-1 border-start py-5 ps-5">
                <h3 class="p-2">{{ $tumbuhan[0]->nama }}</h3>
                <p class="mb-0 p-2"><strong>Nama Latin: </strong>{{ $tumbuhan[0]->nama_latin }}</p>
                <p class="rounded-pill d-inline-block p-2 text-white" style="background-image: linear-gradient(to right, #07441e, #199472)">Famili: {{ $tumbuhan[0]->famili }} </p>
                <p class="mb-0 p-2 text-justify"><strong>Manfaat: </strong><br>{{$tumbuhan[0]->kegunaan}}</p>
                <p class="mb-0 p-2 text-justify"><strong>Deskripsi:</strong><br>{{ $tumbuhan[0]->deskripsi }}</p>
            </div>
            </div>
            @endif
        </div>
    </div>
  </section>
<!-- Initialize DataTables -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new simpleDatatables.DataTable('#datatablesSimple');
    });
</script>
@endsection
