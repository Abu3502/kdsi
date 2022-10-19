<?php
include 'config.php';

$sql = "SELECT * FROM alumni_informatika INNER JOIN detail_alumni ON alumni_informatika.id = detail_alumni.id";
$query = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
	<title>Alumni Univ Z</title>
</head>
<h3>Data Alumni Univ Z</h3>
<hr/>
<body>
	<a href = "tambah_alumni.php">Tambah data</a><br><br>
	<table cellspacing = "0" border = "1">
		<tr>
			<th>NIM</th>
			<th>NIK</th>
			<th>NAMA</th>
			<th>TTL</th>
			<th>ALAMAT</th>
			<th>NAMA AYAH</th>
			<th>NAMA IBU</th>
			<th>JUDUL SKRIPSI</th>
			<th>TAHUN MASUK</th>
			<th>TAHUN LULUS</th>
			<th>PEKERJAAN</th>
			<th>EDIT DATA</th>
		</tr>
		<?php
		while ($data = mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?php echo $data['NIM'] ?></td>
				<td><?php echo $data['NIK'] ?></td>
				<td><?php echo $data['NAMA'] ?></td>
				<td><?php echo $data['TTL'] ?></td>
				<td><?php echo $data['ALAMAT'] ?></td>
				<td><?php echo $data['NAMA_AYAH'] ?></td>
				<td><?php echo $data['NAMA_IBU'] ?></td>
				<td><?php echo $data['JUDUL_SKRIPSI'] ?></td>
				<td><?php echo $data['TAHUN_MASUK'] ?></td>
				<td><?php echo $data['TAHUN_LULUS'] ?></td>
				<td><?php echo $data['PEKERJAAN'] ?></td>
				<td><a href="edit_alumni.php?id=<?= $data['id'] ?>">Edit</a> | <a href="hapus_alumni.php?id=<?= $data['id'] ?>">Hapus</a></td>
			</tr>
			<?php
			}
			?>
	</table>
</body>
</html>