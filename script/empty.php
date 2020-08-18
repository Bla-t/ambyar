<?php
include "../kone.php";

if (isset($_POST['A'])){
mysqli_query($koneksi, "TRUNCATE TABLE tabelharga");
}

elseif (isset($_POST['B'])) {
	mysqli_query($koneksi,"TRUNCATE TABLE tabelharga2");
}
elseif(isset($_POST['C'])){
	mysqli_query($koneksi,"TRUNCATE TABLE tabelharga3");
}
elseif (isset($_POST['D'])) {
	mysqli_query($koneksi,"TRUNCATE TABLE tabelharga4");
}
elseif (isset($_POST['E'])) {
	mysqli_query($koneksi,"TRUNCATE TABLE serang");
}

header("location:../home.php");
?>