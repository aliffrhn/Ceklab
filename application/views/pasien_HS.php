<!DOCTYPE html>
<html>
<head>
	<title>ceklab - Pasien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/pasien.css');?>"> 
        <script type="text/javascript" src="<?php echo base_url('assets/script/pasien.js');?>"></script>   
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
        <script type="text/javascript" src="<?php echo base_url('assets/script/jquery.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/script/popper.js');?>"></script>
        <script src="<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js');?>"></script>
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
				<form class="form-horizontal" action="<?php echo base_url('index.php/PasienHSC/form_pasien/');?>" method="POST">
					<div class="form-group">
						<div class="col-md-12">
							<select style="width:1005px" type="jenisKelamin" class="dropdown" id="jk" name="gender">
								<option value="lk">Laki - laki</option>
								<option value="pr">Perempuan</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
						 	<input type="nama" class="form-control" id="nama" placeholder="Nama Lengkap" name="pasien">
						 </div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
						 	<input type="umur" class="form-control" id="umur" placeholder="Umur" name="umur">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
						 	<input type="noTelp" class="form-control" id="noTelp" placeholder="No. Telepon / Hp" name="phone_number">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<div class="btn-group btn-block">
    							<button type="button" class="btn btn-success">Home Service</button>
    							<button type="button" class="btn btn-outline-success">Tidak</button>
  							</div>
  						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
						 	<input type="alamat" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<div class="row">
      							<div class="col">
        						 	<input style="width: 500px" type="date" id="tgl" name="tanggal" placeholder="Tanggal">
      							</div>
      							<div class="col">
        							<input type="waktu" class="form-control" placeholder="Waktu" name="waktu">
      							</div>
    						</div>
    					</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<textarea cols="140" rows="3" type="keterangan" id="ket" placeholder="Keterangan..." name="keterangan"></textarea>
						</div>
					</div>
					<div class="form-group">
						  <input type="hidden" id="periksaId" name="periksaId" value="<?php echo $paket_periksa_id ?>">
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