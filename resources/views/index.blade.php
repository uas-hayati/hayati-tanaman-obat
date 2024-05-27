@extends('layouts.user')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="/">
      <img src="../assets/img/icon.png" height="35">
      </a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
          <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="#home">Beranda</a></li>
          <li class="nav-item" ><a class="nav-link fw-medium"  href="/products">Tanaman Obat</a></li>
          <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#about">Tentang Kami</a></li>
          <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#faq">FAQ</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="py-0" id="home">
    <div class="bg-holder" style="background-image:url(../assets/img/hero-bg.png);background-position:bottom;background-size:cover;"></div>
    <div class="container position-relative">
      <div class="row align-items-center py-8">
        <div class="col-md-5 col-lg-6 order-md-1 text-center text-md-end"><img class="img-fluid" src="../assets/img/women.png" width="350" alt="" /></div>
        <div class="col-md-7 col-lg-6 text-center text-md-start">
          <h1 class="mb-4 display-3 fw-bold lh-sm">Sehat Alami Dari<br class="d-block d-lg-none d-xl-block"/>Jantung Kalimantan</h1>
          <p class="mt-3 mb-4 fs-1">Selamat datang di Tanaman Obat Kalimantan Timur. Temukan ragam tanaman obat khas Kalimantan Timur yang kaya manfaat untuk kesehatan.</p>
          <a class="btn btn-lg text-white rounded-pill hover-top" href="/products" role="button" style="background-image: linear-gradient(to right, #07441e, #199472);">Cari Tanaman Obat</a>
        </div>
      </div>
    </div>
  </section>
    <section class="py-4">
      <div class="container-lg">
        <div class="row flex-center">
          <div class="col-sm-10 col-md-5 col-lg-5 order-md-0 text-center text-md-start"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5411109.3541759085!2d113.54045633443835!3d0.06639205158250693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df14710964d9c91%3A0xc4abb01d2fe376d7!2sKalimantan%20Timur!5e0!3m2!1sid!2sid!4v1716608978791!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
          <div class="col-sm-10 col-md-6 col-lg-6 text-md-start offset-md-1">
            <h5 class="my-4 fw-bold lh-sm">Kalimantan Timur</h5>
            <p class="mb-0 text-justify">Kalimantan Timur atau sering disebut Kaltim merupakan sebuah provinsi yang terletak di bagian timur Pulau Kalimantan, Indonesia.  Sebagai salah satu provinsi terbesar di Indonesia, Kalimantan Timur memiliki peran penting dalam keberlanjutan ekosistem globalDi tengah kekayaan alamnya yang melimpah, Kalimantan Timur juga dikenal akan keberagaman hayatinya,
              termasuk tanaman obat yang tumbuh subur di wilayah ini. Tanaman obat telah menjadi bagian integral dari kehidupan masyarakat setempat, digunakan secara turun-temurun dalam pengobatan tradisional dan menjaga kesehatan. Dalam upaya melestarikan kekayaan alam dan budaya ini, penting bagi kita untuk menjaga keanekaragaman hayati Kalimantan Timur. Dengan memahami dan memanfaatkan tanaman obat secara bijaksana, kita tidak hanya merawat kesehatan secara alami, tetapi juga turut serta dalam menjaga ekosistem yang rapuh.</p>
          </div>
        </div>
      </div>
    </section>
  <section class="py-4" id="about">
    <div class="container-lg">
      <div class="row align-items-center">
        <div class="col-md-5 col-lg-6 order-md-0 text-center text-md-start"><img class="img-fluid" src="../assets/img/logo.png" width="550" alt="" /></div>
        <div class="col-md-7 col-lg-6 px-sm-5 px-md-0">
          <h6 class="fw-bold fs-4 display-3 lh-sm">Visi</h6>
          <p class="my-4 text-justify">Menjadi pusat informasi dan sumber daya untuk tanaman obat Kalimantan Timur, dengan tujuan untuk meningkatkan kesadaran masyarakat akan kekayaan alam lokal serta mempromosikan kesehatan dan kesejahteraan melalui penggunaan tanaman obat tradisional</p>
          <h6 class="fw-bold fs-4 display-3 lh-sm">Misi</h6>
          <div class="d-flex align-items-center mb-5">
            <div><img class="img-fluid" src="assets/img/app.png" width="90" alt="" /></div>
            <div class="px-4">
              <h5 class="fw-bold text-danger">Melestarikan dan Mempromosikan Keragaman Hayati Lokal</h5>
              <p class="text-justify">Mendorong konservasi dan penggunaan berkelanjutan tanaman obat tradisional Kalimantan Timur, sebagai upaya untuk melestarikan warisan alam dan budaya, serta meningkatkan kesejahteraan masyarakat lokal.</p>
            </div>
          </div>
          <div class="d-flex align-items-center mb-5">
            <div><img class="img-fluid" src="assets/img/prototype.png" width="90" alt="" /></div>
            <div class="px-4">
              <h5 class="fw-bold text-primary">Mengedukasi Penggunaan Tanaman Obat</h5>
              <p class="text-justify">Memberikan informasi yang akurat dan mudah dipahami tentang tanaman obat khas Kalimantan Timur, sehingga dapat memperluas pemahaman masyarakat akan manfaat pengobatan alami dan keanekaragaman hayati.</p>
            </div>
          </div>
          <div class="d-flex align-items-center mb-5">
            <div><img class="img-fluid" src="assets/img/vector.png" width="90" alt="" /></div>
            <div class="px-4">
              <h5 class="fw-bold text-success">Mendorong Inovasi dan Pengembangan Produk</h5>
              <p class="text-justify">Mendorong inovasi dalam pengembangan produk-produk berbasis tanaman obat yang ramah lingkungan dan berkelanjutan dan medukungan terhadap riset dan pengembangan baru dalam bidang pengobatan herbal, kosmetik alami, dan produk-produk lain yang menggunakan bahan baku dari tanaman obat Kalimantan Timur.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-4">
    <div class="bg-holder" style="background-image:url(../assets/img/ultimate-bg.png);background-position:bottom;background-size:cover;"></div>
    <div class="container">
    <div class="row align-items-center mb-2">
        <div class="col-md-5 col-lg-4 offset-lg-1"><h2 class="fw-bold lh-base">Makna Slogan Sehat Alami Dari Jantung Kalimantan </h2></div>
        <div class="col-md-6 col-lg-5 offset-lg-1 border-start py-5 ps-5">
            <p class="mb-0 text-justify">Sehat Alami menggambarkan pendekatan holistik terhadap kesehatan, di mana tanaman obat alami menjadi sumber utama perawatan dan penyembuhan. Hal ini menekankan pentingnya memelihara kesehatan dengan cara yang alami, tanpa bergantung pada bahan kimia atau obat-obatan sintetis.</p><br>
            <p class="mb-0 text-justify">Jantung Kalimantan mewakili akar dan sumber dari kekayaan alam tanaman obat. Kalimantan dikenal dengan keanekaragaman hayatinya, dan tanaman obat menjadi bagian tak terpisahkan dari kekayaan tersebut.</p>
        </div>
    </div>
    </div>
