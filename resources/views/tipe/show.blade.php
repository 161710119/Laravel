@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
			  <div class="panel-heading">Show
			  	<div class="panel-title pull-right"><a href="{{ route('tipes.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	
			  <div class="form-group">
			  			<label class="control-label">Nama</label>
						<input type="text" name="nama" class="form-control" value="{{ $tipes->nama }}"  readonly>
					  </div>
					  
			  		<div class="form-group">
			  			<label class="control-label">Nama Merk</label>
						<input type="text" name="merk_id" class="form-control" value="{{ $tipes->Merk->nama }}"  readonly>
						</div>
			  		</div>	
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection