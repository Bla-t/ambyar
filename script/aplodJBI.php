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
	$f3  = $data->val($i, 5);
	$f4  = $data->val($i, 6);
	$f5  = $data->val($i, 7);


	if($D != "" && $T != "" && $f1 != "" &&$f2 !="" &&$f3 !="" &&$f4 !="" &&$f5 !=""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT INTO tabelharga3 VALUES('','$D','$T','$f1','$f2','$f3','$f4','$f5')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);
 
// alihkan halaman ke index.php
header("location:../home.php?berhasil=$berhasil");

?>