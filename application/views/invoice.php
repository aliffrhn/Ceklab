<!DOCTYPE html>
<html>
<head>
	
	<title>ceklab - Invoice</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/invoice.css');?>"> 
        <script type="text/javascript" src="<?php echo base_url('assets/script/invoice.js');?>"></script>   
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
        <script type="text/javascript" src="<?php echo base_url('assets/script/jquery.js');?>"></script>
        <script type="text/javascript" src="<? echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<? echo base_url('assets/script/popper.js');?>"></script>
        <script src="<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js');?>"></script>
</head>
<body>
	<div class="col-xl-12">
		<div class="row">
	  		<div class="col-md-8">
	  			<div class="container-md mt-3 border">
	  				<div class="container pt-3">
	  					<div class="row">
			  				<div class="col-xs-12">
			  					<div class="invoice-title">
			    					<img src="assets/picture/asset-0.png" class="center float-left img1" alt="ceklab">
			    				</div>
			    				<hr>
			    				<div class="card-deck">
			                		<div class="card bg-plain border-0">
			                    		<div class="card-body text-left">
			                        		<p class="card-text"><strong>Kode       :</strong> <?php echo $hasil['kode_transaksi']; ?></p>
			                        		<p class="card-text"><strong>Tanggal    :</strong> <?php echo $hasil['tanggal']; ?></p>
			                        		<p class="card-text"><strong>Paket      :</strong> <?php echo $hasil['judul']; ?></p>
			                    		</div>
			                		</div>
			                		<div class="card bg-plain border-0">
			                    		<div class="card-body text-left">
			                        		<p class="card-text"><strong>Pasien         :</strong> <?php echo $hasil['pasien']; ?> </p>
			                        		<p class="card-text"><strong>Umur           :</strong> <?php echo $hasil['umur']; ?></p>
			                         		<p class="card-text"><strong>JK            :</strong> <?php echo $hasil['gender']; ?></p>
			                          		<p class="card-text"><strong>No. Telepon  :</strong> <?php echo $hasil['phone_number']; ?></p>
			                    		</div>
			                		</div>
			                		<div class="card bg-plain border-0">
			                    		<div class="card-body text-left">
			                        		<p class="card-text"><strong>Lab            :</strong> <?php echo $hasil['nama_vendor']; ?></p>
			                         		<p class="card-text"><strong>Kota          :</strong> <?php echo $hasil['nama_kota']; ?></p>
			                          		<p class="card-text"><strong>Pemesan      :</strong> <?php echo $hasil['username']; ?></p>
			                           		<p class="card-text"><strong>Keterangan  :</strong> <?php echo $hasil['keterangan']; ?></p>

			                    		</div>
			                		</div>
			            		</div>
			  				</div>

	  				 		<!-- Table -->

			    	    	<div class="row">
			    				<div class="col">
			    				
			    				</div>
			    				<div class="col-xs-6 text-right">
			    				
			    				</div>
			    			</div>
	    				</div>
	    			</div>

			    	<div class="row">
			    		<div class="col-md-12">
			    			<div class="panel panel-default panel-summary">
			    				<div class="panel-heading">
			    					<h4 class="panel-title"><strong>Order summary</strong></h4>
			    					<div></div>
			    				</div>
			    				<div class="panel-body">
			    					<div class="table-responsive" style="width: 132%">
			    						<table class="table table-condensed table-striped" style="width: 75%">
			    							<thead>
			                                	<tr>
			        								<th style="width: 10%"><strong>No.</strong></th>
			        								<th class="text-center" style="width: 32.5%"><strong>Periksa</strong></th>
			        								<th class="text-center" style="width: 32.5%"><strong>Harga Perkiraan</strong></th>
			                                	</tr>
			    							</thead>
			    							<tbody>
			    								<!-- foreach ($order->lineItems as $line) or some such thing here -->

				    								<?php 
				    									/*$i = 1;
				    									foreach ($transaksi as $data) {}
				    									
				    									print_r (explode("|",$hasil[0]['nama_pemeriksaan']));
				    									var_dump($hasil);*/
				    								?>
					    							<tr>
					    								<td>1</td>
					    								<td class="text-center">DARAH LENGKAP + LED</td>
					    								<td class="text-center"> </td>
					    								
					    							</tr>
					                                <tr>
					        							<td>2</td>
					    								<td class="text-center">THORAX PA</td>
					    								<td class="text-center"> </td>
					    								
					    							</tr>
					                                <tr>
					            						<td> </td>
					    								<td class="text-center"><strong>Total</strong></td>
					    								<td class="text-center"><strong>Rp 448.000</strong></td>
					    							</tr>
			    							</tbody>
			    						</table>
			    					</div>
			    				</div>
			    				<div class="panel-footer">
			    					<p1>*Harga yang tertera adalah harga perkiraan, harga real yang harus dibayarkan adalah yang ditagihkan oleh laboratorium.</p1><br>
			    					<p2>*Pemeriksaan memerlukan janji dengan pihak lab, tim temandokter akan mengkoordinasikannya dengan pasien.</p2><br><br><br><br>
			    					<p3>Kontak info :</p3><br>
			    					<p4>dr.Risma</p4>
			                    	<p5 style="color: royalblue"><strong>  0813-0022-4657</strong></p5>
			    				</div>
			    			</div>
			    		</div>
	  				</div>
	  			</div>
	  		</div>
	  		<div class="col-md-4">
	  			<div class="container-sm mt-3 border">
		  			<div class="panel panel-default panel-pembayaran">
		  				<div class="file-upload">

		  					<?php /*echo $error*/;?>
	  						<?php /*echo form_open_multipart('C_Upload/do_upload');*/?>

				  			<div class="panel-heading">
				  				<h5 class="panel-title"><strong>PEMBAYARAN</strong></h5>
						    	<div></div>	
				  			</div>
				  			<div class="panel-body">
				            	<p>File :</p>
				            	<p><button type="file" class="btn btn-secondary" name="userfile">Choose File</button>  No file chosen</p>
				            	<p>Kirimkan bukti pembayaran ke :</p>
				            	<p>09128374659 (BCA) An. PT Mediva Digital Inovasi</p>
				  			</div>
				  			<div class="panel-footer">
				  				<button type="submit" class="btn btn-primary btn-center btn-block" id="upload">Upload</button>
				  			</div>
				  		</div>
		  		    </div>
		  		</div>
	  		</div>
		</div>
	</div>
</body>
</html>