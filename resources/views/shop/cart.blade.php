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
                                <tbody>
                                    <tr>
                                        <th class="hidden-xs">Item</th>
                                        <th>Description</th>
                                        <th class="hidden-xs">Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>

                                    <tr>
                                        <td class="hidden-xs"><a href="#"><img height="100px" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg"
                                                    alt="Men’s Casual Pack"></a></td>
                                        <td>
                                            <h5 class="product-title font-alt"><br>Men’s Casual Pack</h5>
                                        </td>
                                        <td class="hidden-xs">
                                            <h5 class="product-title font-alt"><br>£20.00</h5>
                                        </td>
                                        <td><br><input class="form-control" type="number" name="" value="1" max="50"
                                                min="1"></td>
                                        <td>
                                            <h5 class="product-title font-alt"><br>£20.00</h5>
                                        </td>
                                        <td class="pr-remove"><br><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
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
                    </div>
                    <hr class="divider-w">

                    <div class="row mt-70">
                        <div class="col-sm-5 col-sm-offset-7">
                            <div class="shop-Cart-totalbox">
                                <h4 class="font-alt">Cart Totals</h4>
                                <table class="table table-striped table-border checkout-table">
                                    <tbody>
                                        <tr>
                                            <th>Cart Subtotal :</th>
                                            <td>£40.00</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping Total :</th>
                                            <td>£2.00</td>
                                        </tr>
                                        <tr class="shop-Cart-totalprice">
                                            <th>Total :</th>
                                            <td>£42.00</td>
                                        </tr>
                                    </tbody>
                                </table><button class="btn btn-lg btn-block btn-round btn-d" onclick="window.location.href='/checkout' " type="submit">Proceed to
                                    Checkout</button>
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
