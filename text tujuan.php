<div class="card">
	      <div class="card-header d-flex">
	        <a class="card-link" data-toggle="collapse" href="#collapse-6">
	        	<i class="fas fa-bars p-2"></i>
	        	<i class=" p-2 font-weight-bold" style=" font-size: 20px;">Tujuan</i>
	        	<a class="p-2 ml-auto" href="script/dnldSRG.php" data-toggle="tooltip" title="Download"><i class="fas fa-download"></i></a>
	        	<a class="p-2 res" href="script/empty5.php" data-toggle="tooltip" title="Kosongkan"><i class="fas fa-recycle" style="font-size: 20px;"></i></a>         
	        </a>
	      </div>
      <div id="collapse-6" class="collapse" data-parent="#accordion">
        <div class="card-body table-responsive">
        	<form method="post" enctype="multipart/form-data" action="script/aplodtujuan.php">
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
				    	<input class="form-control" id="findere" type="text" placeholder="cari">	 	
				    </div>
				</div>
			</form>
         <h4 class="display-5"><a class="p-2" href="tambah.php" ><i class="fas fa-plus"> Tambah</i></a></h4>
          <table class="table table-hover table-responsive" id="">
		    <thead class="thead-dark">
				<tr class="d-flex">
					<th>NO</th>
					<th class="col-1">Value jabar</th>
					<th class="col-1">Dari jabar</th>
					<th class="col-1">value jateng</th>
					<th class="col-2">Dari jateng</th>
					<th class="col-1">value jatim</th>
					<th class="col-1">Dari jatim</th>
					<th class="col-1">value bali</th>
					<th class="col-1">Dari Bali</th>
					<th class="col-1">value sumatera</th>
					<th class="col-1">Dari sumatera</th>
					<th class="col-1">val jabar</th>
					<th class="col-1">Tujuan Jabar</th>
					<th class="col-2">val Jateng</th>
					<th class="col-2">Tujuan Jateng</th>
					<th class="col-1">val Jatim</th>
					<th class="col-1">Tujuan Jatim</th>
					<th class="col-1">val Bali</th>
					<th class="col-1">Tujuan Bali</th>
					<th class="col-1">val Sumatera</th>
					<th class="col-1">Tujuan Sumatera</th>
				</tr>
			</thead>
			<?php 				
			$no4 = 1;
			$datac = mysqli_query($koneksi,"select * from tujuan");
			while($dad = mysqli_fetch_array($datac)){
				?>
			<tbody id="table4">
			<tr class="d-flex">
				<form method="post" action="script/updet.php">
				<td ><?php echo $no4++; ?></td>
				<td class="col-1"><input type="hidden" name="id" class="form-control" value="<?php echo $dad['id']; ?>">
								  <input class="form-control" name="" value="<?php echo $dad['valueD1'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['Dari1']; ?>"></td>
				<td class="col-1"><input class="form-control" name="f1" value="<?php echo $dad['valueD2']; ?>"></td>
				<td class="col-2"><input class="form-control" name="f2" value="<?php echo $dad['Dari2']; ?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['valueD3'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['Dari3'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['valueD4'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['Dari4'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['valueD5'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['Dari5'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['valuejabar'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['jabar'];?>"></td>
				<td class="col-2"><input class="form-control" name="" value="<?php echo $dad['valuejateng'];?>"></td>
				<td class="col-2"><input class="form-control" name="" value="<?php echo $dad['jateng'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['valuejatim'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['jatim'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['valuebali'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['bali'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['valueSMT'];?>"></td>
				<td class="col-1"><input class="form-control" name="" value="<?php echo $dad['sumatra'];?>"></td>
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
	 </div>