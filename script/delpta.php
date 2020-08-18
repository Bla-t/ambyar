<?php

// koneksi database
include '../kone.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from peta where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../home.php");
 
?>