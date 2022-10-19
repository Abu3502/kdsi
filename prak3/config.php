<?php
$koneksi = mysqli_connect ("localhost","root","","alumni");

if (mysqli_connect_errno()) {
	echo "Koneksi gagal : ".mysqli_error();
	}
	
?>