@extends('layout.master')
@section('content')

<body>
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  <!-- <div class="col-lg-6 text-center mx-auto">
    <h2 class="font-weight-bold text-primary heading">
      DATA KELURAHAN KEDUNDUNG
    </h2>
  </div> -->
  <h2 class="map-heading">LETAK GEOGRAFIS KELURAHAN KEDUNDUNG</h2>
  <div class="map-container">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15824.03755714312!2d112.44941831093658!3d-7.464211637455119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780dbf5aaac4b9:0x69b511b918f37238!2sKedundung,%20Magersari,%20Mojokerto%20City,%20East%20Java!5e0!3m2!1sen!2sid!4v1524357305622" width="800" height="450" style="margin-top: 180px;"></iframe>
  </div>


  <section class="features-1">
    <div class="container">
      <h2 class="font-weight-bold heading text-primary mb-4 mb-md-4" style="text-align: left;">
        Batas Wilayah
      </h2>
      <div class="row">
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="box-feature">
            <img src="{{asset('images/geografis/north.png')}}" alt="Image" width="70px" style="margin-bottom:10px ;">
            <h3 class="mb-3">Sebelah Utara</h3>
            <p>
              Batas wilayah Kelurahan Kedundung di sebelah utara secara administratif adalah Kelurahan Wates
            </p>
            <p><a href="https://www.google.com/maps/place/Wates,+Kec.+Magersari,+Kota+Mojokerto,+Jawa+Timur/@-7.4551344,112.4412357,15z/data=!3m1!4b1!4m6!3m5!1s0x2e780de88aa6c749:0x9e15c7e712b55ec3!8m2!3d-7.4552685!4d112.4485176!16s%2Fg%2F1hc0gwq7k?entry=ttu" class="learn-more" target="_blank">Kunjungi Peta</a></p>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="box-feature">
            <img src="{{asset('images/geografis/south.png')}}" alt="Image" width="70px" style="margin-bottom:10px ;">
            <h3 class="mb-3">Sebelah Selatan</h3>
            <p>
              Batas wilayah Kelurahan Kedundung di sebelah utara secara administratif adalah Kelurahan Gunung Gedangan
            </p>
            <p><a href="https://www.google.com/maps/place/Gn.+Gedangan,+Kec.+Magersari,+Kota+Mojokerto,+Jawa+Timur/@-7.4744769,112.4455527,15z/data=!3m1!4b1!4m6!3m5!1s0x2e780da2b7a1c6a9:0x3822b686e2b7fff3!8m2!3d-7.4763683!4d112.4559679!16s%2Fg%2F12lngwxz3?entry=ttu" class="learn-more" target="_blank">Kunjungi Peta</a></p>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="box-feature">
            <img src="{{asset('images/geografis/west.png')}}" alt="Image" width="70px" style="margin-bottom:10px ;">
            <h3 class="mb-3">Sebelah Barat</h3>
            <p>
              Batas wilayah Kelurahan Kedundung di sebelah utara secara administratif adalah Kelurahan Balongsari
            </p>
            <p><a href="https://www.google.com/maps/place/Balongsari,+Kec.+Magersari,+Kota+Mojokerto,+Jawa+Timur/@-7.468442,112.4340332,15z/data=!3m1!4b1!4m6!3m5!1s0x2e780d923ef27103:0xbd7be00bb94c1fa7!8m2!3d-7.4668863!4d112.4440473!16s%2Fg%2F1hc0hs3b5?entry=ttu" class="learn-more" target="_blank">Kunjungi Peta</a></p>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <div class="box-feature">
            <img src="{{asset('images/geografis/east.png')}}" alt="Image" width="70px" style="margin-bottom:10px ;">
            <h3 class="mb-3">Sebelah Timur</h3>
            <p>
              Batas wilayah Kelurahan Kedundung di sebelah utara secara administratif adalah Desa Kepuhanyar Kabupaten Mojokerto
            </p>
            <p><a href="https://www.google.com/maps/place/Kepuhanyar,+Kec.+Mojoanyar,+Kabupaten+Mojokerto,+Jawa+Timur/@-7.463938,112.46397,14.41z/data=!4m6!3m5!1s0x2e780db529ba111f:0xd9362c6ff11c01d9!8m2!3d-7.4649815!4d112.4798088!16s%2Fg%2F1226mpx5?entry=ttu" class="learn-more" target="_blank">Kunjungi Peta</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section">
    <div class="container">
      <div class="row section-counter mt-5">
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"><span class="countup text-primary">16095</span></span>
            <span class="caption text-black-50"> Jumlah Penduduk /Jiwa</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"><span class="countup text-primary">8179</span></span>
            <span class="caption text-black-50">Jumlah Penduduk Laki-laki/Jiwa</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"><span class="countup text-primary">7916</span></span>
            <span class="caption text-black-50">Jumlah Penduduk Perempuan/Jiwa</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"><span class="countup text-primary">5308</span></span>
            <span class="caption text-black-50">Jumlah Kepala Keluarga /Jiwa</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Preloader -->
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>


</body>
@endsection