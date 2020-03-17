<!DOCTYPE html>
<html>
<head>
	<title>Daftar Kegiatan Pondasi 2020/2021</title>
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
		<h5>Daftar Kegiatan Pondasi 2020/2021</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>Nama</th>
                <th>Jenis Kegiatan</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
                <th>PJ</th>
			</tr>
		</thead>
		<tbody>
            @foreach($kegiatan as $key => $a)
            <tr>
                <td>{{ ++$key}}</td>
                <td><a href="{{ url('/kegiatan/detail/'.$a->id) }}">{{ $a->nama }}</a></td>
                <td>{{ $a->jenis_kegiatan->nama_jenis }}</td>
                <td>{{ $a->tanggal }}</td>
                <td>{{ $a->lokasi }}</td>
                <td>{{ $a->pj }}</td>
            </tr>
            @endforeach
		</tbody>
	</table>
 
</body>
</html>