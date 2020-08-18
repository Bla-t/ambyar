<?php
include '../kone.php';

$hapus = mysqli_query($koneksi,'TRUNCATE TABLE tabelharga4');

if ($hapus) {
	
	header("location:../home.php?bersih='y'");

} else {
	header("location: ../home.php?bersih='n'");
}


?>