<?php

// koneksi database
include '../kone.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
if(isset($_GET['d1'])){
 mysqli_query($koneksi,"delete from tabelharga where id='$id'");
}
elseif(isset($_GET['d2'])){
mysqli_query($koneksi,"delete from tabelharga2 where id='$id'");
}
mysqli_query($koneksi,"delete from tabelharga3 where id='$id'");
mysqli_query($koneksi,"delete from tabelharga4 where id='$id'");
mysqli_query($koneksi,"delete from serang where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../home.php");
 
?>