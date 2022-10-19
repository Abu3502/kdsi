<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h3>Tambah Data Alumni</h3>
<hr/>
<form action = "" method = "post">
<table>
<tr>
<td>NIM</td>
<td>:</td>
<td><input type="text" name="NIM"/></td>
</tr>
<tr>
<td>NIK</td>
<td>:</td>
<td><input type="text" name="NIK"/></td>
</tr>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type="text" name="NAMA"/></td>
</tr>
<tr>
<td>TTL</td>
<td>:</td>
<td><input type="text" name="TTL"/></td>
</tr>
<tr>
<td>ALAMAT</td>
<td>:</td>
<td><input type="text" name="ALAMAT"/></td>
</tr>
<tr>
<td>NAMA_AYAH</td>
<td>:</td>
<td><input type="text" name="NAMA_AYAH"/></td>
</tr>
<tr>
<td>NAMA_IBU</td>
<td>:</td>
<td><input type="text" name="NAMA_IBU"/></td>
</tr>
<tr>
<td>JUDUL_SKIRPSI</td>
<td>:</td>
<td><input type="text" name="JUDUL_SKIRPSI"/></td>
</tr>
<tr>
<td>TAHUN_MASUK</td>
<td>:</td>
<td><input type="text" name="TAHUN_MASUK"/></td>
</tr>
<tr>
<td>TAHUN_LULUS</td>
<td>:</td>
<td><input type="text" name="TAHUN_LULUS"/></td>
</tr>
<tr>
<td>PEKERJAAN</td>
<td>:</td>
<td><input type="text" name="PEKERJAAN"/></td>
</tr>

<tr>
<td></td>
<td></td>
<td><input type="submit" value="Simpan"/></td>
</tr>
</table>
</form>

<?php
include 'config.php';
if ($_POST) {
	$sql = "INSERT INTO alumni_informatika (NIM, NAMA, JUDUL_SKRIPSI, TAHUN_MASUK, TAHUN_LULUS) VALUES 
	('($_POST[NIM])','($_POST[NAMA])','($_POST[JUDUL_SKRIPSI])','($_POST[TAHUN_MASUK])','($_POST[TAHUN_LULUS])')";
	$query = mysqli_query($koneksi, $sql);
	
	$sql = "SELECT max(id) AS last_id FROM alumni_informatika LIMIT 1";
	$query = mysqli_query($koneksi, $sql);
	
	$data = mysqli_fetch_array($query);
	$last_id = $data['last_id'];
	
	$sql = "INSERT INTO detail_alumni (id, NIK, TTL, ALAMAT, NAMA_AYAH, NAMA_IBU, PEKERJAAN) VALUES
	('last_id', '($_POST[NIK])', '($_POST[TTL])', '($_POST[ALAMAT])', '($_POST[NAMA_AYAH])', '($_POST[NAMA_IBU])', '($_POST[PEKERJAAN])')";
	$query = mysqli_query($koneksi, $sql);
	
	if ($query) {
		echo "Data disimpan";
		header('Location: index.php');
	} else {
		echo "Data gagal tersimpan: ".mysqli_error($koneksi);
	}
}
?>