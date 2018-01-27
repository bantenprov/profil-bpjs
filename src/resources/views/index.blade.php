<!DOCTYPE html>
<html>
<head>
</head>
<body>
	 <a href="{{route('bpjs.create')}}"><input type="submit" value="create"></a><br><br>

	<table border="1">
		<tr>
			<th>User Id</th>
			<th>No Bpjs</th>
			<th>Faskes</th>
			<th>Kelas Rawat</th>
			<th>Action</th>
			
		</tr>
		@foreach($profils as $profil)
		<tr>
			
			<td>{{ $profil->getUser->name }}</td>
			<td>{{ $profil->no_bpjs }}</td>
			<td>{{ $profil->faskes }}</td>
			<td>{{ $profil->kelas_rawat }}</td>
			
			<td> <a href="{{route('bpjs.edit',$profil->id)}}">edit</a>
				|<a href="{{route('bpjs.delete',$profil->id)}}">delete</a></td>


		</tr>
		@endforeach
	</table>


</body>
</html>

