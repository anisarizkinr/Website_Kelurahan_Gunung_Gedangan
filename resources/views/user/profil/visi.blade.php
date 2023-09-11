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


  <div class="hero">
    <div class="hero-slide">
      <div class="img overlay" style="background-image: url({{asset('images/kotamjk.jpg')}}); opacity: 0.5;"></div>
    </div>

    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9 text-center">
          <h1 class="heading" data-aos="fade-up" style="text-align: left;">
            MOTTO dan PRIMA

            <!-- <form
              action="#"
              class="narrow-w form-search d-flex align-items-stretch mb-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <input
                type="text"
                class="form-control px-4"
                placeholder="Your ZIP code or City. e.g. New York"
              />
              <button type="submit" class="btn btn-primary" style="background-color: #FF8811; ">Explore Lebih Jauh</button>
            </form> -->
        </div>
      </div>
    </div>
  </div>

  <div class="section section-6 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-6 mb-5 box"> <!-- Tambahkan kelas "box" di sini -->
          <h2 class="font-weight-bold heading text-primary mb-4 centered-text">
            MOTTO
          </h2>
          <h5>" KELURAHAN KEDUNDUNG SELALU PRIMA DALAM PELAYANAN”</h5>
        </div>
      </div>


      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-6 mb-5 box">
            <h2 class="font-weight-bold heading text-primary mb-4 centered-text">
              PRIMA
            </h2>
            <h5 class="box-child">
              <img src="{{asset('images/sdm.png')}}" alt="Image" class="img-fluid w-5 mb-4 float-start" />
              Profesional dalam melaksanakan tugas
            </h5>
            <h5 class="box-child">
              <img src="{{asset('images/sdm.png')}}" alt="Image" class="img-fluid w-5 mb-4 float-start" />
              Ramah dalam melayani masyarakat
            </h5>
            <h5 class="box-child">Informatif dalam memberikan pelayanan</h5>
            <h5 class="box-child">Melayani dengan hati yang tulus</h5>
            <h5 class="box-child">Akuntable dalam menjalankan tugas</h5>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Preloader -->
    <!-- <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div> -->
</body>
@endsection