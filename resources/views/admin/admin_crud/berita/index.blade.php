@extends('admin.layout.master')
@section('content')

<!-- Pre-loader start -->
<div class="theme-loader">
  <div class="ball-scale">
    <div class='contain'>
      <div class="ring">
        <div class="frame"></div>
      </div>
      <div class="ring">
        <div class="frame"></div>
      </div>
      <div class="ring">
        <div class="frame"></div>
      </div>
      <div class="ring">
        <div class="frame"></div>
      </div>
      <div class="ring">
        <div class="frame"></div>
      </div>
      <div class="ring">
        <div class="frame"></div>
      </div>
      <div class="ring">
        <div class="frame"></div>
      </div>
      <div class="ring">
        <div class="frame"></div>
      </div>
      <div class="ring">
        <div class="frame"></div>
      </div>
      <div class="ring">
        <div class="frame"></div>
      </div>
    </div>
  </div>
</div>
<!-- Pre-loader end -->

<div class="pcoded-content">
  <div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
      <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
          <div class="row align-items-end">
            <div class="col-lg-8">
              <div class="page-header-title">
                <i class="icofont icofont-table bg-c-blue"></i>
                <div class="d-inline">
                  <h4>Data Berita</h4>

                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                  <li class="breadcrumb-item">
                    <a href="{{url('/dashboard')}}">
                      <i class="icofont icofont-home"></i>
                    </a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{url('/kategori')}}">Kategori Data</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
          <!-- Basic table card start -->
          <div class="card">
            <div class="card-header">
              <h5>Berita</h5>
              <div class="card-header-right">
                <ul class="list-unstyled card-option">
                  <li><i class="icofont icofont-simple-left "></i></li>
                  <li><i class="icofont icofont-maximize full-card"></i></li>
                  <li><i class="icofont icofont-minus minimize-card"></i></li>
                  <li><i class="icofont icofont-refresh reload-card"></i></li>
                  <li><i class="icofont icofont-error close-card"></i></li>
                </ul>
              </div>
            </div>

            <div class="card-body">
              <a class="btn btn-primary" href="{{ route('berita.create') }}">Tambah Berita</a>
              <br><br>
              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
              @endif


              <div class="card-block table-border-style">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Isi Berita</th>
                        <th>Link</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($paginate as $brt)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>
                          @if ($brt -> gambar_berita)
                          <img src="{{asset('storage/'.$brt -> gambar_berita)}}" class="img-fluid" alt="..." width="350px">
                          @else
                          <img src="{{('assets/images/gambar_berita/'.$brt -> id.'.jpg')}}" class="img-fluid" alt="..." width="350px">
                          @endif
                        </td>
                        <td>{{$brt->tanggal_berita}}</td>
                        <td>{{$brt->judul_berita}}</td>
                        <td>{{$brt->isi_berita}}</td>
                        <td>{{$brt->link}}</td>
                        <td>
                          <form action="{{route('berita.edit',$brt->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <a class="btn btn-warning" href="{{route('berita.edit',$brt->id)}}"><i class="icofont icofont-edit"></i></a>
                          </form>
                          <form action="{{route('berita.destroy',$brt->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah anda yakin hapus data ini ? ')" class="btn btn-danger"><i class="icofont icofont-trash"></i></button>
                          </form>
                        </td>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <div class="paginate">
              <div class="container">
                <div class="row">
                  <div class="mx-auto">
                    <div class="paginate-button col-md-12">
                      {{ $paginate->links() }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-footer-->




          @endsection