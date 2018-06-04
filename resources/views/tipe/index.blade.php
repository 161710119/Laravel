@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
			  <div class="panel-heading">Data Tipe
			  	<div class="panel-title pull-right"><a href="{{ route('tipes.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>Nama Merk</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($tipes as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><p>{{ $data->nama }}</p></td>
				    	<td><p>{{ $data->Merk->nama }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('tipes.edit',$data->id) }}"><span class="glyphicon glyphicon-pencil">Edit</a></span>
						</td>
						<td>
							<a href="{{ route('tipes.show',$data->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-hourglass">Show</a></span>
						</td>
						<td>
							<form method="post" action="{{ route('tipes.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash">Delete</button></span>
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