<!DOCTYPE html>
<html>
<head>
	<title>Membuat form validation dengan Codeigniter | MalasNgoding.com</title> <!-- judul halaman php -->
</head>
<body>
	<h1>Membuat Form Validation dengan CodeIgniter | MalasNgoding.com</h1> <!-- Menampilkan text di halaman dengan ukuran H1 -->
	
	<?php echo form_open('form/aksi'); ?> <!-- menjalankan method aksi di controler form -->
		<label>Nama</label><br/> <!-- label nama -->
		<input type="text" name="nama"><br/> <!-- properties nama -->
		<?php echo form_error('nama'); ?> <!-- menampilkan eror dari nama -->
		<label>Email</label><br/> <!-- label email -->
		<input type="text" name="email"><br/> <!-- properties nama -->
		<?php echo form_error('email'); ?> <!-- menampilkan eror dari email -->
		<label>Konfirmasi Email</label><br/> <!-- label konfirmasi email -->
		<input type="text" name="konfir_email"><br/> <!-- properties nama -->
		<?php echo form_error('konfir_email'); ?> <!-- menampilkan eror dari konfirm eemail -->
		<input type="submit" value="Simpan"> <!-- Tombol simpan sebagai fungsi submit -->
	</form>
</body>
</html>