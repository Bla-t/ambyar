<?php 
// menghubungkan dengan koneksi
include "../kone.php";
// menghubungkan dengan library excel reader
include "../spreadsheet-reader-master/php-excel-reader/excel_reader2.php";
?>


 
<?php
// upload file xls
$target = basename($_FILES['file']['name']) ;
move_uploaded_file($_FILES['file']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['file']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['file']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$D   = $data->val($i, 1);
	$T   = $data->val($i, 2);
	$f1  = $data->val($i, 3);
	$f2  = $data->val($i, 4);
	$mi  = $data->val($i, 5);
	$k3  = $data->val($i, 6);
	$mii = $data->val($i, 7);
	$k11 = $data->val($i, 8);
	$l   = $data->val($i, 9);
	$kub = $data->val($i, 10);
 
	if($D != "" && $T != "" && $f1 != "" &&$f2 !="" &&$mi !="" &&$k3 !="" &&$mii !="" &&$k11 !="" &&$l !="" &&$kub !=""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT INTO tabelharga VALUES('','$D','$T','$f1','$f2','$mi','$k3','$mii','$k11','$l','$kub')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);
 
// alihkan halaman ke index.php
header("location:../home.php?berhasil=$berhasil");

?>