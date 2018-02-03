@extends('layouts.admin-page')

@section('content')
<div class="container">
	<div class="row">		
		<div class="col-md-12">
			<a href="{{ route('bpjs.index') }}" class="btn btn-sm btn-primary">Back</a>
			<br>
			<br>
			<div class="panel panel-default">
				<div class="panel-heading">					
					Add Profil Bpjs
					<div>
					@if ($errors->any())
					    					        
			            @foreach ($errors->all() as $error)
			                <div class="alert alert-danger">{{ $error }}</div>
			            @endforeach					        
					    
					@endif
					@if(session()->has('message'))
					    <div class="alert alert-success">					        
					    	{{ session()->get('message') }}
					    </div>
					@endif
					</div> 
				</div>

				<div class="panel-body">
					{!! Form::open(['route' => 'bpjs.store','method' => 'post']) !!}
						<div class="form-group">
							<label for="">User</label>
							<select name="user_id" class="form-control input-sm">
								<option value="">-User-</option>
								@foreach($users as $user)
									<option value="{{ $user->id }}">{{ $user->name }}</option>
								@endforeach
							</select>							
						</div>
						<div class="form-group">
							<label for="">No Bpjs</label>
							<input value="{{ old('no_bpjs') }}" type="text" name="no_bpjs" class="form-control input-sm" placeholder="No Bpjs">
						</div>	
						<div class="form-group">
							<label for="">Faskes</label>
							<input type="text" name="faskes" class="form-control input-sm" placeholder="Faskes" value="{{ old('faskes') }}">
						</div>
						<div class="form-group">
							<label for="">Kelas Rawat</label>
							<input value="{{ old('kelas_rawat') }}" type="text" name="kelas_rawat" class="form-control input-sm" placeholder="Kelas Rawat">
						</div>										
						<button type="submit" class="btn btn-default">Submit</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
