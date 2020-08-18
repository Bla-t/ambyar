<!DOCTYPE html>
<html>
	<head>
		<title>Cek Lokasi</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">	
	   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	 	<style type="text/css">
	 		@media (min-width: 576px) and (max-width: 767.98px) { ... }
	 	</style>
	  </head>
	<body style="background:url(indo.png)fixed;">

		<!-- Pemetaan -->
		<div class="container">	
			<div class="col-md-12">		
					<h2 class="display-4" style="text-align: center; color: #001C50;">Peta Lokasi</h2>
					<h4 class="display-5" style="text-align: center; color: #001C50;">Denah Lokasi Agen, Cabang, Pengepul PT Baraka Sarana Tama</h4><br/>
				<div class="row">
					<div class="embed-responsive embed-responsive-21by9 shadow-lg p-3 rounded">
					 <iframe class="embed-responsive-item" src="openstreetmap.html"></iframe>
					</div>
				</div>
				<div class="row justify-content-center">
					 <h2 class="display-5 " style="color: #001C50; padding-top: 50px;" >Informasi Detail Perusahaan</h2>				
				</div><br/>
			</div>
		</div>
		<!-- Tabel Alamat -->
		<div class="container " style="padding-bottom: 80px;">
			<div id="accordion">
			    <div class="card">
			      <div class="card-header">
			        <a class="card-link" data-toggle="collapse" href="#collapse-1">
			        	<i class="fas fa-bars" style="color: #001C50;" >&nbsp;  &nbsp; JABODETABEK</i>         
			        </a>
			      </div>
			      <div id="collapse-1" class="collapse" data-parent="#accordion">
			        <div class="card-body table-responsive">
			          <table class="table table-hover" id="JADETABEK">
					    <thead class="thead-dark">
					      <tr class="d-flex">
					        <th class="col-1">No. </th>
					        <th class="col-2">Cabang</th>
					        <th class="col-6">Alamat</th>
					        <th class="col-3">No.Tlp</th>
					        <th class="col-2">Penerimaan</th>
					        <th class="col-2">Pengiriman</th>
					        <th class="col-1">Lihat Peta</th>
					      </tr>
					    </thead>
					    <tbody>
				    	<?php 
							include 'kone.php';
							$no = 1;
							$data = mysqli_query($koneksi,"select * from peta");
							while($d = mysqli_fetch_array($data)){
								?>
					      <tr class="d-flex">
					        <td class="col-1" style="text-align: center;"><?php echo $no++; ?></td>
					        <td class="col-2"><?php echo $d['cabang']; ?></td>
					        <td class="col-6"><?php echo $d['alamat']; ?></td>
					        <td class="col-3"><?php echo $d['tlp']; ?></td>
					        <td class="col-2"><i class="fas fa-<?php echo $d['terima']; ?>" style="color: #0067B4;"></i></td>
					        <td class="col-2"><i class="fas fa-<?php echo $d['kirim']; ?>" style="color: #0067B4;"></i></td>
					        <td class="col-1"><a href="<?php echo $d['link']; ?>" target=""><i class="fas fa-globe-asia" ></i></a></td>
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
			      <div class="card-header">
			        <a class="collapsed card-link" data-toggle="collapse" href="#collapse-2">
			        	<i class="fas fa-bars" style="color: #001C50;" >&nbsp;  &nbsp; JAWA BARAT</i>        
			      </a>
			      </div>
			      <div id="collapse-2" class="collapse" data-parent="#accordion">
			        <div class="card-body">
			          <table class="table table-hover" id="jateng">
					    <thead class="thead">
					      <tr>
					        <th>No. </th>
					        <th>Area </th>
					        <th>Cabang</th>
					        <th>Alamat</th>
					        <th>No.Tlp</th>
					        <th>Penerimaan</th>
					        <th>Pengiriman</th>
					        <th>Lihat Peta</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>1</td>
					        <td>Jabar 1</td>
					        <td>Sukabumi</td>
					        <td>Jayaraksa, Kec. Baros, Kota Sukabumi, Jawa Barat </td>
					        <td>-</td>
					        <td><i class="fas fa-check"></i></td>
					        <td><i class="fas fa-times"></i></td>
					        <td><a href="https://www.google.co.id/maps/place/Pt.Baraka+Sarana+Tama/@-6.9511824,106.9284707,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68480a2d8e78c7:0x4491e0ae49f05c15!8m2!3d-6.9511824!4d106.9306594?hl=id" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					      <tr>
					        <td>2</td>
					        <td>Jabar 1</td>
					        <td>Bandung</td>
					        <td>Jl. Cijawura Girang, Sekejati, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286</td>
					        <td>-</td>
					        <td><i class="fas fa-check"></i></td>
					        <td><i class="fas fa-check"></i></td>
					        <td><a href="https://www.google.co.id/maps/place/PT+Baraka+Sarana+Tama+Bandung/@-6.9993984,107.5060797,9z/data=!4m8!1m2!2m1!1sPT.+Baraka+Sarana+Tama+jawa+barat!3m4!1s0x0:0xca2c10e550e68b6f!8m2!3d-6.9429562!4d107.6517677?hl=id" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					      <tr>
					        <td>3</td>
					        <td>Jabar 2</td>
					        <td>Garut</td>
					        <td>no2, Jl. Jendral Sudirman No.2, Kota Kulon, Kec. Garut Kota, Kabupaten Garut, Jawa Barat 44112</td>
					        <td>-</td>
					        <td><i class="fas fa-times"></i></td>
					        <td><i class="fas fa-check"></i></td>
					        <td><a href="https://www.google.com/maps/place/BARAKA+SARANA+TAMA+KREKOT/@-6.2357285,106.7900719,12z/data=!4m19!1m13!4m12!1m4!2m2!1d106.9220704!2d-6.3060074!4e1!1m6!1m2!1s0x2e69f5db67a1f309:0xc4ca84ac09f75d36!2sBARAKA+SARANA+TAMA+KREKOT,+Jl.+Krekot+Jaya+Blok+C2+No.1C,+RT.1%2FRW.7,+Pasar+Baru,+Sawah+Besar,+Central+Jakarta+City,+Jakarta+11160!2m2!1d106.828065!2d-6.1614912!3m4!1s0x2e69f5db67a1f309:0xc4ca84ac09f75d36!8m2!3d-6.1614912!4d106.828065" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					    </tbody>
					</table>
			        </div>
			      </div>
			    </div>
			    <div class="card">
			      <div class="card-header">
			        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTWO2">
			        	<i class="fas fa-bars" style="color: #001C50;" >&nbsp;  &nbsp; JAWA TENGAH</i>        
				    </a>
			      </div>
			      <div id="collapseTWO2" class="collapse" data-parent="#accordion">
			        <div class="card-body">
			          <table class="table table-hover" id="jateng">
					    <thead class="thead">
					      <tr>
					        <th>No. </th>
					        <th>Area </th>
					        <th>Cabang</th>
					        <th>Alamat</th>
					        <th>No.Tlp</th>
					        <th>Penerimaan</th>
					        <th>Pengiriman</th>
					        <th>Lihat Peta</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td> 1</td>
					        <td>Jateng 1</td>
					        <td>Tegal</td>
					        <td>Pesurungan Lor, Kec. Margadana, Kota Tegal, Jawa Tengah 52147</td>
					        <td>+6282119595911</td>
					        <td><i class="fas fa-check" style="color:#005BDE;"></i></td>
					        <td><i class="fas fa-check" style="color:#005BDE;"></i></td>
					        <td><a href="https://www.google.co.id/maps/place/PT+Baraka+Sarana+Tama/@-7.0874089,108.6975456,9z/data=!4m8!1m2!2m1!1sbaraka+sarana+tama+jawa+tengah!3m4!1s0x0:0xa91c0320d9b983a5!8m2!3d-6.8642236!4d109.1079712?hl=id" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					      <tr>
					        <td>2</td>
					        <td>Jateng 1</td>
					        <td>Banyumas</td>
					        <td> Jl. Patikraja - Purwokerto, Sidabowa, Kec. Patikraja, Kabupaten Banyumas, Jawa Tengah 53171</td>
					        <td>+6285218756887</td>
					        <td><i class="fas fa-check" style="color:#005BDE;"></i></td>
					        <td><i class="fas fa-check" style="color:#005BDE;"></i></td>
					        <td><a href="https://www.google.co.id/maps/place/PT+Baraka+Sarana+Tama/@-7.0874089,108.6975456,9z/data=!4m8!1m2!2m1!1sbaraka+sarana+tama+jawa+tengah!3m4!1s0x0:0x40b54fca72e4c147!8m2!3d-7.4549008!4d109.2171478?hl=id" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					      <tr>
					        <td>3</td>
					        <td>Jateng 1</td>
					        <td>Pemalang</td>
					        <td>Jl. Perintis Kemerdekaan No.50, Pekandangan, Widodaren, Kec. Petarukan, Kabupaten Pemalang, Jawa Tengah 52362</td>
					        <td>+6281298466147</td>
					        <td><i class="fas fa-check" style="color:#005BDE;"></i></td>
					        <td><i class="fas fa-check" style="color:#005BDE;"></i></td>
					        <td><a href="https://www.google.co.id/maps/place/Baraka+Sarana+Tama+Cab.+Pemalang/@-7.0874089,108.6975456,9z/data=!4m8!1m2!2m1!1sbaraka+sarana+tama+jawa+tengah!3m4!1s0x0:0x9c41786ab1dd4cdd!8m2!3d-6.9010353!4d109.4936943?hl=id" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					    </tbody>
					</table>
			        </div>
			      </div>
			    </div>
			    <div class="card">
			      <div class="card-header">
			        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
			         <i class="fas fa-bars" style="color: #001C50;" >&nbsp;  &nbsp; JAWA TIMUR</i>
			        </a>
			      </div>
			      <div id="collapseThree" class="collapse" data-parent="#accordion">
			        <div class="card-body">
			          <table class="table table-hover" id="jatim" >
					    <thead class="thead">
					      <tr>
					        <th>No. </th>
					        <th>Area </th>
					        <th>Cabang</th>
					        <th>Alamat</th>
					        <th>No.Tlp</th>
					        <th>Penerimaan</th>
					        <th>Pengiriman</th>
					        <th>Lihat Peta</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>1</td>
					        <td>Jatim 1</td>
					        <td>Madiun </td>
					        <td>Jl. Nasional 20, Kembangan, Garon, Balerejo, Madiun, Jawa Timur 63152 </td>
					        <td>+6281230572717</td>
					        <td><i class="fas fa-check"></i></td>
					        <td><i class="fas fa-times" style= "color: #EF2F00;"></i></td>
					        <td><a href="https://www.google.com/maps/place/Baraka+Sarana+Tama+Madiun/@-7.5564604,111.5596577,17z/data=!3m1!4b1!4m5!3m4!1s0x2e79c175d06ee9a1:0xe6e6376d1ae36270!8m2!3d-7.5564604!4d111.5618464" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					      <tr>
					        <td>2</td>
					        <td>Jatim 1</td>
					        <td>Ponorogo</td>
					        <td> Jl. Raya Ponorogo - Madiun No.255, Banyudono, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur 63411</td>
					        <td>+6281314730086</td>
					        <td><i class="fas fa-check"></i></td>
					        <td><i class="fas fa-check"></i></td>
					        <td><a href="https://www.google.co.id/maps/place/PT.+BARAKA+SARANA+TAMA/@-7.87319,110.8628447,9z/data=!4m8!1m2!2m1!1sbaraka+sarana+tama+jawa+tengah!3m4!1s0x0:0x510d7fc85cc6e578!8m2!3d-7.8591306!4d111.4691734?hl=id" ></i></a></td>
					      </tr>
					      <tr>
					        <td>3</td>
					        <td>Jatim 1</td>
					        <td>Bojonegoro</td>
					        <td>Jl. Babat - Bojonegoro No.16, Kp. Baru, Sukorejo, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115</td>
					        <td>+6282338440206</td>
					        <td><i class="fas fa-times"></i></td>
					        <td><i class="fas fa-check"></i></td>
					        <td><a href="https://www.google.com/maps/place/Baraka+Sarana+Tama+Bojonegoro/@-7.1649162,111.8856102,17z/data=!3m1!4b1!4m5!3m4!1s0x2e77811b383b5fe3:0x2b29ba8389241edc!8m2!3d-7.1649162!4d111.8877989" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					    </tbody>
					</table>
			        </div>
			      </div>
			    </div>
			    <div class="card">
			      <div class="card-header">
			        <a class="collapsed card-link" data-toggle="collapse" href="#collapse-5">
			         <i class="fas fa-bars" style="color: #001C50;" >&nbsp;  &nbsp; BALI</i>
			        </a>
			      </div>
			      <div id="collapse-5" class="collapse" data-parent="#accordion">
			        <div class="card-body">
			          <table class="table table-hover" id="jatim" >
					    <thead class="thead">
					      <tr>
					        <th>No. </th>
					        <th>Area </th>
					        <th>Cabang</th>
					        <th>Alamat</th>
					        <th>No.Tlp</th>
					        <th>Penerimaan</th>
					        <th>Pengiriman</th>
					        <th>Lihat Peta</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>1</td>
					        <td>Bali</td>
					        <td>Denpasar </td>
					        <td>Pemecutan Kaja, Kec. Denpasar Utara, Kota Denpasar, Bali 80111 </td>
					        <td>+6281236967575</td>
					        <td><i class="fas fa-check"></i></td>
					        <td><i class="fas fa-times"></i></td>
					        <td><a href="https://www.google.com/maps/dir/-6.3060074,106.9220704/Baraka+Sarana+Tama,+Jalan+Raya+Setu,+Gg.+Sejahtera+No.+21,+Cipayung,+RT.5%2FRW.1,+Setu,+Kec.+Cipayung,+Kota+Jakarta+Timur,+Daerah+Khusus+Ibukota+Jakarta+13880/@-6.3069762,106.9148469,16z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e6992b2e8a75761:0x62db0969ee82f164!2m2!1d106.9140647!2d-6.3085467" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					      <tr>
					        <td>2</td>
					        <td>Depok</td>
					        <td>Depok</td>
					        <td> Jl. Raya Sawangan No.36, Rangkapan Jaya, Kec. Pancoran Mas,<br/> Kota Depok, Jawa Barat 16435</td>
					        <td></td>
					        <td><i class="fas fa-check"></i></td>
					        <td><i class="fas fa-check"></i></td>
					        <td><a href="https://www.google.com/maps/dir/-6.3060074,106.9220704/baraka+sarana+tama/@-6.3456801,106.7872398,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e69e944ede7a619:0xa7236b421f0999ee!2m2!1d106.7909453!2d-6.3941045" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					      <tr>
					        <td>3</td>
					        <td>Jakarta Pusat</td>
					        <td>Krekot</td>
					        <td>Jl. Krekot Jaya Blok C2 No.1C, RT.1/RW.7, Ps. Baru, Kecamatan Sawah Besar,<br/> Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 11160</td>
					        <td></td>
					        <td><i class="fas fa-times"></i></td>
					        <td><i class="fas fa-check"></i></td>
					        <td><a href="https://www.google.com/maps/place/BARAKA+SARANA+TAMA+KREKOT/@-6.2357285,106.7900719,12z/data=!4m19!1m13!4m12!1m4!2m2!1d106.9220704!2d-6.3060074!4e1!1m6!1m2!1s0x2e69f5db67a1f309:0xc4ca84ac09f75d36!2sBARAKA+SARANA+TAMA+KREKOT,+Jl.+Krekot+Jaya+Blok+C2+No.1C,+RT.1%2FRW.7,+Pasar+Baru,+Sawah+Besar,+Central+Jakarta+City,+Jakarta+11160!2m2!1d106.828065!2d-6.1614912!3m4!1s0x2e69f5db67a1f309:0xc4ca84ac09f75d36!8m2!3d-6.1614912!4d106.828065" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					    </tbody>
					</table>
			        </div>
			      </div>
			    </div>
			    <div class="card">
			      <div class="card-header">
			        <a class="collapsed card-link" data-toggle="collapse" href="#collapse-6">
			         <i class="fas fa-bars justify-content-end" style="color: #001C50;" > &nbsp;  &nbsp;SUMATERA</i>
			        </a>
			      </div>
			      <div id="collapse-6" class="collapse" data-parent="#accordion">
			        <div class="card-body">
			          <table class="table table-hover" id="jatim" >
					    <thead class="thead">
					      <tr>
					        <th>No. </th>
					        <th>Area </th>
					        <th>Cabang</th>
					        <th>Alamat</th>
					        <th>No.Tlp</th>
					        <th>Penerimaan</th>
					        <th>Pengiriman</th>
					        <th>Lihat Peta</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>1</td>
					        <td>Bandar Lampung</td>
					        <td>Bandar Lampung </td>
					        <td>Ruko bukit Kencana No.9, Kencana, Kec. Sukabumi, Kota Bandar Lampung, Lampung</td>
					        <td>+6285291758038</td>
					        <td><i class="fas fa-check"></i></td>
					        <td><i class="fas fa-times"></i></td>
					        <td><a href="https://www.google.com/maps/place/PT.+BARAKA+SARANA+TAMA/@-5.3921866,105.2668078,14z/data=!4m5!3m4!1s0x2e40db0e579f8443:0xfa6c9e1c3aa342a5!8m2!3d-5.392578!4d105.2884408" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					      <tr>
					        <td>2</td>
					        <td>Bandar lampung</td>
					        <td>Metro</td>
					        <td> Jl. Kenanga No.2, Mulyojati, Kec. Metro Bar., Kota Metro, Lampung 34121</td>
					        <td>+6285279028598</td>
					        <td><i class="fas fa-check"></i></td>
					        <td><i class="fas fa-check"></i></td>
					        <td><a href="https://www.google.com/maps/dir/-6.3060074,106.9220704/baraka+sarana+tama/@-6.3456801,106.7872398,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e69e944ede7a619:0xa7236b421f0999ee!2m2!1d106.7909453!2d-6.3941045" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>
					      <tr>
					        <td>3</td>
					        <td>Palembang</td>
					        <td>Palembang</td>
					        <td>Jl. Alamsyah Ratu Prawiranegara No.39a, Bukit Lama, Kec. Ilir Bar. I, Kota Palembang, Sumatera Selatan 30138</td>
					        <td>+6285357257710</td>
					        <td><i class="fas fa-times"></i></td>
					        <td><i class="fas fa-check"></i></td>
					        <td><a href="https://www.google.com/maps/place/BARAKA+SARANA+TAMA+KREKOT/@-6.2357285,106.7900719,12z/data=!4m19!1m13!4m12!1m4!2m2!1d106.9220704!2d-6.3060074!4e1!1m6!1m2!1s0x2e69f5db67a1f309:0xc4ca84ac09f75d36!2sBARAKA+SARANA+TAMA+KREKOT,+Jl.+Krekot+Jaya+Blok+C2+No.1C,+RT.1%2FRW.7,+Pasar+Baru,+Sawah+Besar,+Central+Jakarta+City,+Jakarta+11160!2m2!1d106.828065!2d-6.1614912!3m4!1s0x2e69f5db67a1f309:0xc4ca84ac09f75d36!8m2!3d-6.1614912!4d106.828065" target=""><i class="fas fa-globe-asia" ></i></a></td>
					      </tr>

					    </tbody>
					</table>
			        </div>
			      </div>
			    </div>	    
		    </div>
		</div>
	 </body>
</html>