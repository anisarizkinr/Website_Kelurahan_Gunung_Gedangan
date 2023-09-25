@extends('layout.master')
@section('content')
<div>
      <div class="hero page-inner overlay"
      style="background-image: url({{asset('images/sejarah.jpg')}}); opacity: 0.9;">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Sejarah</h1>
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
@endsection