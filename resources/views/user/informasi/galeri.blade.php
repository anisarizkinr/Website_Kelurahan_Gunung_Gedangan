@extends('layout.master')
@section('content')
<body>
    <div class="section">
    </div>
    <!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-4">Galeri Kegiatan Kelurahan @if ($judul) {{ $judul->judul_web }}@endif </h1>
        </div>
        <div>
            {{-- <a class="btn btn-info" href="{{url('galeri/create')}}">Tambah</a>
         --}}
          <div class="row">
            @foreach ($data as $glr)
            <div class="col-lg-4 col-sm-4">
              <div class="card mb-3">
                @if ($glr -> gambar)
                <img src="{{ asset('storage/' . $glr->gambar) }}" class="card-img-top" alt="{{ $glr->gambar }}">
                @else
                <img src="{{('/assets/images/galeri/'.$glr -> id.'.jpg')}}" class="card-img-top" alt="{{ $glr->id }}">
                @endif
                {{-- <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div> --}}
              </div>
            </div>
            @endforeach
          </div>
          <div style="display: flex; justify-content: center;">
            <div class="paginate-button col-md-12">
              {{ $data->links() }}
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