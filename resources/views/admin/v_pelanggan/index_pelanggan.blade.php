@extends('layouts.MasterAdmin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
    Data Pelanggan
    <small>User Data</small>
	</h1>
	<ol class="breadcrumb">
    <li><a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">data Pelanggan</li>
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
						<h3 class="box-title">Kelola Pelanggan</h3><br>
						<div align="right" >
              {{-- <input type="submit" class="btn btn-primary" value="Tambahkan Pelanggan" name="Add"> --}}
              <a href="{{ route('user.create') }}" class="btn btn-primary">Tambahkan Pelanggan</a>
						</div>
					</div>

					<!-- /.box-header -->
					<div class="box-body">
						<table id="example" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama Lengkap</th>
									<th>Email</th>
									<th>Daftar</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
                @foreach ($users as $user)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->created_at->diffForHumans() }}</td>
									<td>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-xs">
                      <i class="fa fa-pencil"></i>
                    </a>

                    <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger btn-xs"
                      onclick="event.preventDefault();
                        document.getElementById('del-user-{{ $user->id }}').submit();">
                      <i class="fa fa-trash"></i>
                    </a>

                    <form id="del-user-{{ $user->id }}" hidden action="{{ route('user.destroy', $user->id) }}" method="post">
                      @csrf
                      @method('delete')
                    </form>
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
