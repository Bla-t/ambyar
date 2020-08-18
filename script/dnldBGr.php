<?php 
 //koneksi kedatabase
include '../kone.php';

 // nama file
 $filename= "tabelharga2".".xls";

 //header info for browser
 header("Content-Type: application/vnd-ms-excel"); 
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //menampilkan data sebagai array dari tabel produk
 $out=array();
 $sql = mysqli_query($koneksi,"select * from tabelharga2");
 while($data = mysqli_fetch_assoc($sql)) $out[] = $data;

 $show_coloumn = false;
 foreach($out as $record) {
 if(!$show_coloumn) {
 //menampilkan nama kolom di baris pertama
 echo implode("\t", array_keys($record)) . "\n";
 $show_coloumn = true;
 }
 // looping data dari database
 echo implode("\t", array_values($record)) . "\n";
 } 
 exit;
?>