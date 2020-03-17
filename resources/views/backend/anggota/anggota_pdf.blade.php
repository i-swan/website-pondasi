<!DOCTYPE html>
<html>
<head>
	<title>Daftar member Pondasi 2020/2021</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Daftar member Pondasi 2020/2021</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>No Hp</th>
                <th>Jurusan IPB</th>
                <th>Angkatan IPB</th>
			</tr>
		</thead>
		<tbody>
            @foreach($anggota as $key => $a)
            <tr>
                <td>{{ ++$key }}</td>
                <td><a href="{{ url('/anggota/profil-lengkap/'.$a->id) }}">{{ $a->nama }}</a></td>
                <td>{{ $a->tanggal_lahir }}</td>
                <td>{{ $a->no_hp }}</td>
                <td>{{ $a->jurusan_ipb }}</td>
                <td>{{ $a->angkatan_ipb }}</td>
            </tr>
            @endforeach
		</tbody>
	</table>
 
</body>
</html>