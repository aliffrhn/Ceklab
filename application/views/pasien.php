<!DOCTYPE html>
<html>
<head>
	<title>ceklab - Pasien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="assets/css/pasien.css"> 
        <script type="text/javascript" src="assets/script/pasien.js"></script>   
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="assets/script/jquery.js"></script>
        <script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/script/popper.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
</head>
<body>
	<main>
		<div class="col-sm-10">
			<div class="container-sm mt-4 mb-4 border">
				<div class="col-sm mt-3 ml-3 mb-3">
					<div class="input-title">
						<h6>INPUT DATA PASIEN</h6>
					</div>
				</div>
				<form class="form-horizontal" action="/action_page.php">
					<div class="form-group">
						<div class="col-md-12">
							<select style="width:1020px" type="jenisKelamin" class="dropdown" id="jk" name="jenisKelamin">
								<option value="lk">Laki - laki</option>
								<option value="pr">Perempuan</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
						 	<input type="nama" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama">
						 </div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
						 	<input type="umur" class="form-control" id="umur" placeholder="Umur" name="Umur">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
						 	<input type="noTelp" class="form-control" id="noTelp" placeholder="No. Telepon / Hp" name="noTelp">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<div class="btn-group btn-block">
    							<button type="button" class="btn btn-outline-success">Home Service</button>
    							<button type="button" class="btn btn-success">Tidak</button>
  							</div>
  						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12">
							<textarea cols="142" rows="3" type="keterangan" id="ket" placeholder="Keterangan..." name="keterangan"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<button type="button" class="btn btn-primary">Pesan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>
</body>
</html>