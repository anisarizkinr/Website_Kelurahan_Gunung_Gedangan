@extends('layout.master')
@section('content')
<body>
    <div class="section">

    </div>
    <div class="section" style="background-color: #edf2fb;">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            
          </div>
          
          <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6 mb-5 box">
                    <h2 class="font-weight-bold heading text-primary mb-4 ">{{$layanan->judul}}</h2>
                </div>
                <div class="col-lg-6 mb-5 box">
                  {{-- <h5 class="box-child2">{{$layanan->isi_layanan}}</h5> --}}
                  <div class="table-responsive">
                    <table class="table">
                      <td>
                        <textarea class="form-control form-control-round custom-textarea" readonly rows="15" style="font-size: 24px;">{{ $layanan->isi_layanan }}</textarea>
                      </td>
                    </table>
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