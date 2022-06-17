<!DOCTYPE html>
<html>
<head>
    <title>Form Input Matakuliah</title>
</head>
<body>
    <center>
	<h1>Form Input Matakuliah</h1>
	<?php echo validation_errors(); ?>
    <?php echo form_open('Matakuliah/cetak'); ?>
		<label>Kode Matakuliah</label><br/>
        <input type="text" name="kode" value="<?php echo set_value('kode');?>"><br/>
        <label>Nama Matakuliah</label><br/>
        <input type="text" name="namaMTK" value="<?php echo set_value('NamaMTK');?>"><br/>
        <label>Kelas</label><br/>
        <input type="text" name="kelas" value="<?php echo set_value('kelas');?>"><br/>
        <label>Nama</label><br/>
        <input type="text" name="nama" value="<?php echo set_value('nama');?>"><br/>
        <input type="submit" value="Simpan">
	</form>
</body>
</html>



        



