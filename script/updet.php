<?php 
// koneksi database
include '../kone.php';
 
// menangkap data yang di kirim dari form
$id 	= $_POST['id'];
$fix1 	= $_POST['f1'];
$fix2 	= $_POST['f2'];
$minim 	= $_POST['minim'];
$kg 	= $_POST['kg1'];
$minim2 = $_POST['minim2'];
$kg2 	= $_POST['kg2'];
$lebih 	= $_POST['l100'];
$k3 	= $_POST['k3'];

// update data ke database
if (isset($_POST['I'])){
	mysqli_query($koneksi,"UPDATE tabelharga SET fix1='$fix1', fix2='$fix2', minim3='$minim', Kg3='$kg', minim11='$minim2', Kg11='$kg2', lebih100='$lebih',kubikasi='$k3' WHERE id='$id'");
}
elseif (isset($_POST['II'])) {
	mysqli_query($koneksi,"UPDATE tabelharga2 SET fix1='$fix1', fix2='$fix2' WHERE id='$id'");
}
elseif (isset($_POST['III'])) {
	mysqli_query($koneksi,"UPDATE tabelharga3 SET fix1='$fix1', fix2='$fix2', minim3='$minim', Kg3='$kg', kubikasi='$k3' WHERE id='$id'");
}
elseif (isset($_POST['IV'])) {
	mysqli_query($koneksi,"UPDATE tabelharga4 SET fix1='$fix1', fix2='$fix2', minim='$minim', perKg='$kg', kubikasiM3='$k3' WHERE id='$id'");
}
elseif (isset($_POST['V'])) {
	mysqli_query($koneksi,"UPDATE serang SET fix1='$fix1', fix2='$fix2', minim3='$minim', Kg3='$kg',L100='$l100', kubikasi='$k3' WHERE id='$id'");
}


// menghapus data dari database
if(isset($_POST['d1'])){
 mysqli_query($koneksi,"delete from tabelharga where id='$id'");
}
elseif(isset($_POST['d2'])){
mysqli_query($koneksi,"delete from tabelharga2 where id='$id'");
}
elseif(isset($_POST['d3'])){
mysqli_query($koneksi,"delete from tabelharga3 where id='$id'");
}
elseif(isset($_POST['d4'])){
mysqli_query($koneksi,"delete from tabelharga4 where id='$id'");
}
elseif(isset($_POST['d5'])){
mysqli_query($koneksi,"delete from serang where id='$id'");
}


//kosongkan tabel

// mengalihkan halaman kembali ke index.php
header("location:../home.php");
 
?>