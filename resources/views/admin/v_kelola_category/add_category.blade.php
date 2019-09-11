@extends('layouts.MasterAdmin')
@section('content')

<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Form Tambah Kategori</h3><br>
						{{-- <div align="right" >
                            <a href="{{ route('product.create') }}" class="btn btn-primary">Tambahkan Barang</a>
						</div> --}}
					</div>

					<!-- /.box-header -->
					<div class="box-body">
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf

                            <div class="form-group @error('name') has-error @enderror">
                                <label for="name">Nama Kategori</label>
                                <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @error('name')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>

                        </form>
					</div>
                </div>
            </div>
		</div>
    </div>
</section>

@endsection
