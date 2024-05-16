
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="./images/logo-sticker.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
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
      Condominium &#8211; Assessoria Contábil em Balneário Camboriú
    </title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    
    @component('components.menu')
        
    @endcomponent

    {{ $slot }}

    @component('components.footer')
        
    @endcomponent
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
  </body>
</html>
