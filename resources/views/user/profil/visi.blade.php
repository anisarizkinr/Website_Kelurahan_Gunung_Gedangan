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
            VISI DAN MISI

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
            VISI
          </h2>
          <h5>TERWUJUDNYA KOTA MOJOKERTO YANG BERDAYA SAING, MANDIRI, DEMOKRATIS, ADIL, MAKMUR, SEJAHTERA DAN BERMARTABAT.”</h5>
        </div>
      </div>


      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-6 mb-5 box">
            <h2 class="font-weight-bold heading text-primary mb-4 centered-text">
              MISI
            </h2>
            <h5 class="box-child">
              <img src="{{asset('images/sdm.png')}}" alt="Image" class="img-fluid w-5 mb-4 float-start" />
              Mewujudkan SDM Berkualitas melalui peningkatan akses dan kualitas pendidikan dan pelayanan kesehatan
            </h5>
            <h5 class="box-child">
              <img src="{{asset('images/sdm.png')}}" alt="Image" class="img-fluid w-5 mb-4 float-start" />
              Mewujudkan Ketertiban, supremasi hukum dan HAM
            </h5>
            <h5 class="box-child">Mewujudkan pemerintaha daerah yang efektif, demokratis, bersih, proffesional, dan adil dalam melayani masyarakat</h5>
            <h5 class="box-child">Mewujudkan ekonomi daerah yang mandiri, berdaya saing, berkeadilan dan berbasis pada ekonomi kerakyatan melalui peningkatan fasilitas pembangunan infrastruktur daerah</h5>
            <h5 class="box-child">Mewujudkan ketahanan sosial budaya dalam rangka integrasi nasional, pada tatanan masyarakat yang bermartabat, berakhlak mulia, beretika, dan berbudaya luhur berlandaskan Pancasila</h5>
            <h5 class="box-child">Mewujudkan partisipasi masyarakat melalui pemberian akses dan kesempatan dalam pembangunan</h5>
            <h5 class="box-child">Mewujudkan anggaran pendapatan dan belanja yang lebih mengutamakan kesejahteraan masyarakat</h5>
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