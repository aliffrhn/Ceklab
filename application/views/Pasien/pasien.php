<!DOCTYPE html>
<html>
<head>
	<title>ceklab - Pasien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/pasien.css');?>"> 
        <script type="text/javascript" src="<?php echo base_url('assets/script/pasien.js');?>"></script>   
        <!-- Bootstrap css-->
		<link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css')?>" />
		
		<!-- js -->
		<script src="<?php echo base_url('./assets/js/jquery-3.4.1.js') ?>"></script>
		<script src="<?php echo base_url('./assets/js/popper.js') ?>"></script>
		<script src="<?php echo base_url('./assets/js/bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js');?>"></script>
</head>
<body>
	<main>
		<div class="col-sm-10">
			<div class="container-sm mt-4 mb-4 border">
				<div class="col-sm mt-3 ml-3 mb-3">
					<div class="input-title">
						<h3>INPUT DATA PASIEN</h3>
					</div>
				</div>
				<form class="form-horizontal" action="<?php echo base_url('/Pasien/form_pasien');?>" method="POST">
					<div class="form-group">
						<div class="col-md-12">
							<select class="form-control" type="jenisKelamin" class="dropdown" id="jk" name="gender">
								<option selected>Choose Gender...</option>
								<option value="L">Laki - laki</option>
								<option value="P">Perempuan</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
						 	<input type="nama" class="form-control" id="nama" placeholder="Nama Lengkap" name="pasien" required>
						 </div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
						 	<input type="umur" class="form-control" id="umur" placeholder="Umur" name="umur" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
						 	<input type="noTelp" class="form-control" id="noTelp" placeholder="No. Telepon / Hp" name="phone_number" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
						 	<input type="alamat" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<div class="row">
      							<div class="col">
        						 	<input type="date" class="form-control" id="tgl" name="tanggal" placeholder="Tanggal"  required>
      							</div>
      							<div class="col">
        							<input type="time" class="form-control" name="waktu" placeholder="Waktu" required>
      							</div>
    						</div>
    					</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<textarea cols="140" rows="3" type="keterangan" class="form-control" id="ket" placeholder="Keterangan..." name="keterangan"></textarea>
						</div>
					</div>
					<div class="form-group">
						  <input type="hidden" id="periksaId" name="periksaId" value="<?php echo $paket_periksa_id ?>" required>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary">Pesan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>
</body>
</html>