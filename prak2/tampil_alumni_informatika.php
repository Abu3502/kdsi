<?php
    include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alumni Informatika Univ X</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:black;">
<h1>TABEL ALUMNI INFORMATIKA</h1>
<div class = "white-box">
<table border="1">
    <tr>
        <td>NIM</td>
        <td>NAMA</td>
        <td>JUDUL SKRIPSI</td>
        <td>TAHUN MASUK</td>
        <td>TAHUN LULUS</td>
    </tr>
    <?php
		$no = 1;
        $tampil = mysqli_query($mysqli, "select * from alumni_informatika");
        while($hasil = mysqli_fetch_array($tampil)){
    ?>
    <tr>
        <td><?php echo $hasil['NIM']; ?></td>
        <td><?php echo $hasil['NAMA']; ?></td>
        <td><?php echo $hasil['JUDUL_SKRIPSI']; ?></td>
        <td><?php echo $hasil['TAHUN_MASUK']; ?></td>
		<td><?php echo $hasil['TAHUN_LULUS']; ?></td>
    </tr>
    <?php
        }
    ?>
</table></div><br>
<form method="get" action="tampil_gabungan.php">
    <button type="submit">Kembali</button>
</form></body></html>