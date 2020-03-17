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
            <?php $__currentLoopData = $prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$key); ?></td>
                <td><a href="<?php echo e(url('/prestasi/detail/'.$a->id)); ?>"><?php echo e($a->nama); ?></a></td>
                <td><?php echo e($a->jenis_prestasi->nama_jenis); ?></td>
            <?php if($a->ketua_in != '' and $a->ketua_ex != ''): ?>
                <td><a href="<?php echo e(url('/anggota/profil-lengkap/'.$a->anggota->id)); ?>"><?php echo e($a->anggota->nama); ?></a>  & <?php echo e($a->ketua_ex); ?> (Non Member)</td>
            <?php elseif($a->ketua_in != '' and $a->ketua_ex == ''): ?>
                <td><a href="<?php echo e(url('/anggota/profil-lengkap/'.$a->anggota->id)); ?>"><?php echo e($a->anggota->nama); ?></a></td>
            <?php elseif(($a->ketua_in == '' and $a->ketua_ex != '')): ?>
                <td><?php echo e($a->ketua_ex); ?> (Non Member)</td>
            <?php else: ?>
                <td> - </td>
            <?php endif; ?>
                <td><?php echo e($a->tanggal); ?></td>
                <td><?php echo e($a->juara_ke); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/prestasi/prestasi_pdf.blade.php ENDPATH**/ ?>