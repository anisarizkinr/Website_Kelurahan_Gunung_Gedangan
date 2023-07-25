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
          style="background-image: url('images/gambar_1.png'); opacity: 0.5;"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/gambar_2.png'); opacity: 0.5;"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/gambar_3.png'); opacity: 0.5;"
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
        <div class="row section-counter mt-5">
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">16330</span></span
              >
              <span class="caption text-black-50"> Jumlah Penduduk /Jiwa</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">8087</span></span
              >
              <span class="caption text-black-50">Jumlah Penduduk Laki-laki/Jiwa</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">7826</span></span
              >
              <span class="caption text-black-50">Jumlah Penduduk Perempuan/Jiwa</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">1</span></span
              >
              <span class="caption text-black-50">Jumlah Kepala Keluarga /Jiwa</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section" style="background-color: #edf2fb;">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            <h2 class="font-weight-bold text-primary heading">
              Kegiatan
            </h2>
          </div>
          <div class="col-lg-6 text-lg-end">
            <p>
              <a
                href="{{url('/informasi/kegiatan')}}"
                target="_blank"
                class="btn btn-primary text-white py-3 px-4"
                >Lihat semua kegiatan</a
              >
            </p>
          </div>
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

    <div class="section sec-testimonials">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-6">
            <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
              Kepengurusan
            </h2>
          </div>
          <div class="col-md-6 text-md-end">
            <div id="testimonial-nav">
              <span class="prev" data-controls="prev">Prev</span>

              <span class="next" data-controls="next">Next</span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4"></div>
        </div>
        <div class="testimonial-slider-wrap">
          <div class="testimonial-slider">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="box-feature">
                <h3 class="mb-3">YUKHAL MEI IRWANTO</h3>
                <img
                src="images/person_1-min.jpg"
                alt="Image"
                class="img-fluid rounded-circle w-5 mb-4"
                />
                <p class="mb-3">Lurah Kedundung</p>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="box-feature">
                {{-- <span class="flaticon-house"></span> --}}
                <br>
                <h3 class="mb-3">ENI WULANDARI, SH</h3>
                <img
                src="images/person_4-min.jpg"
                alt="Image"
                class="img-fluid rounded-circle w-5 mb-4"
                />
                <p class="mb-3">Sekretaris</p>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="box-feature">
                {{-- <span class="flaticon-house"></span> --}}
                <br>
                <h3 class="mb-3">	
                  NURALIH , SE </h3>
                <img
                src="images/person_4-min.jpg"
                alt="Image"
                class="img-fluid rounded-circle w-5 mb-4"
                />
                <p class="mb-3">Kepala Seksi Tata Pemerintahan, Ketentraman dan Ketertiban Umum</p>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="box-feature">
                {{-- <span class="flaticon-house"></span> --}}
                <br>
                <h3 class="mb-3">	
                  MOCHAMMAD AGUS WIDODO </h3>
                <img
                src="images/person_2-min.jpg"
                alt="Image"
                class="img-fluid rounded-circle w-5 mb-4"
                />
                <p class="mb-3">Kepala Seksi Sosial dan Pemberdayaan Masyarakat</p>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="box-feature">
                {{-- <span class="flaticon-house"></span> --}}
                <br>
                <h3 class="mb-3">	
                  HERI W.</h3>
                <img
                src="images/person_3-min.jpg"
                alt="Image"
                class="img-fluid rounded-circle w-5 mb-4"
                />
                <p class="mb-3">Kepala Seksi Prasana dan Prasarana Wilayah</p>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="box-feature">
                {{-- <span class="flaticon-house"></span> --}}
                <br>
                <h3 class="mb-3">	
                  ENI NURHAYATI</h3>
                <img
                src="images/person_5-min.jpg"
                alt="Image"
                class="img-fluid rounded-circle w-5 mb-4"
                />
                <p class="mb-3">Pengelola Keuangan</p>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="box-feature">
                {{-- <span class="flaticon-house"></span> --}}
                <br>
                <h3 class="mb-3">	
                  ASIYAH, SE</h3>
                <img
                src="images/person_4-min.jpg"
                alt="Image"
                class="img-fluid rounded-circle w-5 mb-4"
                />
                <p class="mb-3">Pengadministrasi Pemerintahan</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    {{-- <section class="features-1">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature">
              <h3 class="mb-3">YUKHAL MEI IRWANTO</h3>
              <img
              src="images/person_1-min.jpg"
              alt="Image"
              class="img-fluid rounded-circle w-5 mb-4"
              />
              <p class="mb-3">Lurah Kedundung</p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature">
              <span class="flaticon-house"></span>
              <br>
              <h3 class="mb-3">ENI WULANDARI, SH</h3>
              <img
              src="images/person_4-min.jpg"
              alt="Image"
              class="img-fluid rounded-circle w-5 mb-4"
              />
              <p class="mb-3">Sekretaris</p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature">
              <span class="flaticon-house"></span>
              <br>
              <h3 class="mb-3">	
                NURALIH , SE </h3>
              <img
              src="images/person_4-min.jpg"
              alt="Image"
              class="img-fluid rounded-circle w-5 mb-4"
              />
              <p class="mb-3">Kepala Seksi Tata Pemerintahan, Ketentraman dan Ketertiban Umum</p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature">
              <span class="flaticon-house"></span>
              <br>
              <h3 class="mb-3">	
                MOCHAMMAD AGUS WIDODO </h3>
              <img
              src="images/person_2-min.jpg"
              alt="Image"
              class="img-fluid rounded-circle w-5 mb-4"
              />
              <p class="mb-3">Kepala Seksi Sosial dan Pemberdayaan Masyarakat</p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature">
              <span class="flaticon-house"></span>
              <br>
              <h3 class="mb-3">	
                HERI W.</h3>
              <img
              src="images/person_3-min.jpg"
              alt="Image"
              class="img-fluid rounded-circle w-5 mb-4"
              />
              <p class="mb-3">Kepala Seksi Prasana dan Prasarana Wilayah</p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature">
              <span class="flaticon-house"></span>
              <br>
              <h3 class="mb-3">	
                ENI NURHAYATI</h3>
                <img
                src="images/person_4-min.jpg"
                alt="Image"
                class="img-fluid rounded-circle w-5 mb-4"
                />
              <p class="mb-3">Pengelola Keuangan</p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature">
              <span class="flaticon-house"></span>
              <br>
              <h3 class="mb-3">	
                ASIYAH, SE</h3>
              <img
              src="images/person_4-min.jpg"
              alt="Image"
              class="img-fluid rounded-circle w-5 mb-4"
              />
              <p class="mb-3">Pengadministrasi Pemerintahan</p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="box-feature">
              <span class="flaticon-house-3"></span>
              <h3 class="mb-3">Real Estate Agent</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptates, accusamus.
              </p>
              <p><a href="#" class="learn-more">Learn More</a></p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <div class="box-feature">
              <h2 class="mb-3">Pengaduan</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptates, accusamus.
              </p>
              <p><a href="#" class="learn-more">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

   

    <div class="section section-4 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-5">
            <h2 class="font-weight-bold heading text-primary mb-4">
              Pengaduan
            </h2>
            <p class="text-black-50">
              "Kami Di Sini Untuk Membantu - Laporkan Masalah Anda Melalui Pengaduan."
            </p>
          </div>
        </div>
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
            <div class="img-about dots">
              <img src="images/pengaduan.jpg" alt="Image" class="img-fluid" />
            </div>
           
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <a href="https://curhatningita.lapor.go.id/">
                <span class="icon-people"></span>
                </a>
              </span>
              <div class="feature-text">
                <h3 class="heading">Lapor Ning Ita</h3>
                <p class="text-black-50">
                  Adukan Laporan Anda melalui Ning Ita
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
                <span class="wrap-icon me-3">
                  <a href="https://curhatningita.lapor.go.id/">9
                  <span class="icon-phone"></span>
                  </a>
                </span>
              <div class="feature-text">
                <h3 class="heading">Chat Disini</h3>
                <p class="text-black-50">
                  Adukan Laporan Anda melalui pesan Whats App berikut
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

    {{-- <div class="section section-5 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-6 mb-5">
            <h2 class="font-weight-bold heading text-primary mb-4">
              Our Agents
            </h2>
            <p class="text-black-50">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
              enim pariatur similique debitis vel nisi qui reprehenderit totam?
              Quod maiores.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <img
                src="images/person_1-min.jpg"
                alt="Image"
                class="img-fluid"
              />

              <div class="person-contents">
                <h2 class="mb-0"><a href="#">James Doe</a></h2>
                <span class="meta d-block mb-3">Real Estate Agent</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Facere officiis inventore cumque tenetur laboriosam, minus
                  culpa doloremque odio, neque molestias?
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <img
                src="images/person_2-min.jpg"
                alt="Image"
                class="img-fluid"
              />

              <div class="person-contents">
                <h2 class="mb-0"><a href="#">Jean Smith</a></h2>
                <span class="meta d-block mb-3">Real Estate Agent</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Facere officiis inventore cumque tenetur laboriosam, minus
                  culpa doloremque odio, neque molestias?
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <img
                src="images/person_3-min.jpg"
                alt="Image"
                class="img-fluid"
              />

              <div class="person-contents">
                <h2 class="mb-0"><a href="#">Alicia Huston</a></h2>
                <span class="meta d-block mb-3">Real Estate Agent</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Facere officiis inventore cumque tenetur laboriosam, minus
                  culpa doloremque odio, neque molestias?
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}


    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>


  </body>
@endsection