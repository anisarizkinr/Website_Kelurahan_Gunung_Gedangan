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
            
          </div>
          @foreach ($layanan as $lyn )
          <div class="container">
            <div class="row justify-content-center text-center mb-5">
              <div class="col-lg-6 mb-5 box">
                <h4 class="font-weight-bold heading text-primary mb-4 ">
                  {{$loop->iteration }}. {{$lyn->judul}}
                </h4>
                <a class="btn btn-primary" href="{{route('layanan.pilih',$lyn->id)}}"> Lihat</a>
              </div>
            </div>
          </div>
          @endforeach
          <div style="display: flex; justify-content: center;">
            <div class="paginate-button col-md-12">
              {{ $layanan->links() }}
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