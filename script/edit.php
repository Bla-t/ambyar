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
			<div class="col"><h2>Tambah Data Harga</h2></div>
		  </div><br/>
			<?php
				include '../kone.php';
				$id = $_GET['id'];
				$data = mysqli_query($koneksi,"select * from tabelharga where id='$id'");
				while($d = mysqli_fetch_array($data)){
				?>
		<div class="row">
			<form method="post" action="updet.php">
			  <div class="form-row">
			   <div class="col">
			      <label for="1">Dari:</label>
			      <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
				  <input type="text" class="form-control" id="1" name="D" value="<?php echo $d['Dari']; ?>">
			    </div>
			    <div class="col">
			      <label for="2">Tujuan:</label>
			      <input type="text" class="form-control" id="2" name="T" value="<?php echo $d['Tujuan']; ?>">
			    </div></div>
			    <div class="form-row">
			    <div class="col">
			      <label for="3">fix1:</label>
			      <input class="form-control" id="3" name="f1" value="<?php echo $d['fix1']; ?>">
			    </div>
			    <div class="col">
			      <label for="4">fix2:</label>
			      <input class="form-control" id="4" name="f2" value="<?php echo $d['fix2']; ?>">
			    </div></div>
			    <div class="form-row">
			    <div class="col">
			      <label for="5">minim 3-10:</label>
			      <input class="form-control" id="5" name="minim" value="<?php echo $d['minim3']; ?>">    
			    </div>
			    <div class="col">
			      <label for="6">Kg 3-10:</label>
			      <input class="form-control" id="6" name="kg1" value="<?php echo $d['Kg3']; ?>">
			    </div></div>
			    <div class="form-row">
			    <div class="col">
			      <label for="7">minim 11-100:</label>
			      <input class="form-control" id="7" name="minim2" value="<?php echo $d['minim11']; ?>" >	      
			    </div>
			    <div class="col">
			      <label for="8">Kg 11-100:</label>
			      <input class="form-control" id="8" name="kg2" value="<?php echo $d['Kg11']; ?>">
			    </div></div>
			    <div class="form-row">
			    <div class="col">
			      <label for="9">> 100:</label>
			      <input class="form-control" id="9" name="l100" value="<?php echo $d['lebih100']; ?>">  
			    </div>
			    <div class="col">
			      <label for="10">Kubikasi:</label>
			      <input class="form-control" id="10" name="k3" value="<?php echo $d['kubikasi']; ?>">
			    </div></div><br/>
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