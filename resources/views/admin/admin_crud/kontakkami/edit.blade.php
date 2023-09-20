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
                                    <h4>Kontak</h4>
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
                                    <li class="breadcrumb-item"><a href="{{route('kontakkami.index')}}">Edit Kontak</a>
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
                                    <h4 class="sub-title">Kontak</h4>
                                    <form action="{{route('kontakkami.update', $kontakkami->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                       
                                       
                                       
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="alamat" id="alamat" value="{{$kontakkami->alamat}}" class="form-control form-control-round" placeholder="alamat">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Telepon</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="keterangan" id="keterangan" value="{{$kontakkami->telepon}}" class="form-control form-control-round" placeholder="telepon">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="email" id="email" value="{{$kontakkami->email}}" class="form-control form-control-round" placeholder="email">
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