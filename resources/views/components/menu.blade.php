<nav class="site-nav">
    <div class="container">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <a href="{{ route('home') }}" class="logo m-0 float-start">
            <img src="{{ asset('./images/logo-sticker.png') }}" class="img-fluid" alt="" srcset="">
          </a>

          <ul
            class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
          >
            <li class="active"><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">Sobre nós</a></li>
            <li><a href="">Serviços</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li><a href="{{ route('contact') }}">Contato</a></li>
            <li><a href="https://app.sgconline.com.br/" target="_blank" class="btn btn-primary" style="color: #fff;">Boleto Online</a>

            </li>
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