@extends('layouts.user')

@section('content')
<!-- Content End -->
<div class="container-xxl py-5" style="margin: 10% 0 5% 0">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="mb-4">
                    <a class="btn btn-primary rounded-pill" href="/">Halaman Sebelumnya</a>
                </div>
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Detail Tempat Makan</h1>
                    <p>Berikut detail tempat makan berserta menu makanannya.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @if (empty($tumbuhan))
                <div>
                    <p>Data menu kosong. Harap beritahu admin untuk mengisi menu</p>
                </div>
            @else
                <div class="col-4">

                    <img class="w-100" src="/data_file/{{ $tumbuhan[0]->gambar }}" alt="">
                </div>
                <div class="col-8 p-4">
                    <h1 class="fw-bold">{{ $tumbuhan[0]->nama }}</h1>
                    <h3 class="fw-bold">{{ $tumbuhan[0]->nama_latin }}</h3>
                    <p class="bg-warning rounded-pill d-inline-block p-2 text-start">{{ $tumbuhan[0]->famili }} </p>
                    <p class="fw-bold">manfaat: {{$tumbuhan[0]->kegunaan}}
                    </p>
                    <p>{{ $tumbuhan[0]->deskripsi }}</p>
                </div>
        </div>

        
        @endif
    </div>
</div>
<!-- Initialize DataTables -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new simpleDatatables.DataTable('#datatablesSimple');
    });
    </script>
<!-- Content End -->
@endsection