</section>
  <section class="py-4" id="faq">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 text-center mb-3">
        <h6 class="fw-bold fs-4 display-3 lh-sm mb-3">Frequently asked questions</h6>
        </div>
    </div>
    <div class="row flex-center">
        <div class="col-lg-9">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item mb-2">
            <h2 class="accordion-header" id="heading1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    <span class="text-1000">Apa itu keanekaragaman hayati tanaman obat Kalimantan Timur?</span></button>
            </h2>
            <div class="accordion-collapse collapse show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-100 text-justify">Keanekaragaman hayati tanaman obat Kalimantan Timur merujuk pada berbagai jenis tanaman yang memiliki khasiat obat dan tumbuh di wilayah Kalimantan Timur. Ini termasuk tumbuhan yang digunakan dalam pengobatan tradisional oleh masyarakat setempat.</div>
            </div>
            </div>
            <div class="accordion-item mb-2">
            <h2 class="accordion-header" id="heading2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                    <span class="text-1000">Mengapa keanekaragaman hayati tanaman obat penting?</span></button>
            </h2>
            <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-100 text-justify">Keanekaragaman hayati tanaman obat penting karena memberikan berbagai manfaat kesehatan, menyediakan bahan baku untuk industri farmasi, dan memiliki nilai ekologis serta budaya yang tinggi. Selain itu, konservasi tanaman obat juga penting untuk menjaga keseimbangan ekosistem dan keberlanjutan sumber daya alam.</div>
            </div>
            </div>
            <div class="accordion-item mb-2">
            <h2 class="accordion-header" id="heading3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    <span class="text-1000">Bagaimana cara berkontribusi dalam pelestarian tanaman obat di Kalimantan Timur?</span></button>
            </h2>
            <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-100 text-justify">Anda dapat berkontribusi dengan cara mendukung program konservasi, ikut serta dalam kegiatan reboisasi, menggunakan tanaman obat secara bijak, serta menyebarkan kesadaran tentang pentingnya keanekaragaman hayati. Donasi dan dukungan terhadap organisasi yang bekerja dalam bidang ini juga sangat membantu.</div>
            </div>
            </div>
            <div class="accordion-item mb-2">
            <h2 class="accordion-header" id="heading4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                    <span class="text-1000">Apakah semua tanaman obat di Kalimantan Timur aman digunakan?</span></button>
            </h2>
            <div class="accordion-collapse collapse" id="collapse4" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-100 text-justify">Tidak semua tanaman obat aman untuk digunakan tanpa panduan yang tepat. Beberapa tanaman mungkin memiliki efek samping atau dapat berinteraksi dengan obat-obatan lain. Konsultasikan dengan ahli kesehatan atau herbalis sebelum menggunakan tanaman obat untuk pengobatan.</div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </section>
@endsection
