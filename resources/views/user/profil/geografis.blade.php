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
  <!-- <div class="col-lg-6 text-center mx-auto">
    <h2 class="font-weight-bold text-primary heading">
      DATA KELURAHAN KEDUNDUNG
    </h2>
  </div> -->
  <h2 class="map-heading">LETAK GEOGRAFIS KELURAHAN KEDUNDUNG</h2>
  <div class="map-container">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15824.03755714312!2d112.44941831093658!3d-7.464211637455119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780dbf5aaac4b9:0x69b511b918f37238!2sKedundung,%20Magersari,%20Mojokerto%20City,%20East%20Java!5e0!3m2!1sen!2sid!4v1524357305622" width="800" height="450" style="margin-top: 180px;"></iframe>
  </div>


  <section class="features-1">
    <div class="container">
      <h2 class="font-weight-bold heading text-primary mb-4 mb-md-4" style="text-align: left;">
        Batas Wilayah
      </h2>    
      <div class="row">
        @foreach ($wilayah as $wly)
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="box-feature">
            @if ($wly->gambar_berita)
            <img src="{{ asset('storage/' . $wly->gambar_arah) }}" width="70px" style="margin-bottom:10px ;" alt="{{ $wly->gambar_arah }}">
            @else
            <img src="{{ asset('assets/images/gambar_arah/' . $wly->id . '.png') }}" width="70px" style="margin-bottom:10px ;" alt="{{ $wly->id }}">
            @endif
            <h3 class="mb-3">{{ $wly->batas_wilayah }}</h3>
            <p>
              {{ $wly->deskripsi }}
            </p>
            <p><a href="{{ $wly->link }}" class="learn-more" target="_blank">Kunjungi Peta</a></p>
          </div>
        </div>
        @endforeach
      </div>    
    </div>
  </section>

  <div class="section">
    <div class="container">
      <div class="row section-counter mt-5">
        @foreach ($data as $jml)
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"><span class="countup text-primary">{{ $jml->jumlah_penduduk }}</span></span>
            <span class="caption text-black-50"> {{ $jml->keterangan }}</span>
          </div>
        </div>
        @endforeach
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