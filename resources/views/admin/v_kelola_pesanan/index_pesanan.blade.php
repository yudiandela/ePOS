@extends('layouts.MasterAdmin')
@section('content')

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
						<table id="example"  class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>First name</th>
									<th>Last name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Salary</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Tiger</td>
									<td>Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>10</td>
								</tr>
								<tr>
									<td>Tiger</td>
									<td>Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>20</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="4" style="text-align:right">Total:</th>
									<th></th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
	</div>
</section>

@endsection