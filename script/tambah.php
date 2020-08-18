<!DOCTYPE html>
<html>
<head>
	<title>tambah</title>
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
	  </div>
	  <div class="row">
		<div class="col"><h2>Tambah Data Harga</h2></div>
	    <div class="col"><h2>Tambah Lokasi Peta</h2></div>
	  </div><br/>	     
		<div class="row">
		  <div class="col">
			<form method="post" action="aksi+.php" class="needs-validation" novalidate>
			  <div class="form-row">
			   <div class="col">
			      <label for="1">Dari:</label>
			      <input type="text" class="form-control" id="1" name="Dari" required>
			    </div>
			    <div class="col">
			      <label for="2">Tujuan:</label>
			      <input type="text" class="form-control" id="2" name="Tujuan" required>
			    </div></div>
			    <div class="form-row">
			    <div class="col">
			      <label for="3">fix1:</label>
			      <input type="number" class="form-control" id="3" name="fix1" required>
			    </div>
			    <div class="col">
			      <label for="4">fix2:</label>
			      <input type="number" class="form-control" id="4" name="fix2" required>
			    </div></div>
			    <div class="form-row">
			    <div class="col">
			      <label for="5">minim 3-10:</label>
			      <input type="number" class="form-control" id="5" name="minim3-10" required>
			    </div>
			    <div class="col">
			      <label for="6">Kg 3-10:</label>
			      <input type="number" class="form-control" id="6" name="Kg3-10" required>
			    </div></div>
			    <div class="form-row">
			    <div class="col">
			      <label for="7">minim 11-100:</label>
			      <input type="number" class="form-control" id="7" name="minim11-100" required>
			    </div>
			    <div class="col">
			      <label for="8">Kg 11-100:</label>
			      <input type="number" class="form-control" id="8" name="Kg11-100" required>
			    </div></div>
			    <div class="form-row">
			    <div class="col">
			      <label for="9">> 100:</label>
			      <input type="number" class="form-control" id="9" name="Lebih100" required>
			    </div>
			    <div class="col">
			      <label for="10">Kubikasi:</label>
			      <input type="number" class="form-control" id="10" name="Kubikasi"required>
			    </div></div><br/>
			    <button type="submit" class="btn btn-primary">Simpen</button>
			</form>
		  </div>
		  <div class="col">
		  	<form method="post" action="aksipeta.php" class="needs-validation" novalidate>
			  <div class="form-row">
			   <div class="col">
			      <label for="1">Cabang:</label>
			      <input type="text" class="form-control" id="1" name="Cabang" required>
			    </div>
			    <div class="col">
			      <label for="2">No.tlp:</label>
			      <input type="text" class="form-control" id="2" name="tlp" required>
			    </div></div>
			    <div class="form-row">
			   <div class="col">
			      <label for="11">kirim:</label>
			      <input type="text" class="form-control" id="11" name="ter" required>
			    </div>
			    <div class="col">
			      <label for="22">terima:</label>
			      <input type="text" class="form-control" id="22" name="kir" required>
			    </div></div>
			    <div class="form-group">
			      <label for="3">Alamat:</label>
			      <textarea type="text" class="form-control" id="3" name="almt" required></textarea>
			      <label for="4">Peta:</label>
			      <textarea type="text" class="form-control" id="4" name="pta" required></textarea>
			    </div><br/>			    
			    <button type="submit" class="btn btn-primary">Simpen</button>
			</form>
		  </div>
		</div>
	</div>
  </div>
</div>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>