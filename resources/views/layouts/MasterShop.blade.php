<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Online Shop</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="/shop/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="/shop/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="/shop/css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="{{ route('shop.index') }}">
        <strong class="blue-text">Online Shop</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">

          {{-- <li class="nav-item active">
            <a class="nav-link waves-effect" href="{{ route('shop.index') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li> --}}

           {{-- <li class="nav-item">
            <a class="nav-link waves-effect" href="{{ route('shop.product') }}">Produk</a>
          </li> --}}

        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item mx-2">
            <a href="{{ route('shop.cart') }}" class="nav-link border border-light rounded waves-effect">
                {{-- @php $total = 0 @endphp
                @foreach((array) session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                @endforeach --}}
              <span class="badge red z-depth-1 mr-1"> {{ count((array) session('cart')) }} </span>
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Cart </span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect">
              <i class="fab fa-twitter"></i>
            </a>
          </li> --}}
          @auth
          <li class="nav-item mx-2">
              @if (Auth::user()->role === 1)
              <a href="{{ route('index') }}" class="nav-link border border-primary bg-primary rounded waves-effect text-light">
                <i class="fas fa-home"></i> Dashboard
              </a>
              @else
              <a href="{{ route('dashboard.user.order') }}" class="nav-link border border-primary bg-primary rounded waves-effect text-light">
                <i class="fas fa-home"></i> Dashboard
              </a>
              @endif
            </li>
          @endauth

          @guest
            <li class="nav-item mx-2">
              <a href="{{ route('login') }}" class="nav-link border border-primary rounded waves-effect text-primary">
                <i class="fas fa-sign-in-alt"></i> Login
              </a>
            </li>

            @if (Route::has('register'))
              <li class="nav-item mx-2">
                <a href="{{ route('register') }}" class="nav-link border border-primary bg-primary rounded waves-effect text-light">
                  <i class="fas fa-user"></i> new User
                </a>
              </li>
            @endif
          @endguest
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  @yield('content')

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="#"
        role="button">Informasi Kontak
      </a>
      <a class="btn btn-outline-white" role="button">
        Konfirmasi Pembayaran

      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="#"> Onlineshop </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="/shop/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/shop/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/shop/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/shop/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  @stack('scripts')
</body>

</html>
