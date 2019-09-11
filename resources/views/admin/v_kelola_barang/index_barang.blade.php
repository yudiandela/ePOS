@extends('layouts.MasterAdmin')
@section('content')

<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                {{ session('status') }}
            </div>
            @endif
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Kelola Barang</h3><br>
						<div align="right" >
                            <a href="{{ route('product.create') }}" class="btn btn-primary">Tambahkan Barang</a>
						</div>
					</div>

					<!-- /.box-header -->
					<div class="box-body">
						<table id="example"  class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama Barang</th>
									<th>Jlh Stock</th>
									<th>Harga</th>
									<th>Deskripsi</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($products as $product)
								<tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
									<td>{{ $product->stock }}</td>
									<td>Rp. {{ number_format($product->price, 0, ',', '.') }}</td>
									<td>{{ $product->description }}</td>
									<td>
                                        <a href="{{ route('product.edit', $product->id) }}" class="text-primary">
                                            <i class="fa fa-fw2x fa-pencil"></i>
                                        </a>
                                        <a href="{{ route('product.destroy', $product->id) }}" class="text-danger"
                                            onclick="event.preventDefault();
                                                document.getElementById('prod-destroy-{{ $product->id }}').submit();">
                                            <i class="fa fa-fw fa-trash"></i>
                                        </a>

                                        <form id="prod-destroy-{{ $product->id }}" hidden action="{{ route('product.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
								</tr>
                                @endforeach
							</tbody>
							{{-- <tfoot>
								<tr>
									<th colspan="4" style="text-align:right">Total: </th>
									<th colspan="2"></th>
								</tr>
							</tfoot> --}}
						</table>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
