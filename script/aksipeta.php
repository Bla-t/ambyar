<?php

include '../kone.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$Cab = $_POST['Cabang'];
$tlp = $_POST['tlp'];
$alm = $_POST['almt'];
$pt = $_POST['pta'];
$k = $_POST['kir'];
$t = $_POST['ter'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into peta values('','$Cab','$alm','$tlp','$pt','$t','$k')");
 
// mengalihkan halaman kembali ke index.php
header("location:../home.php");
 
?>