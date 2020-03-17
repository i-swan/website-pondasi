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
            <?php $__currentLoopData = $kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$key); ?></td>
                <td><a href="<?php echo e(url('/kegiatan/detail/'.$a->id)); ?>"><?php echo e($a->nama); ?></a></td>
                <td><?php echo e($a->jenis_kegiatan->nama_jenis); ?></td>
                <td><?php echo e($a->tanggal); ?></td>
                <td><?php echo e($a->lokasi); ?></td>
                <td><?php echo e($a->pj); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/kegiatan/kegiatan_pdf.blade.php ENDPATH**/ ?>