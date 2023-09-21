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
                                    <h4>Edit Sosial Media</h4>
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
                                    <li class="breadcrumb-item"><a href="{{route('sosmed.index')}}">Edit Sosial Media</a>
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
                                    <h4 class="sub-title">Sosial Media</h4>
                                    <form action="{{route('sosmed.update', $sosmed->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                       
                                       
                                       
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Icon</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="icon" id="icon" value="{{$sosmed->icon}}" class="form-control form-control-round" placeholder="icon">
                                                <small class="form-text text-muted">Tulis icon dengan huruf kecil, contoh: instagram, facebook.</small>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Link</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="link" id="link" value="{{$sosmed->link}}" class="form-control form-control-round" placeholder="link">
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