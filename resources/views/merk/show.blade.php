@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Merk
			  	<div class="panel-title pull-right"><a href="{{ route('merks.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>
			  			<input type="text" name="nama" class="form-control" value="{{ $merks->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $merks->deskripsi }}"  
			  			readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection