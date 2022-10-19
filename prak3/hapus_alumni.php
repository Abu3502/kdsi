<?php
include 'config.php';

$id = (int) $_GET['id'];

if ($id) {
	$sql = "DELETE FROM alumni_informatika WHERE id = '{$id}'";
	$query = mysqli_query($koneksi, $sql);
	
	$sql = "DELETE FROM detail_alumni WHERE id = '{$id}'";
	$query = mysqli_query($koneksi, $sql);
}

header ('Location: index.php');
exit;

?>