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
                          <strong>Whoops!</strong> Ada Kesalahan dalam Data Penginputan<br><br>
                          <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                      <form method="post" action="{{ route('galeri.update', $galeri->id) }}" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <div class="form-group">
                              <label for="gambar">Gambar</label>
                              
                              <img class="img-preview mb-3 w-100" style="border-radius: 20px;">
                                              <input type="file" class="form-control" id="photo" placeholder="Photo"
                                                  name="gambar" required onchange="previewImage()" />
                          </div>
                          <a class="btn btn-secondary " href="{{ route('galeri.index') }}">Kembali</a>
                          <button type="submit" class="btn btn-primary">Submit</button>
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
      <script>
        function previewImage(){
                            const image = document.querySelector('#photo');
                            const imgPreview = document.querySelector('.img-preview');
                  
                            imgPreview.style.width = '150px';
                  
                            const oFReader = new FileReader();
                            oFReader.readAsDataURL(image.files[0]);
                  
                            oFReader.onload = function(oFREvent){
                              imgPreview.src = oFREvent.target.result;
                            }
                          }
                  
                          document.addEventListener('trix-file-accept', function(e){
                            e.preventDefault()
                          })
    </script>


 




@endsection