@extends('admin.layout.master')
@section('content')
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
                                    <h3>Tabel Data</h3>
                                    {{-- <span>Isi Data Kategori</span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                               <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/data')}}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('/data')}}">Kategori Data</a>
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
                    <div class="row">
                        <!-- card1 start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="icofont icofont-people bg-c-green card1-icon"></i>
                                    <span class="text-c-black f-w-600"><h3>Kegiatan</h3></span>
                                    {{-- <h4>Jumlah</h4> --}}
                                    <a class="btn btn-warning" href="{{route('data.index')}}"> Lihat</a>
                                </div>
                            </div>
                        </div>
                        <!-- card1 end -->
                        <!-- card1 start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="icofont icofont-picture bg-c-pink card1-icon"></i>
                                    <span class="text-c-pink f-w-600">Galeri</span>
                                    <h4>Jumlah</h4>
                                </div>
                            </div>
                        </div>
                        <!-- card1 end -->
                        <!-- card1 start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                    <span class="text-c-green f-w-600">Data</span>
                                    <h4>Jumlah</h4>
                                    {{-- <div>
                                        <span class="f-left m-t-10 text-muted">
                                            <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Tracked via microsoft
                                        </span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <!-- card1 end -->

                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        {{-- <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Isi Data</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paginate as $dt)
                                    <tr>
                                        <th scope="row">{{$dt->id}}</th>
                                        <td>{{$dt->nama_kategori}}</td>
                                        <td>
                                            @if ($dt -> gambar_kategori)
                                            <img src="{{asset('storage/'.$dt -> gambar_kategori)}}" class="img-flui" alt="{{ $dt -> gambar_kategori }}" width="350px">
                            
                                            @else
                                            <img src="{{asset('assets/images/gambar_kategori/'.$dt -> id.'.png')}}" class="img-flui" alt="{{ $dt -> id }}"
                                              width="350px">
                                            @endif
                                          </td>
                                        <td>
                                            <form action="{{route('kategori.edit',$dt->id)}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <a class="btn btn-warning" href="{{route('kategori.edit',$dt->id)}}"><i class="icofont icofont-edit"></i></a>
                                            </form>
                                            <form action="{{route('kategori.destroy',$dt->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Apakah anda yakin hapus data ini ? ')" class="btn btn-danger"><i class="icofont icofont-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div> --}}

                        <div class="btn-container">
                            {{$paginate->links()}}
                          </div>
                    </div>
                </div>
                <!-- Basic table card end -->
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body end -->

    <div id="styleSelector">

    </div>
    </div>
</div>

@endsection
