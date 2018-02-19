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
					Detail Profil Bpjs
					<span class="pull-right">
						<a href="{{ route('bpjs.edit',$profil->id) }}" class="bnt btn-sm btn-success"><i class="fa fa-pencil"></i> Edit</a>
					</span>
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
					<table>
						<tr>
							<td>Name</td>
							<td width="20px">:</td>
							<td>{{ $profil->getUser->name }}</td>
						</tr>
						<tr>
							<td>NIK</td>
							<td width="20px">:</td>
							<td>{{ $profil->getUser->nik }}</td>
						</tr>
						<tr>
							<td>Nomor BPJS</td>
							<td width="20px">:</td>
							<td>{{ $profil->no_bpjs }}</td>
						</tr>
						<tr>
							<td>Faskes</td>
							<td width="20px">:</td>
							<td>{{ $profil->faskes }}</td>
						</tr>
						<tr>
							<td>Kelas Rawat</td>
							<td width="20px">:</td>
							<td>{{ $profil->kelas_rawat }}</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection