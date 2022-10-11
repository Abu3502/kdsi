<?php
    include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alumni Univ X</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:black;">
<h1>TABEL GABUNGAN</h1>
<div class = "white-box">
<table border="1">
    <tr>
        <td>NIM</td>
		<td>NIK</td>
        <td>NAMA</td>
        <td>TTL</td>
        <td>ALAMAT</td>
        <td>NAMA AYAH</td>
		<td>NAMA IBU</td>
		<td>JUDUL SKRIPSI</td>
		<td>TAHUN MASUK</td>
		<td>TAHUN LULUS</td>
		<td>PEKERJAAN</td>
    </tr>
    <?php
		$no = 1;
        $tampil = mysqli_query($mysqli, "select * from alumni_informatika, detail_alumni
		WHERE alumni_informatika.NAMA = detail_alumni.NAMA") or die (mysqli_error($config));
        while($hasil = mysqli_fetch_array($tampil)){
    ?>
    <tr>
        <td><?php echo $hasil['NIM']; ?></td>
		<td><?php echo $hasil['NIK']; ?></td>
        <td><?php echo $hasil['NAMA']; ?></td>
        <td><?php echo $hasil['TTL']; ?></td>
        <td><?php echo $hasil['ALAMAT']; ?></td>
		<td><?php echo $hasil['NAMA_AYAH']; ?></td>
		<td><?php echo $hasil['NAMA_IBU']; ?></td>
		<td><?php echo $hasil['JUDUL_SKRIPSI']; ?></td>
		<td><?php echo $hasil['TAHUN_MASUK']; ?></td>
		<td><?php echo $hasil['TAHUN_LULUS']; ?></td>
		<td><?php echo $hasil['PEKERJAAN']; ?></td>
    </tr>
    <?php
        }
    ?>
</table></div><br>
<form method = "get" action = "tampil_detail_alumni.php">
<button type = "submit">Detail Alumni</button>
</form><br>
<form method = "get" action = "tampil_alumni_informatika.php">
<button type = "submit">Alumni Informatika</button>
</form><br>
<form method = "get" action = "index.html">
<button type = "submit">Kembali</button>
</form></body></html>