<nav class="site-nav">
    <div class="container">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <img
                  src="{{asset('images/logo kota mojokerto.png')}}"
                  alt="Image"
                  class="img-fluid w-5 mb-4 float-start"
                />
                {{-- style="background-image: url({{asset('images/gambar_1.png')}}); opacity: 0.5;" --}}
          <a href="{{url('/beranda')}}" class="logo m-0 float-start">Kelurahan <br> Kedundung </a>
          <ul
            class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
          >
          <br>
            <li ><a href="{{url('/beranda')}}" style="font-size: 18px;">Home</a></li>
            <li class="has-children">
              <a href="" style="font-size: 18px;">Profil</a>
              <ul class="dropdown">
                <li><a href="{{url('/profil/sejarah')}}">Sejarah</a></li>
                <li><a href="{{url('/profil/visi')}}">Motto & Prima</a></li>
                <li><a href="{{url('/profil/geografis')}}">Geografis & Kependudukan</a></li>
                <li><a href="{{url('/profil/struktur')}}">Struktur Pemerintahan</a></li>
              </ul>
            </li>
            <li class="has-children">
              <a href="" style="font-size: 18px;">Informasi</a>
              <ul class="dropdown">
                <li><a href="{{url('/informasi/berita')}}">Berita</a></li>
                <li><a href="{{url('/informasi/galeri')}}">Galeri</a></li>
              </ul>
            </li>
            <li ><a href="{{url('/layanan_user')}}" style="font-size: 18px;">Layanan</a></li>
            <li><a href="{{url('/data_user')}}" style="font-size: 18px;">Data</a></li>
            <li><a href="https://curhatningita.lapor.go.id/" style="font-size: 18px;">Curhat Ning Ita</a></li>
            <li><a href="{{url('/login')}}" class="btn btn-secondary rounded-pill py-3 px-5">Login</a></li>
          </ul>
          <a
            href="#"
            class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
            data-toggle="collapse"
            data-target="#main-navbar"
          >
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </nav>
