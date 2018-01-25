<h1>Edit Data Bpjs</h1>
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

{!! Form::open(['route' => ['bpjs.update',$profil->id],'method' => 'post']) !!}

	USER :<br>
	<select name="user_id">
	<option value="">-User-</option>
	@foreach($users as $user)
	<option value="{{ $user->id }}"
		{{ ($user->id == $profil->getUser->id) ? 'selected' : ''}}
		>{{ $user->name }}</option>
		@endforeach
</select><br>
	Nomor Bpjs :<br>
	<input type="text" name="no_bpjs" value="{{$profil->no_bpjs}}" ><br>
	Faskes:<br>
	<input type="text" name="faskes" value="{{$profil->faskes}}"><br>
	Kelas Rawat<br>
	<input type="text" name="kelas_rawat" value="{{$profil->kelas_rawat}}"><br>
	

	<input type="submit" value="update">

	{!! Form::close() !!}