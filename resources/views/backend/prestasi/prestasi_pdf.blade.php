<!DOCTYPE html>
<html>
<head>
	<title>Daftar Prestasi Pondasi 2020/2021</title>
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
		<h5>Daftar Prestasi Pondasi 2020/2021</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis prestasi</th>
                <th>Ketua </th>
                <th>Tanggal</th>
                <th>Juara Ke</th>
			</tr>
		</thead>
		<tbody>
            @foreach($prestasi as $key => $a)
            <tr>
                <td>{{ ++$key }}</td>
                <td><a href="{{ url('/prestasi/detail/'.$a->id) }}">{{ $a->nama }}</a></td>
                <td>{{ $a->jenis_prestasi->nama_jenis}}</td>
            @if($a->ketua_in != '' and $a->ketua_ex != '')
                <td><a href="{{ url('/anggota/profil-lengkap/'.$a->anggota->id) }}">{{ $a->anggota->nama }}</a>  & {{ $a->ketua_ex }} (Non Member)</td>
            @elseif($a->ketua_in != '' and $a->ketua_ex == '')
                <td><a href="{{ url('/anggota/profil-lengkap/'.$a->anggota->id) }}">{{ $a->anggota->nama }}</a></td>
            @elseif(($a->ketua_in == '' and $a->ketua_ex != ''))
                <td>{{ $a->ketua_ex }} (Non Member)</td>
            @else
                <td> - </td>
            @endif
                <td>{{ $a->tanggal }}</td>
                <td>{{ $a->juara_ke }}</td>
            </tr>
            @endforeach
		</tbody>
	</table>
 
</body>
</html>