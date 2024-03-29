@extends('layouts.MasterAdmin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
    Ubah data Pelanggan
    <small>update User</small>
	</h1>
	<ol class="breadcrumb">
    <li><a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('user.index') }}">Pelanggan</a></li>
    <li class="active">update Pelanggan</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Form update Pelanggan</h3><br>
						{{-- <div align="right" >
              <a href="{{ route('product.create') }}" class="btn btn-primary">Tambahkan Barang</a>
						</div> --}}
					</div>

					<!-- /.box-header -->
					<div class="box-body">
            <form action="{{ route('user.update', $user->id) }}" method="post">

              @csrf
              @method('put')

              <div class="form-group @error('name') has-error @enderror">
                <label for="name">Nama Lengkap</label>
                <input id="name" type="text" name="name" class="form-control" value="{{ old('name') ? old('name') : $user->name }}">
                @error('name')
                  <span class="help-block">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group @error('email') has-error @enderror">
                <label for="email">Alamat Email</label>
                <input id="email" type="text" name="email" class="form-control" value="{{ old('email') ? old('email') : $user->email }}">
                @error('email')
                  <span class="help-block">{{ $message }}</span>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Ubah Data</button>

            </form>
					</div>
        </div>
      </div>
		</div>
  </div>
</section>

@endsection
