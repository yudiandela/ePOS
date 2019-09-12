@extends('layouts.MasterAdmin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Ubah Data Barang
    <small>Update Product</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('product.index') }}">Product</a></li>
    <li class="active">update Product</li>
  </ol>
</section>

<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Form Update Barang</h3><br>
						{{-- <div align="right" >
                            <a href="{{ route('product.create') }}" class="btn btn-primary">Tambahkan Barang</a>
						</div> --}}
					</div>

					<!-- /.box-header -->
					<div class="box-body">
                        <form action="{{ route('product.update', $product->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group @error('name') has-error @enderror">
                                <label for="name">Nama Barang</label>
                                <input id="name" type="text" name="name" class="form-control" value="{{ old('name') ? old('name') : $product->name }}">
                                @error('name')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('description') has-error @enderror">
                                <label for="description">Deskripsi Barang</label>
                                <textarea id="description" name="description" class="form-control">{{ old('description') ? old('description') : $product->description }}</textarea>
                                @error('description')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @error('stock') has-error @enderror">
                                        <label for="stock">Jumlah Stok</label>
                                        <input id="stock" type="number" name="stock" class="form-control" value="{{ old('stock') ? old('stock') : $product->stock }}">
                                        @error('stock')
                                            <span class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">


                                    <div class="form-group @error('price') has-error @enderror">
                                        <label for="price">Harga</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input id="price" type="number" name="price" class="form-control" value="{{ old('price') ? old('price') : $product->price }}">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        @error('price')
                                            <span class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group @error('category') has-error @enderror"">
                                <label for="category">Kategori</label>
                                <select class="form-control" name="category" id="category">
                                    @foreach ($categories as $category)
                                        @if (old('category') == $category->id || $product->category_id == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            @if ($category->id == 1)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

                        </form>
					</div>
                </div>
            </div>
		</div>
    </div>
</section>

@endsection
