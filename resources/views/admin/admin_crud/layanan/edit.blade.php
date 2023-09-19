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
                                    <h4>Edit Layanan</h4>
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
                                    <li class="breadcrumb-item"><a href="{{route('layanan.create')}}">Tambah Layanan</a>
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
                                        <h4 class="sub-title">Layanan</h4>
                                        <form action="{{route('layanan.update', $layanan->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Id Layanan </label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="id" id="id" class="form-control form-control-round"
                                                    placeholder="{{$layanan->id}}" disabled>
                                                </div>
                                            </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Judul Layanan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="judul" id="judul" value="{{$layanan->judul}}"
                                                        class="form-control form-control-round"
                                                        placeholder="Judul Layanan">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Isi Layanan</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="isi_layanan" id="isi_layanan" value="{{$layanan->isi_layanan}}"
                                                            class="form-control "
                                                            placeholder="Isi Layanan"
                                                            rows="5">{{$layanan->isi_layanan}}</textarea>
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