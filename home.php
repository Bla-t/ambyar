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
<style type="text/css">
	.card{
		background: transparent;
	}
	.p-2{
		color: #001C50;
	}
	.font-weight-bold{
		color : #001C50;
	}
	
	.table{
		background-color:#ffffff;
	}
	.form-control{
		background: transparent;
	}

	body{
		background-color:#EBDBA4 ;

		/*background: url(asets/grunge-brown-paper-texture-vector.jpg)fixed;*/
	}
	.table{

		background-color:#F4E6B7;
	}
	
</style>

<body>
	<?php
	include 'kone.php';
	 ?>
 <div class="container">
 	<div class="col-md-12 " style="padding-top: 5%;">
 		<div class="form-row">
 			<div class="col">
			 	<h2 class="display-4">Daftar Harga</h2>
			 </div>
			 	<div class="col">
			 		<h4 class="display-5">
				 	<?php 
						if(isset($_GET['berhasil'])){
							echo "<p>".$_GET['berhasil']." Data berhasil di upload.</p>";

							}

							elseif(isset($_GET['hapus'])){
								echo"<p>".$_GET['hapus']." Data berhasil di hapus.</p>";
							}

							?>
					</h4>
				</div>
			 </div>
		</div>
	</div>><br/>
<div class="container">
  <div class="row-lg-12">
	  <div id="accordion">
		<div class="card">
	     <form method="post" action="script/empty.php">
	      <div class="card-header d-flex">
	        <a class="card-link" data-toggle="collapse" href="#collapse-1">	        	
	        	<i class="fas fa-bars p-2"></i>
	        	<i class="font-weight-bold p-2" style="font-size: 20px;">JAWA</i>
	        	<a class="p-2 ml-auto" href="script/donlod.php" data-toggle="tooltip" title="Download"><i class="fas fa-download" ></i></a>
	        	<button type="submit" class="p-2 btn" name="A" data-toggle="tooltip" title="Kosongkan"><i class="fas fa-recycle" style="font-size: 20px;"></i></button>
	        </a>
	      </div>
	    </form>     
      <div id="collapse-1" class="collapse" data-parent="#accordion">			
        <div class="card-body table-responsive">
        	<form method="post" enctype="multipart/form-data" action="script/aplod.php">
				 	<div class="form-row">
					   <div class="col">					     
					      <div class="custom-file">
						    <input type="file" class="custom-file-input" name="file" required="required">
						    <label class="custom-file-label" for="customFile">Pilih File</label>
						  </div>
					    </div>
					    <div class="col">					      
					      <button name="upload" value="cadas" class="btn btn-warning">Upload</button>
					    </div>
					    <div class="col">
					    	<input class="form-control" id="cari" type="text" placeholder="cari">		 	
					    </div>
					</div>
				</form>
        <h4 class="display-5"><a class="p-2" href="script/tambah.php" ><i class="fas fa-plus"> Tambah</i></a></h4>
          <table class="table table-hover ">
		    <thead class="thead-dark">
				<tr>
					<th>NO</th>
					<th>Dari</th>
					<th>Tujuan</th>
					<th>1Kg</th>
					<th>2Kg</th>
					<th>minimal 3-10</th>
					<th>Kg 3-10</th>
					<th>minim 11-100</th>
					<th>Kg 11-100</th>
					<th>Lebih 100Kg</th>
					<th>kubikasi (M3)</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<?php 				
			$no = 1;
			$data = mysqli_query($koneksi,"select * from tabelharga");
			while($d = mysqli_fetch_array($data)){
				?>
			<tbody id="table">
			<tr>
				<form method="post" action="script/updet.php">
				<td><?php echo $no++; ?></td>
				<td><input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
					<?php echo $d['Dari']; ?></td>
				<td><?php echo $d['Tujuan']; ?></td>
				<td><input class="form-control" style="width: 130%;" name="f1" value="<?php echo $d['fix1']; ?>"></td>  
				<td><input class="form-control" style="width: 130%;" name="f2" value="<?php echo $d['fix2']; ?>"></td>
				<td><input class="form-control" style="width: 110%;" name="minim" value="<?php echo $d['minim3']; ?>"></td>
				<td><input class="form-control" style="width: 120%;" name="kg1" value="<?php echo $d['Kg3']; ?>"></td>
				<td><input class="form-control" style="width: 120%;" name="minim2" value="<?php echo $d['minim11']; ?>"></td>
				<td><input class="form-control" style="width: 120%;" name="kg2" value="<?php echo $d['Kg11']; ?>"></td>
				<td><input class="form-control" style="width: 110%;" name="l100" value="<?php echo $d['lebih100']; ?>"></td>
				<td><input class="form-control" style="width: 138%;" name="k3" value="<?php echo $d['kubikasi']; ?>"></td>
				<td>
					<button type="submit" name="I" class="btn btn-warning">Ubah</button></td>
				<td>
					<button type="submit" name="d1" class="btn btn-danger">Hapus</button>
				</td>
			</form>
			</tr>

				<?php 
			}
			?>
			</tbody>
		  </table>
	    </div>
	  </div>			      
	 </div>
	 <div class="card">
	     <form methode="post" action="srcipt/empty.php">
	      <div class="card-header d-flex">
	        <a class="card-link" data-toggle="collapse" href="#collapse-2">
	        	<i class="fas fa-bars p-2"></i>
	        	<i class=" p-2 font-weight-bold" style="font-size: 20px;">BOGOR</i>    	
	        	<a class="p-2 ml-auto" href="script/dnldBGr.php" data-toggle="tooltip" title="Download"><i class="fas fa-download" ></i></a>
	        	<button type="submit" class="p-2 res btn" name="B" data-toggle="tooltip" title="Kosongkan"><i class="fas fa-recycle" style="font-size: 20px;"></i></button>         
	        </a>
	      </div>
	  </form>
      <div id="collapse-2" class="collapse" data-parent="#accordion">
        <div class="card-body table-responsive">
        	<form method="post" enctype="multipart/form-data" action="script/aplodbgr.php">
				 	<div class="form-row">
					   <div class="col">					     
					      <div class="custom-file">
						    <input type="file" class="custom-file-input" name="file" required="required">
						    <label class="custom-file-label" for="customFile">Pilih File</label>
						  </div>
					    </div>
					    <div class="col">					      
					      <button name="upload" class="btn btn-warning">Upload</button>
					    </div>
					    <div class="col">
					    	<input class="form-control" id="find" type="text" placeholder="cari">		 	
					    </div>
					</div>
				</form>
          <h4 class="display-5"><a class="p-2" href="tambah.php" ><i class="fas fa-plus"> Tambah</i></a></h4>
          <table class="table table-hover">
		    <thead class="thead-dark">
				<tr>
					<th>NO</th>
					<th>Dari</th>
					<th>Tujuan</th>
					<th>Sparepart</th>
					<th>Sepatu</th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<?php 				
			$no1 = 1;
			$data2 = mysqli_query($koneksi,"select * from tabelharga2");
			while($dd = mysqli_fetch_array($data2)){
				?>
			<tbody id="table1">
			<tr>
				<form method="post" action="script/updet.php">
				<td><?php echo $no1++; ?></td>
				<td><input type ="hidden" class="form-control" name="id" value="<?php echo $dd['id']; ?>">
					<?php echo $dd['Dari']; ?></td>
				<td><?php echo $dd['Tujuan']; ?></td>
				<td><input class="form-control" name="f1" value="<?php echo $dd['fix1']; ?>"></td>
				<td><input class="form-control" name="f2" style="width: 150%;" value="<?php echo $dd['fix2']; ?>"></td>
				<td></td>
				<td></td>
				<td>
					<button type="submit" name="II" class="btn btn-warning">Ubah</button></td>
				<td class=" col-1">
					<button type="submit" name="d2" class="btn btn-danger">Hapus</button>
				</td>
				</form>
			</tr>

				<?php 
			}
			?>
			</tbody>
		  </table>
	    </div>
	  </div>			      
	 </div>
	 <div class="card">
	     <form method="post" action="script/empty.php">
	      <div class="card-header d-flex">
	        <a class="card-link" data-toggle="collapse" href="#collapse-3">
	        	<i class="fas fa-bars p-2"></i>
	        	<i class=" p-2 font-weight-bold" style="font-size: 20px;">SUMATRA</i>
	        	<a class="p-2 ml-auto" href="script/dnldJBI.php" data-toggle="tooltip" title="Download"><i class="fas fa-download" ></i></a>
	        	<button type="submit" class="p-2 res btn" name="C" data-toggle="tooltip" title="Kosongkan"><i class="fas fa-recycle" style="font-size: 20px;"></i></button>        
	        </a>
	      </div>
	    </form>	      
      <div id="collapse-3" class="collapse" data-parent="#accordion">
        <div class="card-body table-responsive">
        	<form method="post" enctype="multipart/form-data" action="script/aplodJBI.php">
				 	<div class="form-row">
					   <div class="col">					     
					      <div class="custom-file">
						    <input type="file" class="custom-file-input" name="file" required="required">
						    <label class="custom-file-label" for="customFile">Pilih File</label>
						  </div>
					    </div>
					    <div class="col">					      
					      <button name="upload" class="btn btn-warning">Upload</button>
					    </div>
					    <div class="col">
					    	<input class="form-control" id="finds" type="text" placeholder="cari">		 	
					    </div>
					</div>
				</form>
         <h4 class="display-5"><a class="p-2" href="tambah.php" ><i class="fas fa-plus"> Tambah</i></a></h4>
          <table class="table table-hover">
		    <thead class="thead-dark">
				<tr>
					<th>NO</th>
					<th>Dari</th>
					<th>Tujuan</th>
					<th>1Kg</th>
					<th>/Kg Naik</th>
					<th>11-20 Kg</th>
					<th>Lebih dari 20Kg</th>
					<th>Kubikasi</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<?php 				
			$no2 = 1;
			$data2d = mysqli_query($koneksi,"select * from tabelharga3");
			while($dds = mysqli_fetch_array($data2d)){
			?>
			<tbody id="table2">
			<tr>
				<form method="post" action="script/updet.php">
				<td><?php echo $no2++; ?></td>
				<td><input type="hidden" class="form-control" name="id" value="<?php echo $dds['id']; ?>">
					<?php echo $dds['Dari']; ?></td>
				<td><?php echo $dds['Tujuan']; ?></td>
				<td><input class="form-control" name="f1" value="<?php echo $dds['fix1']; ?>"></td>
				<td><input class="form-control" name="f2" value="<?php echo $dds['fix2']; ?>"></td>
				<td><input class="form-control" name="minim" value="<?php echo $dds['minim3']; ?>"></td>
				<td><input class="form-control" name="kg1" value="<?php echo $dds['Kg3']; ?>"></td>
				<td><input class="form-control" name="k3" value="<?php echo $dds['kubikasi']; ?>"></td>
				<td>
					<button class="btn btn-warning" name="III" type="submit">Ubah</button></td>
				<td>
					<button type="submit" name="d3" class="btn btn-danger">Hapus</button>
				</td>
			</form>
			</tr>

			<?php	
			}
			?>
			</tbody>
		  </table>
	    </div>
	  </div>			      
	 </div>
	 <div class="card">
	 	<form method="post" action="script/empty.php">
	      <div class="card-header d-flex">
	        <a class="card-link" data-toggle="collapse" href="#collapse-4">
	        	<i class="fas fa-bars p-2"></i>
	        	<i class=" p-2 font-weight-bold" style="font-size: 20px;">JAWA TUJUAN SUMATRA</i>
	        	<a class="p-2 ml-auto" href="script/dnldBDR.php" data-toggle="tooltip" title="Download"><i class="fas fa-download" ></i></a>
	        	<button type=submit class="p-2 res btn" name="D" data-toggle="tooltip" title="Kosongkan"><i class="fas fa-recycle" style="font-size: 20px;"></i></button>         
	        </a>
	      </div>
	  </form>
      <div id="collapse-4" class="collapse" data-parent="#accordion">
        <div class="card-body table-responsive">
        	<form method="post" enctype="multipart/form-data" action="script/aplodBDr.php">
				 	<div class="form-row">
					   <div class="col">					     
					      <div class="custom-file">
						    <input type="file" class="custom-file-input" name="file" required="required">
						    <label class="custom-file-label" for="customFile">Pilih File</label>
						  </div>
					    </div>
					    <div class="col">					      
					      <button name="upload" class="btn btn-warning">Upload</button>
					    </div>
					    <div class="col">
					    	<input class="form-control" id="finding" type="text" placeholder="cari">		 	
					    </div>
					</div>
				</form>
          <h4 class="display-5"><a class="p-2" href="tambah.php" ><i class="fas fa-plus"> Tambah</i></a></h4>
          <table class="table table-hover" id="">
		    <thead class="thead-dark">
				<tr>
					<th>NO</th>
					<th>Dari</th>
					<th>Tujuan</th>
					<th>1Kg</th>
					<th>2Kg</th>
					<th>3-10 Kg</th>
					<th>lebih dari 50 Kg</th>
					<th>kubikasi</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<?php 				
			$no3 = 1;
			$datab = mysqli_query($koneksi,"select * from tabelharga4");
			while($dda = mysqli_fetch_array($datab)){
				?>
			<tbody id="table3">
			<tr>
				<form method="post" action="script/updet.php">
				<td><?php echo $no3++; ?></td>
				<td><input class="form-control" type="hidden" name="id" value="<?php echo $dda['id']; ?>">
					<?php echo $dda['Dari'];?></td>
				<td><?php echo $dda['Tujuan'];?></td>
				<td><input class="form-control" name="f1" value="<?php echo $dda['fix1']; ?>"></td>
				<td><input class="form-control" name="f2" value="<?php echo $dda['fix2']; ?>"></td>
				<td><input class="form-control" name="minim" value="<?php echo $dda['minim']; ?>"></td>
				<td><input class="form-control" name="kg1" value="<?php echo $dda['perKg']; ?>"></td>
				<td><input class="form-control" name="k3" value="<?php echo $dda['kubikasiM3']; ?>"></td>
				<td>
					<button type="submit" name="IV" class="btn btn-warning">Ubah</button></td>
				<td>
					<button type="submit" name="d4" class="btn btn-danger">Hapus</button>
				</td>
			</form>
			</tr>

				<?php 
			}
			?>
			</tbody>
		  </table>
	    </div> 
	  </div>			      
	 </div>
	 <div class="card">
	     <form method="post" action="script/empty.php">
	      <div class="card-header d-flex">
	        <a class="card-link" data-toggle="collapse" href="#collapse-5">
	        	<i class="fas fa-bars p-2"></i>
	        	<i class=" p-2 font-weight-bold" style=" font-size: 20px;">SERANG</i>
	        	<a class="p-2 ml-auto" href="script/dnldSRG.php" data-toggle="tooltip" title="Download"><i class="fas fa-download"></i></a>
	        	<button type="submit" class="p-2 res btn" name="E" data-toggle="tooltip" title="Kosongkan"><i class="fas fa-recycle" style="font-size: 20px;"></i></button>         
	        </a>
	      </div>
	  </form>
      <div id="collapse-5" class="collapse" data-parent="#accordion">
        <div class="card-body table-responsive">
        	<form method="post" enctype="multipart/form-data" action="script/aplodSRG.php">
			 	<div class="form-row">
				   <div class="col">					     
				      <div class="custom-file">
					    <input type="file" class="custom-file-input" name="file" required="required">
					    <label class="custom-file-label" for="customFile">Pilih File</label>
					  </div>
				    </div>
				    <div class="col">					      
				      <button name="upload" class="btn btn-warning">Upload</button>
				    </div>
				    <div class="col">
				    	<input class="form-control" id="finder" type="text" placeholder="cari">	 	
				    </div>
				</div>
			</form>
         <h4 class="display-5"><a class="p-2" href="tambah.php" ><i class="fas fa-plus"> Tambah</i></a></h4>
          <table class="table table-hover" id="">
		    <thead class="thead-dark">
				<tr>
					<th>NO</th>
					<th>Dari</th>
					<th>Tujuan</th>
					<th>1Kg</th>
					<th>2Kg</th>
					<th>Kg 3-10</th>
					<th>Minim 3-10</th>
					<th>L100</th>
					<th>kubikasi</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<?php 				
			$no4 = 1;
			$datac = mysqli_query($koneksi,"select * from serang");
			while($dad = mysqli_fetch_array($datac)){
				?>
			<tbody id="table4">
			<tr>
				<form method="post" action="script/updet.php">
				<td><?php echo $no4++; ?></td>
				<td><input type="hidden" name="id" class="form-control" value="<?php echo $dad['id']; ?>">
					<?php echo $dad['Dari'];?></td>
				<td><?php echo $dad['Tujuan']; ?></td>
				<td><input class="form-control" name="f1" value="<?php echo $dad['fix1']; ?>"></td>
				<td><input class="form-control" name="f2" value="<?php echo $dad['fix2']; ?>"></td>
				<td><input class="form-control" name="kg1" value="<?php echo $dad['Kg3']; ?>"></td>
				<td><input class="form-control" name="minim" value="<?php echo $dad['minim3']; ?>"></td>
				<td><input class="form-control" name="l100" value="<?php echo $dad['L100']; ?>"></td>
				<td><input class="form-control" name="k3" value="<?php echo $dad['kubikasi']; ?>"></td>
				<td>
					<button class="btn btn-warning" name="V" type="submit">Ubah</button></td>
				<td>
					<button class="btn btn-danger" name="d5" type="submit">Hapus</button>
				</td>
			</form>
			</tr>

				<?php 
			}
			?>
			</tbody>
		  </table>
	    </div>
	  </div>			      
	 </div>
	 </div><br/>
	  <div class="row"><br/>
	  	<div class="col-md-12">
		  	<h2 class="display-4">Daftar peta</h2>
		  	<form>
			  	<div class="form -row">
				  	<input class="form-control" id="finders" type="text" style="width:50%;"placeholder="cari">
			  </div>
		  </form>
	  </div>
	  	<div class="card-body table-responsive">	  	
            <table class="table table-hover" id="JADETABEK">
			    <thead class="thead-dark">
			      <tr>
			        <th>No. </th>
			        <th>Cabang</th>
			        <th>Alamat</th>
			        <th>No.Tlp</th>
			        <th>Penerimaan</th>
			        <th>Pengiriman</th>
			        <th>Peta</th>
			        <th></th>
					<th></th>
			      </tr>
			    </thead>
			    <?php 
					$no = 1;
					$data = mysqli_query($koneksi,"select * from peta");
					while($d = mysqli_fetch_array($data)){
						?>
			    <tbody id="table5">		    	
			      <tr>
			        <td><?php echo $no++; ?></td>
			        <td><?php echo $d['cabang']; ?></td>
			        <td><textarea class="form-control" name=""><?php echo $d['alamat']; ?></textarea></td>
			        <td><textarea class="form-control" name=""><?php echo $d['tlp']; ?></textarea></td>
			        <td><i class="fas fa-<?php echo $d['terima']; ?>" style="color: #0067B4;"></i></td>
			        <td><i class="fas fa-<?php echo $d['kirim']; ?>" style="color: #0067B4;"></i></td>
			        <td><a href="<?php echo $d['link']; ?>" target=""><i class="fas fa-globe-asia" ></i></a></td>
			        <td>
						<a href="script/editpeta.php?id=<?php echo $d['id']; ?>"><i class="fas fa-pencil-alt"></i></a></td>
					<td>
						<a href="script/delpta.php?id=<?php echo $d['id']; ?>"><i class="fas fa-trash"></i></a>
					</td>
			      </tr>					      
			    </tbody>
			    <?php
			}
			    ?>
			</table>
	    </div>
	  </div>
	</div>
</div>
</body>
<footer>
<script>
	// Add the following code if you want the name of the file appear on select
	$(".custom-file-input").on("change", function() {
	  var fileName = $(this).val().split("\\").pop();
	  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});

	$(document).ready(function(){
	  $("#cari").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("table tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});	

	$(document).ready(function(){
	  $("#find").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#table1 tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});

	$(document).ready(function(){
	  $("#finds").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#table2 tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});

	$(document).ready(function(){
	  $("#finding").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#table3 tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});

	$(document).ready(function(){
	  $("#finder").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#table4 tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});

	$(document).ready(function(){
	  $("#finders").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#table5 tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});

	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();   
	});

	</script> 
</footer>
</html>