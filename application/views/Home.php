<!DOCTYPE html>
<html>
<head>
    <title>Halaman Home</title>
</head>
<body>
	<h1>Menu Nasi Goreng Delivery</h1>

	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Menu</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<td>Idmenu</td>
			<td>Nama menu</td>
			<td>Harga</td>
			<td>Gambar</td>
			<td>Aksi</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Nasi goreng biasa</td>
			<td>Rp 12.000</td>
			<td><img src="TV LED Sharp Aquos LC-32LE260 32 Inch.JPG" width="200"></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>">Edit</a> | <a href="">Delete</a></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Nasi goreng sosis</td>
			<td>Rp 13.000</td>
			<td><img src="TV LED Sharp Aquos LC-32LE260 32 Inch.JPG" width="200"></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>">Edit</a> | <a href="">Delete</a></td>
		</tr>
		<tr>
			<td>3</td>
			<td>Nasi goreng spesial</td>
			<td>Rp 15.000</td>
			<td><img src="TV LED Sharp Aquos LC-32LE260 32 Inch.JPG" width="200"></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>">Edit</a> | <a href="">Delete</a></td>
		</tr>
	</table>

</body>
</html>