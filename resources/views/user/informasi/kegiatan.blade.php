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
        <div
          class="img overlay"
          style="background-image: url({{asset('images/gambar_1.png.jpg')}}); opacity: 0.5;"
        ></div>
        <div
          class="img overlay"
          style="background-image: url({{asset('images/gambar_2.png.jpg')}}); opacity: 0.5;"
        ></div>
        <div
          class="img overlay"
          style="background-image: url({{asset('images/gambar_3.png.jpg')}}); opacity: 0.5;"
        ></div>
      </div>

      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up" style="text-align: left;"> 
              Selamat Datang di Kelurahan Kedundung!
            </h1>
            {{-- <h3 class='heading'data-aos="fade-up">
              Selamat datang di website resmi Kelurahan Gunung Gedangan, Tempat yang penuh dengan keindahan alam dan masyrakat yang ramah. Kami dengan bangga mempersembahkan berbagai informasi tentang kelurahan kami, termasuk Sejarah, Layanan Publik dan Informasi lainnya
            </h3> --}}
            <h2 class='heading' data-aos="fade-up" style="text-align: left; font-weight: normal;font-size: 18px;">
              Selamat datang di website resmi Kelurahan Gunung Gedangan. Kami dengan bangga mempersembahkan berbagai informasi tentang kelurahan kami, termasuk Sejarah, Layanan Publik dan Informasi lainnya
          </h2>
          {{-- <button type="submit" class="btn btn-primary">Explore Lebih Jauh</button> --}}
          <a href="{{url('/profil/tentang')}}" class="btn btn-warning rounded-pill py-3 px-5 animated slideInLeft" style="background-color: #FF8811; color:white">Explore Lebih Jauh</a>

            {{-- <form
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
            </form> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            <h2 class="font-weight-bold text-primary heading">
              Kegiatan
            </h2>
          </div>
          {{-- <div class="col-lg-6 text-lg-end">
            <p>
              <a
                href="{{url('/informasi/kegiatan')}}"
                target="_blank"
                class="btn btn-primary text-white py-3 px-4"
                >Lihat semua kegiatan</a
              >
            </p>
          </div> --}}
        </div>
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
                <div class="property-item">
                  <a href="property-single.html" class="img">
                    <img src="images/kegiatan/gambar2.png" alt="Image" class="img-fluid" />
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
                    <img src="images/kegiatan/gambar1.jpg" alt="Image" class="img-fluid" />
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
                    <img src="images/kegiatan/gambar3.jpg" alt="Image" class="img-fluid" />
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
                    {{-- <div class="price mb-2"><span>$1,291,000</span></div> --}}
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
                <!-- .item -->

             
                <!-- .item -->

                
                <!-- .item -->

                
                <!-- .item -->

               
                <!-- .item -->

              
                <!-- .item -->
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