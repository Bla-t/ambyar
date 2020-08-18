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
	$f6  = $data->val($i, 8);
	$f7  = $data->val($i, 9);
	$f8  = $data->val($i, 10);
	$f9  = $data->val($i, 11);
	$g1  = $data->val($i, 12);
	$g2  = $data->val($i, 13);
	$g3  = $data->val($i, 14);
	$g4  = $data->val($i, 15);
	$g5  = $data->val($i, 16);
	$g6  = $data->val($i, 17);
	$g7  = $data->val($i, 18);
	$g8  = $data->val($i, 19);
	$g9  = $data->val($i, 20);



	if($D != "" && $T != "" && $f1 != "" &&$f2 !="" &&$f3 !="" &&$f4 !="" &&$f5 !="" &&$f6 !="" &&$f7 !="" &&$f8 !="" &&$f9 !="" &&$g1 !="" &&$g2 !="" &&$g3 !="" &&$g4 !="" &&$g5 !="" &&$g6 !="" &&$g7 !="" &&$g8 !="" &&$g9 !=""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT INTO tujuan VALUES('','$D','$T','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$g1','$g2','$g3','$g4','$g5','$g6','$g7','$g8','$g9',)");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);
 
// alihkan halaman ke index.php
header("location:../home.php?berhasil=$berhasil");

?>