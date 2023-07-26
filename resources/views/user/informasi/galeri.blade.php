@extends('layout.master')
@section('content')
<body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

   
    <div class="section">
    </div>

    <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h1 class="mb-4">Galeri Warga Kedundung </h1>
              <h6 class="text-primary">Berikut merupakan kumpulan foto kegiatan  yang pernah dilakukan warga keluarahan kedundung</h6>
          </div>
          <div class="row g-4">
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item rounded overflow-hidden">
                      <img class="img-fluid" src="{{asset('images/galeri/gambar1.jpg')}}" alt="">
                      <div class="position-relative p-4 pt-0">
                          <h5 class="mb-3">Foto bersama dengan lurah kedundung</h5>
                          <p> </p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="service-item rounded overflow-hidden">
                      <img class="img-fluid" src="{{asset('images/galeri/gambar2.png')}}" alt="">
                      <div class="position-relative p-4 pt-0">
                          <h5 class="mb-3">Peresmian Kampung Zakat Terpadu</h5>
                          <p></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item rounded overflow-hidden">
                      <img class="img-fluid" src="{{asset('images/galeri/gambar3.jpg')}}" alt="">
                      <div class="position-relative p-4 pt-0">
                          <h5 class="mb-3">Peserta Musrenbang Kelurahan Kedundung-zan</h5>
                          <p> </p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="service-item rounded overflow-hidden">
                      <img class="img-fluid" src="{{asset('images/galeri/gambar4.jpeg')}}" alt="">
                      <div class="position-relative p-4 pt-0">
                          <h5 class="mb-3">Tim Sambang KWT DKPP bersama KWT Mandiri Kel. Kedundung</h5>
                          <p></p>
                      </div>
                  </div>
              </div>
              
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="service-item rounded overflow-hidden">
                      <img class="img-fluid" src="{{asset('images/galeri/gambar5.jpeg')}}" alt="">
                      <div class="position-relative p-4 pt-0">
                          <h5 class="mb-3">Tim melihat perkembangan di taman herbal bejo jahe merah</h5>
                          <p>  </p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="service-item rounded overflow-hidden">
                      <img class="img-fluid" src="{{asset('images/galeri/gambar6.jpg')}}" alt="">
                      <div class="position-relative p-4 pt-0">
                          <h5 class="mb-3">Warga Kelurahan Kedundung Mendapat BLT Tahap VII Dari Kemensos</h5>
                         
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item rounded overflow-hidden">
                      <img class="img-fluid" src="{{asset('images/galeri/gambar7.jpg')}}" alt="">
                      <div class="position-relative p-4 pt-0">
                          <h5 class="mb-3">KIM GAYATRI KOTA MOJOKERTO dari Kelurahan Kedundung JUARA III TINGKAT PROVINSI LOMBA LCCK GROUP B </h5>
                          <p></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item rounded overflow-hidden">
                      <img class="img-fluid" src="{{asset('images/galeri/gambar8.jpeg')}}" alt="">
                      <div class="position-relative p-4 pt-0">
                          <h5 class="mb-3">Kapolres Mojokerto Kota dan rombongan menyerahkan masker pada pengasuh Pondok Pesantren Al-Azhar Kelurahan Kedundung</h5>
                          <p></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item rounded overflow-hidden">
                      <img class="img-fluid" src="{{asset('images/galeri/gambar9.jpg')}}" alt="">
                      <div class="position-relative p-4 pt-0">
                          <h5 class="mb-3">Ning Ita Walikota Mojokerto Hadiri Gema Sholawat 1000 Santri TPQ Se-Kelurahan Kedundungg</h5>
                          <p></p>
                      </div>
                  </div>
              </div>
              <div class="row content-center">
                  <div class="col-10 col-lg-8">
                      <a href="{{url('/informasi/galeri')}}" class="btn btn-warning rounded-pill py-2 m-3 px-4 animated slideInLeft text-white">Selengkapnya</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
    

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>


  </body>
@endsection