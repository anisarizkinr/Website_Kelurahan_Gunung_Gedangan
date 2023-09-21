@extends('layout.master')
@section('content')
<body>
  

{{-- <div>
      <div class="hero page-inner overlay"
      style="background-image: url(@if($latar){{ asset('storage/' . $latar->gambar_latar) }}@else{{ asset('assets/images/gambar_latar/' . $latar->id . '.png') }}@endif)" >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Sejarah</h1>
          </div>
        </div>
      </div>
    </div>
       --}}
       <div class="hero">
        <div class="hero-slide">
          @foreach ($latar as $ltr )
          @if ($ltr -> gambar_latar)
          <img src="{{asset('storage/'.$ltr -> gambar_latar)}}" class="img overlay" style="opacity: 0.5;">
          @else
          <img src="{{('assets/images/gambar_latar/'.$ltr -> id.'.png')}}" class="img overlay" style="opacity: 0.5;">
          @endif
          @endforeach
        </div>
    
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center">
              <h1 class="heading" data-aos="fade-up" style="text-align: left;">
                Selamat Datang di Kelurahan  @if ($judul) {{ $judul->judul_web }}@endif!
              </h1>
              <h2 class='heading' data-aos="fade-up" style="text-align: left; font-weight: normal;font-size: 18px;">
                Selamat datang di website resmi Kelurahan  @if ($judul) {{ $judul->judul_web }}@endif. Kami dengan bangga mempersembahkan berbagai informasi tentang kelurahan kami, termasuk Sejarah, Layanan Publik dan Informasi lainnya
              </h2>
              <a href="{{url('/profil/sejarah')}}" class="btn btn-warning rounded-pill py-3 px-5 animated slideInLeft" style="background-color: #FF8811; color:white">Explore Lebih Jauh</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
        <div class="container">
          <div class="row text-left mb-5">
            <div class="col-12">
              <h2 class="font-weight-bold heading text-primary mb-4" style="text-align: center;">Asal Usul Nama Kelurahan @if ($judul) {{ $judul->judul_web }}@endif</h2>
            </div>
            <div class="box-sejarah">
            @foreach($sejarah as $sjr)
              <p class="text-black-50" style="background-color: #fefae0; padding-top: 20px; padding-bottom: 20px; padding-right:10px; padding: left 10px;">
              {{ $sjr->isi_sejarah }}
              </p>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </body>
@endsection
