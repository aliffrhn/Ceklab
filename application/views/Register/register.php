<!DOCTYPE html>
<html>
    <head>
        <title>Ceklab Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/ceklabregis.css'); ?>"> 
        <script type="text/javascript" src="<?php echo base_url('assets/script/ceklablogin.js'); ?>"></script>   
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
        <script type="text/javascript" src="<?php echo base_url('assets/script/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/script/popper.js');?>"></script>
    </head>
<body>
    <div class="container-fluid">
        <div class="row">
    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8 regis-backdrop">
    <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9 regis-container">
        <h4>Halo,</h4>
        <p>Hanya butuh <a id="highlight">beberapa detik</a> untuk membuat akun Anda.</p>
        <form action="<?php echo base_url('/Register/register') ?>" method="post" enctype="multipart/form-data">
            <?php if(isset($error_message)) { ?>
			    <div class="alert alert-danger" role="alert">
				<?= $error_message ?>
			    </div>
            <?php } ?>
            <div class="form-row">
                <div class="col-md-5">
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Email</label>
                        <input name="email" id="exampleEmail" placeholder="Email here..." type="text" class="form-control"></div>
                </div>
                <div class="col-md-5">
                    <div class="position-relative form-group">
                        <label for="exampleUsername" class="">Username</label>
                        <input name="username" id="exampleUname" placeholder="Username here..." type="text" class="form-control"></div>
                </div>
                <div class="col-md-5">
                    <div class="position-relative form-group">
                        <label for="exampleNama" class="">Name</label>
                        <input name="nama" id="exampleName" placeholder="Name here..." type="text" class="form-control"></div>
                </div>
                <div class="col-md-5">
                    <div class="position-relative form-group">
                        <label for="examplePhone" class="">Phone</label>
                        <input name="phone_number" id="examplePhone" placeholder="Phone number here..." type="text" class="form-control"></div>
                </div>
                <div class="col-md-5">
                    <div class="position-relative form-group">
                        <label for="examplePassword" class="">Password</label>
                        <input name="password" id="examplePassword" placeholder="Password here..." type="password" class="form-control"></div>
                </div>
                <div class="col-md-5">
                    <div class="position-relative form-group">
                        <label for="exampleKota" class="">Kota</label>
                        <input name="kota" id="exampleKota" placeholder="Kota here..." type="text" class="form-control"></div>
                </div>
            </div>
            <br>
            <div class="position-absolute form-check"></div>
            <div class="d-flex align-items-center regis-footer">
                <h5>Sudah punya akun? <a href="<?php echo base_url('/Login/index'); ?>">Login disini yuk.</a></h5>
                <div class="ml-0">
                    <button type="submit" class="btn">Buat Akun</button>
                </div>
            </div>           
         </form>
    </div>
    </div>
    <div class="d-none d-block col-md-9">
        <div class="sidebar">
            <div class="sidebar-inner">
                <div class="sidebar-container">
                    <div class="sidebar-caption">
                      <h5 id="head-cap">Lebih Murah dan Mudah</h5> <br>
                      <p id="con-cap">Memudahkan Anda mengontrol
                        kesehatan Anda dengan<br> datang ke rumah
                        dan diskon di semua vendor lab.
                      </p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
    