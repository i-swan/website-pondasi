<!DOCTYPE html>
<html>
<head>
	<title>Daftar Donasi Pondasi 2020/2021</title>
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
		<h5>Daftar Donasi Pondasi 2020/2021</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>No</th>
                <th>Nama Donatur</th>
                <th>No Rek Donatur</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($donasi as $a)
			<tr>
                <td>{{ $i++ }}</td>
                <td><a href="{{ url('/donasi/detail/'.$a->id) }}">{{ $a->nama }}</a></td>
                <td>{{ $a->no_rek_asal }}</td>
                <td>{{ $a->jumlah }}</td>
                <td>{{ $a->tanggal }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>