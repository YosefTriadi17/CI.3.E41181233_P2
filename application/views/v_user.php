<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title> <!-- judul halaman php -->
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1> <!-- Menampilkan text di halaman dengan ukuran H1 -->
	<table border="1"> <!-- ketebalan garis tabel -->
		<tr>
			<th>Nama</th> <!-- kolom Nama -->
			<th>Alamat</th> <!-- kolom alamat -->
			<th>Pekerjaan</th> <!-- kolom pekerjaan -->
		</tr>
		<?php foreach($user as $i){ ?> <!-- menampilkan data dengan foreach, membuar variabeel $user menjadi $i -->
		<tr>
			<td><?php echo $i->nama ?></td> <!-- menampilkan nama user -->
			<td><?php echo $i->alamat ?></td> <!-- menampilkan alamat user -->
			<td><?php echo $i->pekerjaan ?></td> <!-- menampilkan pekerjaan user -->
		</tr>
		<?php } ?>
	</table>
</body>
</html>