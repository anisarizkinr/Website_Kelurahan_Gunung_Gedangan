@extends('layout.master')
@section('content')
<div
      class="hero page-inner overlay"
      style="background-image: url({{asset('images/gambar_4.png')}}); opacity: 0.7;"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Sejarah</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
        <div class="container">
          <div class="row text-left mb-5">
          @if ($sejarah)
            <div class="col-12">
              <h2 class="font-weight-bold heading text-primary mb-4" style="text-align: center;">Asal Usul Nama Kelurahan @if ($judul) {{ $judul->judul_web }}@endif</h2>
            </div>
            <div class="box-sejarah">
              <p class="text-black-50">
              {{ $sejarah->isi_sejarah }}
              </p>
            </div>
            @endif
          </div>
        </div>
      </div>
@endsection