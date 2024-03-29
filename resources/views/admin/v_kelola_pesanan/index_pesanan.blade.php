@extends('layouts.MasterAdmin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
    Data Pesanan
    <small>Order Data</small>
	</h1>
	<ol class="breadcrumb">
    <li><a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">data Pesanan</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Kelola Pesanan</h3><br>
						<div align="right" >
							<input type="submit" class="btn btn-primary" value="Tambahkan Pesanan" name="Add">
						</div>
					</div>

					<!-- /.box-header -->
					<div class="box-body">
						<table id="example" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Pelanggan</th>
                  <th>No Order</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Jlh</th>
                  <th>Total</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                  @switch($order->status)
                    @case(0)
                      @php
                        $status = "Proses";
                        $bg = "yellow";
                      @endphp
                      @break
                    @case(1)
                      @php
                        $status = "Batalkan";
                        $bg = "red";
                      @endphp
                      @break
                    @case(2)
                      @php
                        $status = "Kembalikan";
                        $bg = "blue";
                      @endphp
                      @break
                    @default
                      @php
                        $status = "Teruskan";
                        $bg = "green";
                      @endphp
                  @endswitch
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->no_order }}</td>
                    <td>{{ $order->product->name }}</td>
                    <td>Rp. {{ number_format($order->product->price, 0, ',', '.') }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>Rp. {{ number_format($order->quantity * $order->product->price, 0, ',', '.') }}</td>
                    <td><span class='label bg-{{ $bg }}'>{{ $status }}</span></td>
                    <td>
                      <button data-id="{{ $order->id }}" class="btn btn-danger btn-xs remove-order"><i class="fa fa-times"></i></button>
                      <button data-id="{{ $order->id }}" class="btn btn-primary btn-xs back-order"><i class="fa fa-arrow-left"></i></button>
                      <button data-id="{{ $order->id }}" class="btn btn-success btn-xs delivery-order"><i class="fa fa-truck"></i></button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@push('scripts')
<script>

$(".remove-order").click(function (e) {
  e.preventDefault();

  var ele = $(this);

  $.ajax({
    url: '{{ route("admin.cancelOrder") }}',
    method: "put",
    data: {
      _token: '{{ csrf_token() }}',
      id: ele.attr("data-id")
    },
    success: function (response) {
      location.reload();
    }
  });
});

$(".back-order").click(function (e) {
  e.preventDefault();

  var ele = $(this);

  $.ajax({
    url: '{{ route("admin.backOrder") }}',
    method: "put",
    data: {
      _token: '{{ csrf_token() }}',
      id: ele.attr("data-id")
    },
    success: function (response) {
      location.reload();
    }
  });
});

$(".delivery-order").click(function (e) {
  e.preventDefault();

  var ele = $(this);

  $.ajax({
    url: '{{ route("admin.deliveryOrder") }}',
    method: "put",
    data: {
      _token: '{{ csrf_token() }}',
      id: ele.attr("data-id")
    },
    success: function (response) {
      location.reload();
    }
  });
});
</script>
@endpush
