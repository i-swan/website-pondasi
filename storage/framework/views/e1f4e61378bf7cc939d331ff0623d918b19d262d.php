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
            <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$key); ?></td>
                <td><a href="<?php echo e(url('/anggota/profil-lengkap/'.$a->id)); ?>"><?php echo e($a->nama); ?></a></td>
                <td><?php echo e($a->tanggal_lahir); ?></td>
                <td><?php echo e($a->no_hp); ?></td>
                <td><?php echo e($a->jurusan_ipb); ?></td>
                <td><?php echo e($a->angkatan_ipb); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/anggota/anggota_pdf.blade.php ENDPATH**/ ?>