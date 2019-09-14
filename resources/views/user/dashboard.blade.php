@extends('layouts.MasterAdmin')
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pesanan Saya
      <small>My Order</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('dashboard.user.order') }}"><i class="fa fa-dashboard"></i> User</a></li>
      <li class="active">My Order</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      {{-- col-md-12 --}}
      <div class="col-md-12">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
          {{ session('status') }}
        </div>
        @endif

        <div class="box box-primary">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Table Pesanan Saya</h2>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
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
                      <td>{{ $order->no_order }}</td>
                      <td>{{ $order->product->name }}</td>
                      <td>Rp. {{ number_format($order->product->price, 0, ',', '.') }}</td>
                      <td>{{ $order->quantity }}</td>
                      <td>Rp. {{ number_format($order->quantity * $order->product->price, 0, ',', '.') }}</td>
                      <td><span class='label bg-{{ $bg }}'>{{ $status }}</span></td>
                      <td>
                        <button data-id="{{ $order->id }}" class="btn btn-danger btn-xs remove-order"><i class="fa fa-times"></i></button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
      {{-- col-md-12 --}}
    </div>
  {{-- row --}}
  </section>

@endsection

@push('scripts')
<script>

$(".remove-order").click(function (e) {
  e.preventDefault();

  var ele = $(this);

  if(confirm("Kamu yakin?")) {
    $.ajax({
      url: '{{ route("dashboard.user.destroyOrder") }}',
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
