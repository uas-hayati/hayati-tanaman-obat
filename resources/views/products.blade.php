@extends('layouts.user')
@section('content')
    <section class="py-0" id="home">
        <div class="bg-holder"
            style="background-image:url(../assets/img/hero-bg.png);background-position:bottom;background-size:cover;"></div>
        <div class="container position-relative">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
                <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="/">
                        <img src="../assets/img/icon.png" height="35">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                            <li class="nav-item"><a class="nav-link fw-medium"
                                    aria-current="page" href="/">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link fw-medium" href="/products">Tanaman Obat</a></li>

                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row align-items-center py-8">
                <div class="col-md-5 col-lg-6 order-md-1 text-center text-md-end"><img class="img-fluid"
                        src="../assets/img/women2.png" width="350" alt="" /></div>
                <div class="col-md-7 col-lg-6 text-center text-md-start pt-2">
                    <h1 class="mb-4 display-3 fw-bold lh-sm">Cari Tanaman Obat<br
                            class="d-block d-lg-none d-xl-block" />Kalimantan Timur</h1>
                    <p class="mt-3 mb-4 fs-1">Selamat datang di Tanaman Obat Kalimantan Timur. <br
                            class="d-none d-lg-block" />Temukan ragam tanaman obat khas Kalimantan Timur yang kaya manfaat
                        untuk kesehatan</p>
                    <!-- ===============================================-->
                    <form class="d-flex my-2 my-lg-0" action="" method="POST">
                        @csrf
                        <input class="form-control mr-sm-2 rounded-pill " type="search" placeholder="Search"
                            name="cariNama" id="cariNama" aria-label="Search">
                        <button class="btn btn-success my-2 my-sm-0 rounded-pill " type="submit">Search</button>
                        <!-- ===============================================-->
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="py-0">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @if (isset($message))
                                <p>{{ $message }}</p>
                            @endif
                            @if (isset($tanamanObat))
                                @foreach ($tanamanObat as $item)
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="position-relative bg-light overflow-hidden text-center">
                                                    <img height="200" class="card-img-top"
                                                        src="/data_file/{{ $item->gambar }}" alt="">
                                                </div>
                                                <div class="text-center p-4">
                                                    <h2 class="card-title h5 mb-2">{{ $item->nama }}</h2>
                                                </div>
                                                <div class="d-flex border-top">
                                                    <small class="w-100 text-center py-2">
                                                        <a class="text-body" href="/product-detail/{{ $item->id }}"><i
                                                                class="fa fa-eye text-primary me-2"></i>Lihat Detail</a>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
