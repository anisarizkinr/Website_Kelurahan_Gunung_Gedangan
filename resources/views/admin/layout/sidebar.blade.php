<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <div class="user-details">
                    <span>Admin K. Kedundung</span>
                    <span id="more-details"></span>
                </div>
            </div>
        </div>
        {{-- Button Search --}}
        {{-- <div class="pcoded-search">
            <span class="searchbar-toggle">  </span>
            <div class="pcoded-search-box ">
                <input type="text" placeholder="Search">
                <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
            </div>
        </div> --}}
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="{{url('/dashboard')}}">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="ti-user"></i></span>
                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Profil</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li>
                            <a href="{{route('judul_web.index')}}">
                                <span class="pcoded-micon"><i class="ti-text"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Judul Website</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('latar_gambar.index')}}">
                                <span class="pcoded-micon"><i class="ti-text"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Gambar Landing Page</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('layanan.index')}}">
                                <span class="pcoded-micon"><i class="ti-announcement"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Layanan</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('struktur.index')}}">
                                <span class="pcoded-micon"><i class="ti-announcement"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Struktur</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('geografis.index')}}">
                                <span class="pcoded-micon"><i class="ti-announcement"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Jumlah Penduduk</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('gso.index')}}">
                                <span class="pcoded-micon"><i class="ti-announcement"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Gambar Struktur Organisasi</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('sejarah.index')}}">
                                <span class="pcoded-micon"><i class="ti-announcement"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Sejarah</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('visi.index')}}">
                                <span class="pcoded-micon"><i class="ti-announcement"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Visi</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="ti-announcement"></i></span>
                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Informasi</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li>
                            <a href="{{route('galeri.index')}}">
                                <span class="pcoded-micon"><i class="ti-gallery"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Galeri</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('berita.index')}}">
                                <span class="pcoded-micon"><i class="ti-announcement"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Berita</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="ti-server"></i></span>
                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Data</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" ">
                            <a href="{{url('/kategori')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Kategori Data</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{url('/pilihdata')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Tabel Data</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="ti-layout"></i></span>
                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Footer</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li>
                            <a href="{{route('kontakkami.index')}}">
                                <span class="pcoded-micon"><i class="ti-announcement"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Kontak</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('sosmed.index')}}">
                                <span class="pcoded-micon"><i class="ti-announcement"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Sosial Media</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="ti-announcement"></i></span>
                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Geografi</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li>
                            <a href="{{route('wilayah.index')}}">
                                <span class="pcoded-micon"><i class="ti-gallery"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Batas Wilayah</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('maps.index')}}">
                                <span class="pcoded-micon"><i class="ti-announcement"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Maps</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
    </div>
</nav>