<?php
session_start();

$connection = mysqli_connect("localhost","root","");

if (!$connection) {
    error_log("Failed to connect to MySQL: " . mysqli_error($connection));
    die('Internal server error');
}
+
// 2. Select a database to use 
$db_select = mysqli_select_db($connection, 'test');
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($connection));
    die('Internal server error');
}

?>
<?php
if(isset($_POST['login'])){
	$user = mysqli_real_escape_string(htmlentities($_POST['username']));
	$pass = mysqli_real_escape_string(htmlentities(md5($_POST['password'])));
 
	$sql = mysqli_query("SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysqli_error());
	if(mysqli_num_rows($sql) == 0){
		echo 'User tidak ditemukan';
	}else{
		$row = mysqli_fetch_assoc($sql);
		if($row['level'] == 1){
			$_SESSION['admin']=$user;
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/index.php";</script>';
		}else{
			
		}
	}
}
?>