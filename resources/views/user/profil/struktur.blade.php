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
    <div class="section"></div>
    <div class="section section-4 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-5">
            <h2 class="font-weight-bold heading text-primary mb-4">
              Struktur Kelurahan Kedundung
            </h2>
            <p class="text-black-50">
              Struktur Organisasi Kelurahan Kedundung menampilkan susunan hierarki yang jelas 
              dan terperinci tentang para pejabat dan staf yang bertanggung jawab dalam mengelola 
              dan menyediakan layanan untuk warga.
            </p>
          </div>
        </div>
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
            <div class="img-about dots">
              <img src="{{asset('images/struktur.png')}}" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-person"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">YUKHAL MEI IRWANTO</h3>
                <p class="text-black-50">
                  Lurah Kedundung
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-person"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">ENI WULANDARI, SH</h3>
                <p class="text-black-50">
                  Sekretaris Kelurahan Kedundung
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-person"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">NURALIH , SE</h3>
                <p class="text-black-50">
                  Kepala Seksi Tata Pemerintahan, Ketentraman dan Ketertiban Umum
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="section">
      <div class="row justify-content-center footer-cta" data-aos="fade-up">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4">Be a part of our growing real state agents</h2>
          <p>
            <a
              href="#"
              target="_blank"
              class="btn btn-primary text-white py-3 px-4"
              >Apply for Real Estate agent</a
            >
          </p>
        </div>
        <!-- /.col-lg-7 -->
      </div>
      <!-- /.row -->
    </div> --}}

    <div class="section section-5">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-6 mb-5">
            <h2 class="font-weight-bold heading text-primary mb-4">
              Tugas Umum Pemerintahan
            </h2>
          </div>
        </div>
        <div class="row">
          {{-- <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <div class="person-contents bg-light">
                <h2 class="mb-0">Lurah</h2>
                <p style="text-align: left">
                  1. Melaksanakan kegiatan pemerintahan kelurahan
                </p>
                <p style="text-align: left">
                  2. Melakukan pemberdayaan masyarakat
                </p>
                <p style="text-align: left">
                  3. Melaksanakan pelayanan masyarakat
                </p>
                <p style="text-align: left">
                  4. Memelihara Ketentraman dan ketertiban umum
                </p>
                <p style="text-align: left">
                  5. Memelihara sarana dan prasarana serta fasilitas pelayanan umum
                </p>
              </div>
            </div>
          </div> --}}
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">

              <div class="person-contents bg-light">
                <h2 class="mb-0">Lurah</h2>
                <p>Lurah mempunyai tugas pokok menyelenggarakan urusan pemerintahan, pembangunan dan kemasyarakatan</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">

              <div class="person-contents bg-light">
                <h2 class="mb-0">Sekeretaris</h2>
                <p> penyusunan program, ketatalaksanaan, ketatausahaan, keuangan, kepegawaian, urusan rumah tangga, perlengkapan, kehumasan dan kepustakaan serta kearsipan</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <div class="person-contents bg-light">
                <h2 class="mb-0">Kepala Seksi Tata Pemerintahan, Ketentraman dan Ketertiban Umum</h2>
                <p>
                  melaksanakan tugas pokok penyelenggaraan sebagian urusan otonomi daerah 
                  bidang pemerintahan, ketentraman dan ketertiban umum di tingkat Kelurahan.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <div class="person-contents bg-light">
                <h2 class="mb-0">Kepala Seksi Sosial dan Pemberdayaan Masyarakat</a></h2>
                <p>
                  penyelenggaraan sebagian urusan otonomi daerah bidang pemberdayaan masyarakat di Kelurahan
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <div class="person-contents bg-light">
                <h2 class="mb-0"><a href="#">Kepala Seksi Prasana dan Prasarana Wilayah</a></h2>
                <p>
                  penyelenggaraan sebagian urusan otonomi daerah bidang prasana dan prasarana di Kelurahan
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <div class="person-contents bg-light">
                <h2 class="mb-0"><a href="#">Pengelola Keuangan</a></h2>
                <p>
                  penyelenggaraan sebagian urusan otonomi daerah bidang pengelolahan keuangan di Kelurahan
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <div class="person-contents bg-light">
                <h2 class="mb-0"><a href="#">Pengadministrasi Pemerintahan</a></h2>
                <p>
                  penyelenggaraan sebagian urusan otonomi daerah bidang administrasi di Kelurahan
                </p>
              </div>
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