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
  <div class="section" style="background-color: #edf2fb;">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6">
          <h2 class="font-weight-bold text-primary heading">
            Berita
          </h2>
        </div>
      </div>
      <div class="row">
        @foreach ($data as $brt)
        <div class="col-12">
          <div class="property-slider-wrap">
            <div class="property-slider">
              <div class="property-item">
                <div class="property-content">
                  <a href="property-single.html" class="img">
                    @if ($brt->gambar_berita)
                    <img src="{{('storage/'.$brt->gambar_berita)}}" class="card-img-top" alt="{{ $brt->gambar_berita }}">
                    @else
                    <img src="{{('assets/images/gambar_berita/'.$brt->id.'.jpg')}}" class="card-img-top" alt="{{ $brt->id }}">
                    @endif
                  </a>
                  <div>
                    <span class="d-block mb-2 text-black-50">{{ \Carbon\Carbon::parse($brt->tanggal_berita)->format('d F Y') }}</span>
                    <span class="city d-block mb-3">{{$brt->judul_berita}}</span>
                    <p>
                      {{$brt->isi_berita}}
                    </p>
                    <a href="{{$brt->link}}" class="btn btn-primary py-2 px-3">Lihat lebih lanjut</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- .item -->

            <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
              <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
              <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
            </div>
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