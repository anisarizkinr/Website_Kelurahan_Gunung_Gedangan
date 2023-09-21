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
                                        <h4>Data Galeri</h4>
                                        
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
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->
                
     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card card-secondary">
                  <div class="card-header">
                      {{-- <h3 class="card-title">{{ $title }}</h3> --}}
                  </div>
                  <div class="card-body">
                      @if ($errors->any())
                      <div class="alert alert-danger">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                      <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                              <label for="gambar">Gambar</label>
                              <input type="file" name="gambar" class="form-control" id="gambar" aria-describedby="gambar" >
                          </div>
                          <button type="submit" class="btn btn-warning">Submit</button>
                      </form>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.card-footer-->
        </div>
          
        <!-- /.card -->
      </section>
      <!-- /.content -->


 




@endsection