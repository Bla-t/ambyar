<?php 
// koneksi database
include '../kone.php';

$id = $_POST['id'];
$Cab = $_POST['Cabang'];
$tlp = $_POST['tlp'];
$alm = $_POST['almt'];
$pt = $_POST['pta'];
$k = $_POST['kir'];
$t = $_POST['ter'];


// updet peta
mysqli_query($koneksi,"UPDATE peta SET cabang='$Cab', alamat='$alm', tlp='$tlp', link='$pt', kirim='$k', terima='$t' WHERE id='$id'");
// mengalihkan halaman kembali ke index.php
header("location:../home.php");
 
?>