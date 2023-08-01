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
                                    <title>$title</title>
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
                        <a class="btn btn-primary" href="{{route('kategori.create')}}"> Tambah Kategori</a>
                        <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paginate as $ktg)
                                    <tr>
                                        <th scope="row">{{$ktg->id}}</th>
                                        <td>{{$ktg->nama_kategori}}</td>
                                        <td>
                                            <form action="{{route('kategori.edit',$ktg->id)}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <a class="btn btn-warning" href="{{route('kategori.edit',$pgr->id)}}"><i class="icofont icofont-edit"></i></a>
                                            </form>
                                            <form action="{{route('kategori.update',$ktg->id)}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="{{$ktg->id}}">
                                                <button type="submit" class="btn btn-info"><i class="icofont icofont-update"></i></button>
                                            </form>
                                            <form action="{{route('kategori.destroy',$pgr->id)}}" method="POST">
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
