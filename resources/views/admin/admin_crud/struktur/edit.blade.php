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
                                    <h4>Edit Struktur Organisasi</h4>
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
                                    <li class="breadcrumb-item"><a href="{{route('struktur.index')}}">Edit Struktur Organisasi</a>
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
                                    <h4 class="sub-title">Struktur Organisasi</h4>
                                    <form action="{{route('struktur.update', $struktur->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Id Struktur</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="id" id="id" class="form-control form-control-round" placeholder="{{$struktur->id}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Pengurus</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama_pengurus" id="nama_pengurus" value="{{$struktur->nama_pengurus}}" class="form-control form-control-round" placeholder="Nama Pengurus">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar Pengurus</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="gambar_pengurus" id="gambar_pengurus" class="form-control form-control-round" value="{{$struktur->gambar_pengurus}}">
                                                <small class="form-text text-muted">Pastikan gambar memiliki rasio (1:1) untuk hasil terbaik.</small>
                                                <small class="form-text text-muted">Pastikan gambar sudah diinputkan.</small>
                                                <img width="250px" src="{{asset('storage/'.$struktur->gambar_pengurus)}}" alt="Image">
                                            </div>
                                        </div>                       
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="jabatan" id="jabatan" value="{{$struktur->jabatan}}" class="form-control form-control-round" placeholder="Jabatan">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning float-right"> Submit</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                @endsection