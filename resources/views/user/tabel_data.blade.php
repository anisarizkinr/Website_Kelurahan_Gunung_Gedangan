@extends('layout.master')
@section('content')

<body>
  <div class="section">
  </div>
  <div class="section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6 text-center mx-auto">
          <h2 class="font-weight-bold text-primary heading">
            Data {{$kategori->nama_kategori}}
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th></th>
                        {{-- <th>Isi Data</th>
                        <th>Keterangan</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <th scope="row">{{$dt->kategori->nama_kategori}}</th>
                        <td>{{$dt->judul}}</td>
                        {{-- <td>
                          <a href="{{url('/data_user_tabel_isi',$dt->id_kategori,$dt->id)}}" class="btn btn-primary py-2 px-3">Detail</a>
                        </td> --}}
                        <td>
                          <a href="{{ url('/data_user_tabel_isi', ['kategori' => $dt->id_kategori, 'id' => $dt->id]) }}" class="btn btn-primary py-2 px-3">Detail</a>
                        </td>
                      
                        {{-- <td>
                            <textarea class="form-control form-control-round custom-textarea" readonly rows="5">{{$dt->isi_data}}</textarea>
                        </td>
                        <td>{{$dt->keterangan}}</td> --}}
                    </tr>
                    @endforeach
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