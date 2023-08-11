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
                                    <h4>Edit Berita</h4>
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
                                    <li class="breadcrumb-item"><a href="{{route('berita.index')}}">Edit Berita</a>
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
                                    <h4 class="sub-title">Berita</h4>
                                    <form action="{{route('berita.update', $berita->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Id Berita</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="id" id="id" class="form-control form-control-round" placeholder="{{$berita->id}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar Berita</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="gambar_berita" id="gambar_berita" class="form-control form-control-round" value="{{$berita->gambar_berita}}">
                                                <small class="form-text text-muted">Pastikan gambar memiliki rasio (1:1) untuk hasil terbaik.</small>
                                                <img width="250px" src="{{asset('storage/'.$berita->gambar_berita)}}" alt="Image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Berita</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="tanggal_berita" id="tanggal_berita" value="{{$berita->tanggal_berita}}" class="form-control form-control-round" placeholder="Tanggal Berita">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Judul Berita</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="judul_berita" id="judul_berita" value="{{$berita->judul_berita}}" class="form-control form-control-round" placeholder="Judul Berita">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Isi Berita</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="isi_berita" id="isi_berita" value="{{$berita->isi_berita}}" class="form-control form-control-round" placeholder="Isi Berita">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Link</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="link" id="link" value="{{$berita->link}}" class="form-control form-control-round" placeholder="Link">
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