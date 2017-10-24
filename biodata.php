<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<header style="background-color: magenta"><h1>Silahkan isi biodata</h1></header>
<body bgcolor="purple">
<form action="#" method="post">
<pre>
Nama   		  : <input type="text" name="nama">
<br>
Tanggal Lahir : <input type="date" name="tanggallahir">
<br>
Kelas  		  : <input type="text" name="kelas">
<br>
Alamat 		  : <input type="textAREA" name="alamat">
<br>
Hobi   		  : <select name="hobi">
	<option value="membaca">membaca</option>
	<option value="berenang">berenang</option>
	<option value="ngurek">ngurek</option>
</select>
<br>
Jenis Kelamin : <input type="radio" name="radio" value="laki-laki">laki-laki<input type="radio" name="radio" value="perempuan">perempuan
<br>
		<input type="submit" name="simpan" value="simpan">
</pre>
</form>


<table border="1">
	<th>Nama</th>
	<th>Tanggal Lahir</th>
	<th>Kelas</th>
	<th>Alamat</th>
	<th>Hobi</th>
	<th>Jenis Kelamin</th>
	<tr>

		<td>
		<?php 
		if (isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        echo $nama;
         }
         ?>
         </td>
		<td><?php 
		if (isset($_POST['simpan'])){
        $tanggallahir = $_POST['tanggallahir'];
        echo $tanggallahir;
         }
         ?>
         </td>
		<td><?php 
		if (isset($_POST['simpan'])){
        $kelas = $_POST['kelas'];
        echo $kelas;
         }
         ?></td>
		<td><?php 
		if (isset($_POST['simpan'])){
        $alamat = $_POST['alamat'];
        echo $alamat;
         }
         ?></td>
		<td><?php 
		if (isset($_POST['simpan'])){
        $hobi = $_POST['hobi'];
        echo $hobi;
         }
         ?></td>
		<td><?php 
		if (isset($_POST['simpan'])){
        $radio = $_POST['radio'];
        echo $radio;
         }
         ?></td>

	</tr>
</table>
</body>
</html>