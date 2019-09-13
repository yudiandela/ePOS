@extends('layouts.MasterShop')

@section('content')
    <!--Main layout-->
    <main>
        <div class="container pt-4 mt-5">

            <!--Section: Products v.3-->
            <section class="module mt-3">
                <div class="">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h1 class="module-title font-alt">Detail Pesanan</h1>
                        </div>
                    </div>
                    <hr class="divider-w pt-20">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-border checkout-table">
                              <thead>
                                <tr>
                                    <th class="hidden-xs">Item</th>
                                    <th>Description</th>
                                    <th class="hidden-xs">Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                              </thead>

                                <tbody>
                                  @php $total = 0 @endphp

                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)

                                            @php $total += $details['price'] * $details['quantity'] @endphp

                                            {{-- <tr>
                                                <td data-th="Product">
                                                    <div class="row">
                                                        <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                                                        <div class="col-sm-9">
                                                            <h4 class="nomargin">{{ $details['name'] }}</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-th="Price">${{ $details['price'] }}</td>
                                                <td data-th="Quantity">
                                                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                                                </td>
                                                <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                                                <td class="actions" data-th="">
                                                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fas fa-refresh"></i></button>
                                                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr> --}}

                                            <tr>
                                              <td class="hidden-xs">
                                                <a href="#">
                                                  <img height="100px" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" alt="{{ $details['name'] }}">
                                                </a>
                                              </td>
                                              <td>
                                                <h5 class="product-title font-alt"><br>{{ $details['name'] }}</h5>
                                              </td>
                                              <td class="hidden-xs">
                                                <h5 class="product-title font-alt"><br>Rp. {{ number_format($details['price'], 0, ',', '.') }}</h5>
                                              </td>
                                              <td><br />
                                                <input class="form-control quantity" type="number" name="" value="{{ $details['quantity'] }}" max="50" min="1">
                                              </td>
                                              <td>
                                                  <h5 class="product-title font-alt"><br>Rp. {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}</h5>
                                              </td>
                                              <td class="pr-remove"><br />
                                                <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fas fa-sync-alt"></i></button>
                                                <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-times"></i></button>
                                              </td>
                                          </tr>

                                        @endforeach
                                    @else
                                    <tr>
                                      <td colspan="6" class="text-center">
                                        Belum ada daftar belanjaan
                                      </td>
                                    </tr>
                                    @endif


                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group"></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-3">
                            <div class="form-group"><button class="btn btn-block btn-round btn-d pull-right"
                                    type="submit">Update Cart</button></div>
                        </div>
                    </div> --}}
                    <hr class="divider-w">

                    <div class="row mt-70">
                        <div class="col-sm-5 col-sm-offset-7">
                            <div class="shop-Cart-totalbox">
                                <h4 class="font-alt">Cart Totals</h4>
                                <table class="table table-striped table-border checkout-table">
                                    <tbody>
                                        <tr>
                                            <th>Cart Subtotal :</th>
                                            <td>Rp. {{ number_format($total, 0, ',', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping Total :</th>
                                            <td>Rp. 0</td>
                                        </tr>
                                        <tr class="shop-Cart-totalprice">
                                            <th>Total :</th>
                                            <td>Rp. {{ number_format($total, 0, ',', '.') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('shop.checkout') }}" class="btn btn-lg btn-block btn-round btn-d btn-primary @if (!session('cart')) {{ 'disabled' }} @endif">
                                  Proceed to Checkout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Products v.3-->



        </div>
    </main>
    <!--Main layout-->
@endsection

@push('scripts')

<script type="text/javascript">

    $(".update-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
          url: '{{ url('update-cart') }}',
          method: "patch",
          data: {
            _token: '{{ csrf_token() }}',
            id: ele.attr("data-id"),
            quantity: ele.parents("tr").find(".quantity").val()
          },
          success: function (response) {
              location.reload();
          }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Kamu yakin?")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    location.reload();
                }
            });
        }
    });

</script>

@endpush
