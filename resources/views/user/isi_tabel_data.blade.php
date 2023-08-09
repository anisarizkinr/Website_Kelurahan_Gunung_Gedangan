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
  {{-- <div class="section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6 text-center mx-auto">
          <h2 class="font-weight-bold text-primary heading">
            Data {{$data->judul}}
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Isi Data</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                    <tr>
                        <th scope="row">{{$dt->id}}</th>
                        <td>
                            <textarea class="form-control form-control-round custom-textarea" readonly rows="5">{{$dt->isi_data}}</textarea>
                        </td>
                        <td>{{$dt->keterangan}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6 text-center mx-auto">
          @if ($isi_data)
            <h2 class="font-weight-bold text-primary heading">
              Data {{ $isi_data->judul }}
            </h2>
          @else
            <h2 class="font-weight-bold text-primary heading">
              Data tidak ditemukan
            </h2>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Isi Data</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              @if ($isi_data)
                <tr>
                  <th scope="row">{{ $isi_data->id }}</th>
                  <td>
                    <textarea class="form-control form-control-round custom-textarea" readonly rows="5">{{ $isi_data->isi_data }}</textarea>
                  </td>
                  <td>{{ $isi_data->keterangan }}</td>
                </tr>
              @else
                <tr>
                  <td colspan="3">Data tidak ditemukan</td>
                </tr>
              @endif
            </tbody>
          </table>
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