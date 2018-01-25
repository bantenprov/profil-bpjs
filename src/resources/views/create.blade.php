<h1>Tambah Data Profil Bpjs</h1>

<a href="{{route('bpjs.index')}}"><button>back</button></a><br><br>

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
{!! Form::open(['route' => 'bpjs.store','method' => 'post']) !!}
	USER :<br>
	<select name="user_id">
	<option value="">-Select-</option>
	@foreach($users as $user)
	<option value="{{ $user->id }}">{{ $user->name }}</option>
	@endforeach
	</select><br>
	NO BPJS :<br>
	<input type="text" name="no_bpjs" value="{{ old('no_bpjs') }}"><br>
	FASKES:<br>
	<input type="text" name="faskes" value="{{ old('faskes') }}"><br>
	KELAS RAWAT<br>
	<input type="text" name="kelas_rawat"  value="{{ old('kelas_rawat') }}"><br>
	

	<input type="submit" value="tambah">


{!! Form::close() !!}