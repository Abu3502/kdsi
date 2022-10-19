<?php
include 'config.php';

$id = (int) $_GET['id'];
$sql = "SELECT * FROM alumni_informatika INNER JOIN detail_alumni ON alumni_informatika.id = detail_alumni.id WHERE alumni_informatika.id = '$id'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h3>Update Data Alumni</h3>
<hr/>
<form action = "" method = "post">
	<input type = "hidden" name = "id" value = "<?= $data['id'] ?>"> 
	<label for = "NIM">NIM</label>
	<input type = "text" name = "NIM" value = "<?= $data['NIM'] ?>">
<br>
	<label for = "NIK">NIK</label>
	<input type = "text" name = "NIK" value = "<?= $data['NIK'] ?>">
<br>
	<label for = "NAMA">NAMA</label>
	<input type = "text" name = "NAMA" value = "<?= $data['NAMA'] ?>">
<br>
	<label for = "TTL">TTL</label>
	<input type = "text" name = "TTL" value = "<?= $data['TTL'] ?>">
<br>
	<label for = "ALAMAT">ALAMAT</label>
	<input type = "text" name = "ALAMAT" value = "<?= $data['ALAMAT'] ?>">
<br>
	<label for = "NAMA_AYAH">NAMA AYAH</label>
	<input type = "text" name = "NAMA_AYAH" value = "<?= $data['NAMA_AYAH'] ?>">
<br>
	<label for = "NAMA_IBU">NAMA IBU</label>
	<input type = "text" name = "NAMA_IBU" value = "<?= $data['NAMA_IBU'] ?>">
<br>
	<label for = "JUDUL_SKRIPSI">JUDUL SKRIPSI</label>
	<input type = "text" name = "JUDUL_SKRIPSI" value = "<?= $data['JUDUL_SKRIPSI'] ?>">
<br>
	<label for = "TAHUN_MASUK">TAHUN MASUK</label>
	<input type = "text" name = "TAHUN_MASUK" value = "<?= $data['TAHUN_MASUK'] ?>">
<br>
	<label for = "TAHUN_LULUS">TAHUN LULUS</label>
	<input type = "text" name = "TAHUN_LULUS" value = "<?= $data['TAHUN_LULUS'] ?>">
<br>
	<label for = "PEKERJAAN">PEKERJAAN</label>
	<input type = "text" name = "PEKERJAAN" value = "<?= $data['PEKERJAAN'] ?>">
<br>

<input type = "submit" value = "simpan">

</form>

<?php
if ($_POST) {
	$sql = "UPDATE detail_alumni SET NIK = '{$_POST['NIK']}}',
									 TTL = '{$_POST['TTL']}',
									 ALAMAT = '{$_POST['ALAMAT']}',
									 NAMA_AYAH = '{$_POST['NAMA_AYAH']}',
									 NAMA_IBU = '{$_POST['NAMA_IBU']}',
									 PEKERJAAN = '{$_POST['PEKERJAAN']}'
									 WHERE id = '{$_POST['id']}'";
	$query = mysqli_query ($koneksi, $sql);
	
	$sql = "UPDATE alumni_informatika SET NIM = '{$_POST['NIM']}}',
										  NAMA = '{$_POST['NAMA']}',
										  JUDUL_SKRIPSI = '{$_POST['JUDUL_SKRIPSI']}',
										  TAHUN_MASUK = '{$_POST['TAHUN_MASUK']}',
										  TAHUN_LULUS = '{$_POST['TAHUN_LULUS']}'
										  WHERE id = '{$_POST['id']}'";
	$query = mysqli_query($koneksi, $sql);
	if ($query) {
		echo "Data diubah";
		header('Location: index.php');
	} else {
		echo "Data gagal diubah : ".mysqli_error();
	}
}

?>