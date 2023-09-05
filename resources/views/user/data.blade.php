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
  <div class="section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6 text-center mx-auto">
          <h2 class="font-weight-bold text-primary heading">
            DATA KELURAHAN KEDUNDUNG
          </h2>
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-12">
          <div class="property-slider-wrap">
            <div class="property-slider">
              <div class="property-item">
                <div class="row">
                  @foreach ($paginate as $ktg )
                  @if ($ktg -> gambar_kategori)
                    <img src="{{('storage/'.$ktg -> gambar_kategori)}}" class="img-flui" alt="{{ $ktg -> gambar_kategori }}">
                  @else
                    <img src="{{('assets/images/gambar_kategori/'.$ktg -> id.'.png')}}" class="card-img-top" alt="{{ $ktg -> id }}">
                  @endif
                  <div class="property-content">
                    <div class="price mb-2"><span>{{$ktg->nama_kategori}}</span></div>
                    <div>
                      <span class="d-block mb-2 text-black-50">Data Perkembangan Penduduk</span>
  
                      <a href="property-single.html" class="btn btn-primary py-2 px-3">Lihat</a>
                    </div>
                  </div>

                @endforeach
                </div>
              </div>
            </div>

            <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
              <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
              <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="row">
        @foreach ($paginate as $ktg )
          <div class="col-lg-4 col-md-6 mb-4"> <!-- Wrap each card in a 3-column layout -->
            <div class="property-item">
              <div class="row">
                @if ($ktg->gambar_kategori)
                  <img src="{{('storage/'.$ktg->gambar_kategori)}}" class="img-flui" alt="{{ $ktg->gambar_kategori }}">
                @else
                  <img src="{{('assets/images/gambar_kategori/'.$ktg->id.'.png')}}" class="card-img-top" alt="{{ $ktg->id }}">
                @endif
                <div class="property-content">
                  <div class="price mb-2"><span>{{$ktg->nama_kategori}}</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50">Data Perkembangan Penduduk</span>
                    <a href="{{url('/data_user_tabel',$ktg->id)}}" class="btn btn-primary py-2 px-3">Lihat</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div style="display: flex; justify-content: center;">
        <div class="paginate-button col-md-12">
          {{ $paginate->links() }}
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