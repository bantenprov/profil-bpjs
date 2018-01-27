<!DOCTYPE html>
<html>
<head>
</head>
<body>
	 <a href="{{route('bpjs.create')}}"><input type="submit" value="create"></a><br><br>

	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $profil->getUser->name }}</td>
		</tr>
		<tr>
			<td>No BPJS</td>
			<td>:</td>
			<td>{{ $profil->no_bpjs }}</td>
		</tr>
		<tr>
			<td>FASKES</td>
			<td>:</td>
			<td>{{ $profil->faskes }}</td>
		</tr>
		<tr>
			<td>Kelas Rawat</td>
			<td>:</td>
			<td>{{ $profil->kelas_rawat }}</td>
		</tr>
	</table>

</body>
</html>

