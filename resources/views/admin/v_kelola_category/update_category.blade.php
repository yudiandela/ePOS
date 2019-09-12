@extends('layouts.MasterAdmin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Ubah Kategori
    <small>update Category</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('category.index') }}">Category</a></li>
    <li class="active">update Category</li>
  </ol>
</section>

 <section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Form Update Kategori</h3><br>
						{{-- <div align="right" >
                            <a href="{{ route('product.create') }}" class="btn btn-primary">Tambahkan Barang</a>
						</div> --}}
					</div>

					<!-- /.box-header -->
					<div class="box-body">
                        <form action="{{ route('category.update', $category->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group @error('name') has-error @enderror">
                                <label for="name">Nama Kategori</label>
                                <input id="name" type="text" name="name" class="form-control" value="{{ old('name') ? old('name') : $category->name }}">
                                @error('name')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
					</div>
                </div>
            </div>
		</div>
    </div>
</section>
@endsection
