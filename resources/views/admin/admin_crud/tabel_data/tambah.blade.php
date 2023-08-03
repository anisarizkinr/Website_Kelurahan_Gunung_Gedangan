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
                                    <h4>Tambah Tabel Data</h4>
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
                                    <li class="breadcrumb-item"><a href="{{route('data.create')}}">Tambah Tabel Data</a>
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
                                        <h4 class="sub-title">Tabel data</h4>
                                        <form action="{{route('data.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Id Data</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="id" id="id" class="form-control form-control-round"
                                                    placeholder="{{$data->id}}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Id Kategori Data</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="id_kategori" id="id" class="form-control form-control-round"
                                                    placeholder="{{$data->id}}" disabled>
                                                </div>
                                            </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Judul</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="judul" id="judul"
                                                        class="form-control form-control-round"
                                                        placeholder="Judul Kategori">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Isi Data</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="isi_data" id="isi_data"
                                                        class="form-control form-control-round"
                                                        placeholder="Isi Data">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Keterangan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="keterangan" id="keterangan"
                                                        class="form-control form-control-round"
                                                        placeholder="Keterangan">
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