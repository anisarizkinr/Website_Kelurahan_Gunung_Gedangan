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
                                    <h2>Data Sejarah</h2>
                                    <span>Isi Data Sejarah</span>
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
                                    <li class="breadcrumb-item"><a href="{{url('/sejarah')}}">Sejarah</a>
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
                                            <th>Judul Sejarah</th>
                                            <th>Isi Sejarah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($paginate as $sjr)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$sjr->judul_sejarah}}</td>
                                            <td>
                                                <textarea class="form-control form-control-round custom-textarea" readonly rows="5">{{$sjr->isi_sejarah}}</textarea>
                                            </td>
                                            <td>
                                                <form action="{{route('sejarah.edit',$sjr->id)}}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <a class="btn btn-warning" href="{{route('sejarah.edit',$sjr->id)}}"><i class="icofont icofont-edit"></i></a>
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