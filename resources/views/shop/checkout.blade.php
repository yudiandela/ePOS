@extends('layouts.MasterShop')

@section('content')
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">
      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout form</h2>

      <!--Grid row-->
      <div class="row">

        @if (!session('cart'))
          <div class="col-md-12 mb-4 text-center">
            <div class="card">
              <div class="card-body">
                Belum ada daftar belanjaan
                <br>
                <a class="btn btn-primary btn-lg" href="{{ route('shop.index') }}">Belanja Sekarang</a>
              </div>
            </div>
          </div>
        @else

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body" action="{{ route('shop.order.store') }}" method="POST">

              @csrf

              <!--Grid row-->
              <div class="row mb-2">

                <!--Grid column-->
                <div class="col-md-6">

                  <!--firstName-->
                  <div class="md-form ">
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="@auth{{ Auth::user()->name ? Auth::user()->name : '' }}@else{{ old('name') ? old('name') : '' }}@endauth">
                    <label for="name">Nama Lengkap</label>
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">

                  <!--email-->
                  <div class="md-form">
                    <input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" value="@auth{{ Auth::user()->email ? Auth::user()->email : '' }}@else{{ old('email') ? old('email') : '' }}@endauth">
                    <label for="email">Alamat Email</label>
                    @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row mb-2">

                <!--Grid column-->
                <div class="col-md-6">

                  <!--firstName-->
                  <div class="md-form ">
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                    <label for="password">Password</label>
                    @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">

                  <!--email-->
                  <div class="md-form">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    <label for="password_confirmation">Password Confirm</label>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row mb-2">

                <!--Grid column-->
                <div class="col-md-12">

                  <!--address-->
                  <div class="md-form">
                    <input type="text" id="address" name="address" class="form-control">
                    <label for="address">Alamat Lengkap <small>(Digunakan untuk pengiriman)</small></label>
                    @error('address')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <hr>

              <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          @php $total = 0 @endphp

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">{{ count((array) session('cart')) }}</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">

            @foreach(session('cart') as $product)
              @php $total += $product['price'] * $product['quantity'] @endphp
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">{{ $product['name'] }}</h6>
                  <small class="text-muted">Rp. {{ number_format($product['price'], 0, ',', '.') }} x {{ $product['quantity'] }}</small>
                </div>
                <span class="text-muted">Rp. {{ number_format($product['price'] * $product['quantity'], 0, ',', '.') }}</span>
              </li>
            @endforeach

            <li class="list-group-item d-flex justify-content-between">
              <span>Total (IDR)</span>
              <strong>Rp. {{ number_format($total, 0, ',', '.') }}</strong>
            </li>
          </ul>
          <!-- Cart -->

          {{-- <!-- Promo code -->
          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Redeem</button>
              </div>
            </div>
          </form>
          <!-- Promo code --> --}}

        </div>
        <!--Grid column-->

        @endif

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
@endsection
