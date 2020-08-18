<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">	
	   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
 	<div class="col-md-12">
 	  <div class="row" style="padding-top: 5%;">
		<h3 class="display-6"><a href="../home.php"><i class="fas fa-eject"> KEMBALI</i></a></h3><br/>
		</div><br/>
		  <div class="row">
		    <div class="col"><h2>Tambah Lokasi Peta</h2></div>
		  </div><br/>
			<?php
				include '../kone.php';
				$id = $_GET['id'];
				$data = mysqli_query($koneksi,"select * from peta where id='$id'");
				while($d = mysqli_fetch_array($data)){
				?>
		<div class="row">		  
		  	<form method="post" action="setpeta.php" class="needs-validation" novalidate>
			  <div class="form-row">
			   <div class="col">
			      <label for="1">Cabang:</label>
			      <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
			      <input type="text" class="form-control" id="1" name="Cabang"  value="<?php echo $d['cabang']; ?>" required>
			    </div>
			    <div class="col">
			      <label for="2">No.tlp:</label>
			      <input type="text" class="form-control" id="2" name="tlp" value="<?php echo $d['tlp']; ?>" required>
			    </div></div>
			    <div class="form-row">
			   <div class="col">
			      <label for="11">terima:</label>
			      <input type="text" class="form-control" id="11" name="ter" value="<?php echo $d['terima']; ?>" required>
			    </div>
			    <div class="col">
			      <label for="22">kirim:</label>
			      <input type="text" class="form-control" id="22" name="kir" value="<?php echo $d['kirim']; ?>" required>
			    </div></div>
			    <div class="form-group">
			      <label for="3">Alamat:</label>
			      <textarea type="text" class="form-control" id="3" name="almt"><?php echo $d['alamat']; ?></textarea>
			      <label for="4">Peta:</label>
			      <textarea type="text" class="form-control" id="4" name="pta" ><?php echo $d['link']; ?></textarea>
			    </div><br/>			    
			    <button type="submit" class="btn btn-primary">Simpen</button>
			</form>
		  </div>
	</div>
		<?php 
				}
				?>
	
</div>
 
</body>
</html>