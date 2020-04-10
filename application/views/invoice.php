<!DOCTYPE html>
<html>
<head>

	<title>ceklab - Invoice</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="assets/css/invoice.css"> 
        <script type="text/javascript" src="assets/script/invoice.js"></script>   
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="assets/script/jquery.js"></script>
        <script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/script/popper.js"></script>
</head>
<body class="body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#" style="color: royalblue">
            <span style="font-size:30px;cursor:pointer" id="ceklab-btn" onclick="openNav()">&#9776; ceklab</span>
        </a>
    </nav>


    <!-- Sidenav -->

   <div id="mySidenav" class="sidenav bg-white">
        <a href="javascript:void(0)" class="closebtn" style="color: royalblue" onclick="closeNav()">&times;</a>
        <a href="#">Home</a>
        <a href="#">Cek Resiko</a>
        <a href="#">Paket Periksa</a>
        <a href="#">Transaksi</a>
        <a href="#">Log Out</a>
   </div>

    <!-- Page Content -->
    <div class="main">
	<div class="container pt-3">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2>
    		</div>
    		<hr>
    		<div class="card-deck">
                <div class="card bg-plain border-0">
                    <div class="card-body text-left">
                        <p class="card-text"><strong>Kode       :</strong> F12MJ</p>
                        <p class="card-text"><strong>Tanggal    :</strong> 02 Apr 20</p>
                        <p class="card-text"><strong>Paket      :</strong> Screening COVID-19</p>
                    </div>
                </div>
                <div class="card bg-plain border-0">
                    <div class="card-body text-left">
                        <p class="card-text"><strong>Pasien         :</strong> </p>
                        <p class="card-text"><strong>Umur           :</strong> </p>
                         <p class="card-text"><strong>JK            :</strong> L </p>
                          <p class="card-text"><strong>No. Telepon  :</strong> </p>
                    </div>
                </div>
                <div class="card bg-plain border-0">
                    <div class="card-body text-left">
                        <p class="card-text"><strong>Lab            :</strong> Prospek Lab</p>
                         <p class="card-text"><strong>Kota          :</strong> JAKARTA</p>
                          <p class="card-text"><strong>Pemesan      :</strong> Alif Farhan Widyanto</p>
                           <p class="card-text"><strong>Keterangan  :</strong></p>

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
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h4 class="panel-title"><strong>Order summary</strong></h4>
    				<div></div>
    			</div>
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
    <div class="card bg-plain" style="width: 25%">
        <div class="card-body text-left">
            <h5 class="text-center"><strong>PEMBAYARAN</strong></h5>
            <p>File :</p>
            <p><button type="button" class="btn btn-secondary">Choose File</button>  No file chosen</p>
            <p>Kirimkan bukti pembayaran ke :</p>
            <p>09128374659 (BCA) An. PT Mediva Digital Inovasi</p>
            <p style="width: 25%"><button type="button" class="btn btn-primary btn-center">Upload</button></p>
        </div>
    </div>
</div>
</body>
</html>