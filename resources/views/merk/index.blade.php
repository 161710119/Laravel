@extends('layouts.app')
@section('content')
<div id="navbar" class="navbar-collapse collapse">
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">Data Merk
					<div class="panel-title pull-right"><a href="{{ route('merks.create') }}">Tambah Data</a>
				</div>
			</div>
            <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Deskripsi</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($merks as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->nama }} </td>
		<td><p> {{ $data->deskripsi }} </p></td>
	<td>
		<a class="btn btn-primary" href=" {{ route('merks.edit',$data->id)}} ">Edit Data</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('merks.show',$data->id)}} ">Lihat data</a>
	</td>
	<td>
							<form method="post" action="{{ route('merks.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Hapus Data</button>
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection