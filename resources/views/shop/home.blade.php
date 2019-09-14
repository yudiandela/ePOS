@extends('layouts.MasterShop')

@section('content')
  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('/images/product/power-supply-gamemax-650watt-psu-gp650-80-plus-bronze-14cm-fan.jpg'); background-repeat: no-repeat; background-size: contain; background-position: center;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Kami Hadir Dengan Produk Elektronik</strong>
              </h1>

              <p>
                <strong>Silahkan berbelanja anda puas kami senang</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Online shop segala di jual</strong>
              </p>

              <a target="_blank" href="#" class="btn btn-outline-white btn-lg">Belanja Sekarang

              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('/images/product/digital-alliance-n5-black-transparent-window-micro-atx-gaming-chassis.jpg'); background-repeat: no-repeat; background-size: contain;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>DIGITAL ALLIANCE GAMING CHASSIS</strong>
              </h1>

              <p>
                <strong>Silahkan berbelanja anda puas kami senang</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Online shop segala di jual</strong>
              </p>

              <a target="_blank" href="#" class="btn btn-outline-white btn-lg">Belanja Sekarang

              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('/images/product/gigabyte-z390-m-gaming-lga-1151-motherboard.jpg'); background-repeat: no-repeat; background-size: contain; background-position: right;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
           <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>GIGABYTE Z390 M GAMING LGA 1151 MOTHERBOARD</strong>
              </h1>

              <p>
                <strong>Silahkan berbelanja anda puas kami senang</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Online shop segala di jual</strong>
              </p>

              <a target="_blank" href="#" class="btn btn-outline-white btn-lg">Belanja Sekarang

              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main class="mt-5">
    <div class="container">

      <!--Navbar-->
      {{-- <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        <!-- Navbar brand -->
        <span class="navbar-brand">Categories:</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">All
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shirts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sport wears</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Outwears</a>
            </li>

          </ul>
          <!-- Links -->

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->

      </nav> --}}
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">
          @foreach ($products as $product)
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">

                <!--Card-->
                <div class="card">

                <!--Card image-->
                <div class="view overlay">
                    <img src="{{ $product->photo }}" class="card-img-top" alt="">
                    <a href="{{ route('shop.detail.product', $product->id) }}">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center">
                    <!--Category & Title-->
                    <a href="#" class="grey-text">
                      <h5>{{ $product->category->name }}</h5>
                    </a>
                    <h5>
                    <strong>
                      <a href="{{ route('shop.detail.product', $product->id) }}" class="dark-grey-text">{{ $product->name }}
                        {{-- <span class="badge badge-pill danger-color">NEW</span> --}}
                      </a>
                    </strong>
                    </h5>

                    <h4 class="font-weight-bold blue-text">
                    <strong>Rp. {{ number_format($product->price, 0, ',', '.') }}</strong>
                    </h4>

                </div>
                <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->
          @endforeach

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->

      <!--Pagination-->
      <div class="d-flex justify-content-center wow fadeIn">
        {{ $products->links() }}
      </div>
      <!--Pagination-->

    </div>
  </main>
  <!--Main layout-->
@endsection
