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
                                <i class="icofont icofont-file-code bg-c-blue"></i>
                                <div class="d-inline">
                                    <h4>Edit Batas Wilayah</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="icofont icofont-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('wilayah.index')}}">Edit Batas Wilayah</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">

                                </div>
                                <div class="card-block">
                                    <h4 class="sub-title">Batas Wilayah</h4>
                                    <form action="{{route('wilayah.update', $wilayah->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Id Wilayah</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="id" id="id" class="form-control form-control-round" placeholder="{{$wilayah->id}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar Arah Mata Angin</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="gambar_arah" id="gambar_arah" class="form-control form-control-round" value="{{$wilayah->gambar_arah}}">
                                                <small class="form-text text-muted">Pastikan gambar memiliki rasio (1:1) untuk hasil terbaik.</small>
                                                <img width="250px" src="{{asset('storage/'.$wilayah->gambar_arah)}}" alt="Image">
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Batas Wilayah</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="batas_wilayah" id="batas_wilayah" value="{{$wilayah->batas_wilayah}}" class="form-control form-control-round" placeholder="Batas Wilayah">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="deskripsi" id="deskripsi" value="{{$wilayah->deskripsi}}" class="form-control form-control-round" placeholder="Deskrpsi">
                                            </div>
                                        </div>                       
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><Link></Link></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="link" id="link" value="{{$wilayah->link}}" class="form-control form-control-round" placeholder="Link">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning float-right">Submit</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                @endsection