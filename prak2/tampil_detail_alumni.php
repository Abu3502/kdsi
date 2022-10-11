<?php
    include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Alumni Univ X</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:black;">
<h1>TABEL DETAIL ALUMNI INFORMATIKA</h1>
<div class = "white-box">
<table border="1">
    <tr>
        <td>NIK</td>
        <td>NAMA</td>
        <td>TTL</td>
        <td>ALAMAT</td>
        <td>NAMA AYAH</td>
		<td>NAMA IBU</td>
		<td>PEKERJAAN</td>
    </tr>
    <?php
		$no = 1;
        $tampil = mysqli_query($mysqli, "select * from detail_alumni");
        while($hasil = mysqli_fetch_array($tampil)){
    ?>
    <tr>
        <td><?php echo $hasil['NIK']; ?></td>
        <td><?php echo $hasil['NAMA']; ?></td>
        <td><?php echo $hasil['TTL']; ?></td>
        <td><?php echo $hasil['ALAMAT']; ?></td>
		<td><?php echo $hasil['NAMA_AYAH']; ?></td>
		<td><?php echo $hasil['NAMA_IBU']; ?></td>
		<td><?php echo $hasil['PEKERJAAN']; ?></td>
    </tr>
    <?php
        }
    ?>
</table></div><br>
<form method="get" action="tampil_gabungan.php">
    <button type="submit">Kembali</button>
</form></body></html>