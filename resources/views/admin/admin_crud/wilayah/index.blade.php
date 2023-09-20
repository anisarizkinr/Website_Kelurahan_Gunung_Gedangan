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
                                    <h2>Data Batas Wilayah</h2>
                                    <span>Isi Data Batas Wilayah</span>
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
                                <li class="breadcrumb-item"><a href="{{url('/wilayah')}}">Batas Wilayah</a>
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
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar Arah Mata Angin</th>
                                        <th>Batas Wilayah</th>
                                        <th>Deskripsi</th>
                                        <th>Link</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paginate as $wly)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>                                    
                                        <td>
                                            @if ($wly -> gambar_arah)
                                            <img src="{{asset('storage/'.$wly -> gambar_arah)}}" class="img-flui" alt="{{ $wly -> gambar_arah }}" width="150px">
                                            @else
                                            <img src="{{asset('assets/images/gambar_arah/'.$wly -> id.'.png')}}" class="img-flui" alt="{{ $wly -> id }}"
                                              width="150px">
                                            @endif
                                        </td>
                                        <td>{{$wly->batas_wilayah}}</td>
                                        <td>{{$wly->deskripsi}}</td>
                                        <td>{{$wly->link}}</td>
                                        <td>
                                            <form action="{{route('wilayah.edit',$wly->id)}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <a class="btn btn-warning" href="{{route('wilayah.edit',$wly->id)}}"><i class="icofont icofont-edit"></i></a>
                                            </form>
                                            <form action="{{route('wilayah.destroy',$wly->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Apakah anda yakin hapus data ini ? ')" class="btn btn-danger"><i class="icofont icofont-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
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
