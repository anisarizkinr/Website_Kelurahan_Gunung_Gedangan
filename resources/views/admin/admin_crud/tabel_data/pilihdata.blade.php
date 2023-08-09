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
                        @foreach ($kategori as $ktg )
                        <div class="col-md-6 col-xl-3" style="margin-left: 60px">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="icofont icofont-database bg-c-green card1-icon"></i><br>
                                    <span class="text-c-black f-w-600"><h4>{{$ktg->nama_kategori}}</h4></span>
                                    {{-- <h4>Jumlah</h4> --}}
                                    <a class="btn btn-warning" href="{{route('data.kategori',$ktg->id)}}"> Lihat</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       

                    </div>
                </div>
                    <div class="card-block table-border-style">
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
