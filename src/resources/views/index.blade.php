@extends('layouts.admin-page')

@section('content')
<div class="container">
    <div class="row">    	
        <div class="col-md-12">        	
        	<a href="{{ route('admin') }}" class="btn btn-sm btn-primary">Back</a>
        	<br>
        	<br>Search :
        	{!! Form::open(['route' => 'bpjs.index','method' => 'get']) !!}
						
				<div class="input-group">
					<input type="text" name="search" value="{{ Request::get('search') }}" class="form-control input-sm" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-default btn-sm" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div><!-- /input-group -->
			
			{!! Form::close() !!}
			<br>
            <div class="panel panel-default">
                <div class="panel-heading">                	
                	Bpjs                	
					<span class="pull-right">						
						<a href="{{ route('bpjs.create') }}" class="bnt btn-sm btn-success"><i class="fa fa-plus"></i> Add</a>
					</span>			
                </div>

                <div class="panel-body">
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
					<div class="table-responsive">
	                    <table class="table table-striped">
							<tr>
								<th>User Name</th>
								<th>Nomor Bpjs</th>
								<th>Faskes</th>
								<th>Kelas Rawat</th>
								<th width="120px">Action</th>
							</tr>
							@foreach($profils as $profil)
							<tr>
								<td>{{ $profil->getUser->name }}</td>
								<td>{{ $profil->no_bpjs }}</td>
								<td>{{ $profil->faskes }}</td>
								<td>{{ $profil->kelas_rawat }}</td>
								<td>
									<a href="{{ route('bpjs.show',$profil->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
									<a href="{{ route('bpjs.edit',$profil->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
									<a href="{{ route('bpjs.delete',$profil->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>								</td>
							</tr>
							@endforeach
						</table>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
