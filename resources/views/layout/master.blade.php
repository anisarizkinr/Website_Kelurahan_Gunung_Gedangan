<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="{{ asset('images/logo kota mojokerto.png') }}" />

   

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="{{ asset ('https://fonts.googleapis.com')}}" />
    <link rel="preconnect" href="(https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <title>
    Kelurahan Kedundung Mojokerto

      {{-- <title>{{$title}}</title> --}}
      
    </title>
  </head>
  <body>
    <!-- Navbar Start -->
    @include('layout.header')
    <!-- Navbar End -->

    <!-- ======= Content ======= -->
    @yield('content')

    <!-- Footer Start -->
    @include('layout.footer')
    <!-- Footer End -->

    {{-- Javascript library --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
      $(document).ready(function() {
        // Dapatkan URL halaman saat ini
        var currentUrl = window.location.href;
    
        // Hapus parameter kueri dari URL (jika ada)
        var urlWithoutParams = currentUrl.split("?")[0];
    
        // Temukan semua tautan menu
        var menuLinks = $(".site-menu a");
    
        // Loop melalui setiap tautan menu
        menuLinks.each(function() {
          // Dapatkan atribut href dari tautan
          var linkUrl = $(this).attr("href");
    
          // Hapus parameter kueri dari URL tautan (jika ada)
          var linkUrlWithoutParams = linkUrl.split("?")[0];
    
          // Periksa apakah URL tautan saat ini cocok dengan URL halaman saat ini
          if (urlWithoutParams === linkUrlWithoutParams) {
            // Tambahkan kelas 'active' pada elemen 'li' yang menjadi parent tautan
            $(this).closest("li").addClass("active");
          }
        });
      });
    </script>
  </body>
 
  
</html>

