<?php

include '../kone.php';
 
// menangkap data yang di kirim dari form
$Dari = $_POST['Dari'];
$Tujuan = $_POST['Tujuan'];
$fix1 = $_POST['fix1'];
$fix2 = $_POST['fix2'];
$minim = $_POST['minim3-10'];
$Kg1 = $_POST['Kg3-10'];
$minim2 = $_POST['minim11-100'];
$Kg2 = $_POST['Kg11-100'];
$lebih100 = $_POST['Lebih100'];
$kubikasi = $_POST['Kubikasi'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tabelharga values('','$Dari','$Tujuan','$fix1','$fix2','$minim','$Kg1','$minim2','$Kg2','$lebih100','$kubikasi')");
 
// mengalihkan halaman kembali ke index.php
header("location:../home.php");
 
?>