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
                                    <h4>Edit Tabel Data</h4>
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
                                    <li class="breadcrumb-item"><a href="{{route('data.create')}}">Edit Tabel Data</a>
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
                                        <form action="{{route('data.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Id Data</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="id" id="id" class="form-control form-control-round"
                                                    placeholder="{{$data->id}}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Kategori</label>
                                                <div class="col-sm-10">
                                                    <select name="id_kategori" id="id_kategori" class="form-control form-control-round" value="{{$data->id_kategori}}">
                                                        <option>{{$data->id_kategori}}</option>
                                                        @foreach ($kategori as $ktg)
                                                        <option value="{{$ktg->id}}">{{$ktg->nama_kategori}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Judul</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="judul" id="judul" value="{{$data->judul}}"
                                                        class="form-control form-control-round"
                                                        placeholder="Judul">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Isi Data</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="isi_data" id="isi_data" value="{{$data->isi_data}}"
                                                            class="form-control "
                                                            placeholder="Isi Data"
                                                            rows="5">{{$data->isi_data}}</textarea>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Isi Data</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="isi_data" id="isi_data" value="{{$data->isi_data}}"
                                                        class="form-control form-control-round"
                                                        placeholder="isi_data">
                                                    </div>
                                                </div> --}}
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Keterangan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="keterangan" id="keterangan" value="{{$data->keterangan}}"
                                                        class="form-control form-control-round"
                                                        placeholder="keterangan">
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