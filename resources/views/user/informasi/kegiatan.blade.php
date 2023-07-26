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

    
    
   
    <div class="section">

    </div>
    <div class="section" style="background-color: #edf2fb;">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            <h2 class="font-weight-bold text-primary heading">
              Kegiatan
            </h2>
          </div>
          
        </div>
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
                <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="{{asset('images/kegiatan/gambar2.png')}}" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    {{-- <div class="price mb-2"><span>$1,291,000</span></div> --}}
                    <div>
                      <span class="d-block mb-2 text-black-50"
                        >10 November 2022</span
                      >
                      <span class="city d-block mb-3">Kelurahan Kedundung, Kolaborasi Benik Sekeping dan KWT Turunkan Stunting</span>

                       <p>
                        KELURAHAN Kedundung, Kecamatan Magersari turut berkontribusi aktif dalam mewujudkan Kota Mojokerto menuju zero stunting. 
                        Berkat kolaborasi antara program Benik Sekeping dan Kelompok Wanita Tani (KWT) Kelurahan Kedundung yang berhasil sukseskan percepatan penurunan 

                       </p>
                     

                      <a
                        href=""
                        class="btn btn-primary py-2 px-3"
                        >Lihat lebih lanjut</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="{{asset('images/kegiatan/gambar1.jpg')}}" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    {{-- <div class="price mb-2"><span>$1,291,000</span></div> --}}
                    <div>
                      <span class="d-block mb-2 text-black-50"
                        >26 Juli 2022</span
                      >
                      <span class="city d-block mb-3">Kedundung Kota Mojokerto Masuk Nominasi Kelurahan Terbaik Lomba Gotong Royong Tingkat Provinsi Jatim</span>

                        <p>
                          Kota Mojokerto, Bhirawa
                          Kehidupan masyarakat Kota Mojokerto ternyata masih memegang teguh budaya leluhurnya yakni sifat
                          berat sama dipikul,   
                          
                        </p>
                     

                      <a
                        href="https://www.harianbhirawa.co.id/kedundung-kota-mojokerto-masuk-nominasi-kelurahan-terbaik-lomba-gotong-royong-tingkat-provinsi-jatim/"
                        class="btn btn-primary py-2 px-3"
                        >Lihat lebih lanjut</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="{{asset('images/kegiatan/gambar3.jpg')}}" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    {{-- <div class="price mb-2"><span>$1,291,000</span></div> --}}
                    <div>
                      <span class="d-block mb-2 text-black-50"
                        >15 oktober 2022</span
                      >
                      <span class="city d-block mb-3">Sebanyak 1.584 Kepala Keluarga Warga Kelurahan Kedundung Mendapat BLT Tahap VII Dari Kemensos</span>

                        <p>
                          <p>
                            KOTA MOJOKERTO – RI, Warga Kelurahan Kedundung hari ini, Rabu (14/10/20) 
                            telah mendapat Bantuan Langsung Tunai (BLT) tahap VII dari Kemensos, sebanyak 1584 Kepala Keluarga (KK) 
                           
                          </p>
                        </p>
                      

                      <a
                        href="https://radarindonesiaonline.com/sebanyak-1-584-kepala-keluarga-warga-kelurahan-kedundung-mendapat-blt-tahap-vii-dari-kemensos/"
                        class="btn btn-primary py-2 px-3"
                        >Lihat lebih lanjut</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .item -->

                <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="images/img_4.jpg" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    <div class="price mb-2"><span>$1,291,000</span></div>
                    <div>
                      <span class="d-block mb-2 text-black-50"
                        >10 april 2022</span
                      >
                      <span class="city d-block mb-3">........</span>

                   <p>
                    .........................
                   </p>

                      <a
                        href="property-single.html"
                        class="btn btn-primary py-2 px-3"
                        >Lihat lebih lanjut</a
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div
                id="property-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation"
              >
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="property"
                  tabindex="-1"
                  >Prev</span
                >
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="property"
                  tabindex="-1"
                  >Next</span
                >
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