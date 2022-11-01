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
<table>
<tr>
<input type = "hidden" name = "id" value = "<?= $data['id'] ?>">
</tr>
<tr>
<td>NIM</td>
<td></td>
<td><input type="text" name="NIM" value= "<?= $data['NIM'] ?>">
</tr>
<tr>
<td>NIK</td>
<td></td>
<td><input type="text" name="NIK" value= "<?= $data['NIK'] ?>">
</tr>
<tr>
<td>NAMA</td>
<td></td>
<td><input type="text" name="NAMA" value= "<?= $data['NAMA'] ?>">
</tr>
<tr>
<td>TTL</td>
<td></td>
<td><input type="text" name="TTL" value= "<?= $data['TTL'] ?>">
</tr>
<tr>
<td>ALAMAT</td>
<td></td>
<td><input type="text" name="ALAMAT" value= "<?= $data['ALAMAT'] ?>">
</tr>
<tr>
<td>NAMA_AYAH</td>
<td></td>
<td><input type="text" name="NAMA_AYAH" value= "<?= $data['NAMA_AYAH'] ?>">
</tr>
<tr>
<td>NAMA_IBU</td>
<td></td>
<td><input type="text" name="NAMA_IBU" value= "<?= $data['NAMA_IBU'] ?>">
</tr>
<tr>
<td>JUDUL_SKRIPSI</td>
<td></td>
<td><input type="text" name="JUDUL_SKRIPSI" value= "<?= $data['JUDUL_SKRIPSI'] ?>">
</tr>
<tr>
<td>TAHUN_MASUK</td>
<td></td>
<td><input type="text" name="TAHUN_MASUK" value= "<?= $data['TAHUN_MASUK'] ?>">
</tr>
<tr>
<td>TAHUN_LULUS</td>
<td></td>
<td><input type="text" name="TAHUN_LULUS" value= "<?= $data['TAHUN_LULUS'] ?>">
</tr>
<tr>
<td>PEKERJAAN</td>
<td></td>
<td><input type="text" name="PEKERJAAN" value= "<?= $data['PEKERJAAN'] ?>">
</tr>
<tr>
<td></td>
<td></td>
<td><input type = "submit" value = "Simpan">
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