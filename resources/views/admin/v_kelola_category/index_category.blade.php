@extends('layouts.MasterAdmin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Kategori
    <small>Category</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Category</li>
  </ol>
</section>

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
						<h3 class="box-title">Kelola Kategori</h3><br>
						<div align="right" >
                            <a href="{{ route('category.create') }}" class="btn btn-primary">Tambah Kategori</a>
						</div>
					</div>

					<!-- /.box-header -->
					<div class="box-body">
						<table id="example"  class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama Kategori</th>
									<th>Slug</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($categories as $category)
								<tr>
                                    <td>{{ $loop->iteration }}</td>
									<td>{{ $category->name }}</td>
									<td>{{ $category->slug }}</td>
									<td>
                                        <a href="{{ route('category.edit', $category->id) }}" class="text-primary">
                                            <i class="fa fa-fw2x fa-pencil"></i>
                                        </a>
                                        <a href="{{ route('category.destroy', $category->id) }}" class="text-danger"
                                            onclick="event.preventDefault();
                                                     document.getElementById('cat-destroy-{{ $category->id }}').submit();">
                                            <i class="fa fa-fw fa-trash"></i>
                                        </a>

                                        <form id="cat-destroy-{{ $category->id }}" hidden action="{{ route('category.destroy', $category->id) }}" method="post">
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
