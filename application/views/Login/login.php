<!DOCTYPE html>
<html>
    <head>
        <title>Ceklab Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/ceklabloginpage.css'); ?>"> 
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
            <div class="h-100 d-none d-lg-block col-lg-4">
                <div class="carousel-container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active" id="caro1">
                          <div class="container1">
                            <div class="carousel-caption">
                              <h5 id="head-cap">40% Lebih Hemat</h5> <br>
                              <p id="con-cap"> ceklab.id memberikan kemudahan bagi<br>
                                Anda untuk memeriksa kesehatan Anda,<br> 
                                dimana saja dan kapan saja. Tidak perlu<br>
                                capai datang ke lab, diskon di semua 
                                pemeriksaan, dan dokter yang<br>
                                meresepkan hanya pemeriksaan yang
                                diperlukan untuk Anda.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="container2">
                            <div class="carousel-caption">
                              <h5 id="head-cap">Lebih Murah dan<br>Mudah</h5> <br>
                              <p id="con-cap">Memudahkan Anda mengontrol<br>
                                kesehatan Anda dengan datang ke rumah<br>
                                dan diskon di semua vendor lab.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="container3">
                            <div class="carousel-caption" id="cap3">
                              <h5 id="head-cap">Saran Medis <br> Berpengalaman</h5> <br>
                              <p id="con-cap">Semua paket yang ada di ceklab.id telah 
                                 diresepkan oleh dokter berpengalaman di 
                                  bidangnya, dan hanya memeriksa yang<br>
                                  sangat diperlukan oleh kondisi Anda.
                              </p>
                            </div>
                        </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
                  <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8 backdrop">
                    <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9 login-container">
                        <!--div style="height: 31px;" class="app-logo"></div-->
                        <h4 class="mb-0 greet">
                            <span class="d-block">Hai,</span>
                            <span>
                            Selamat datang kembali, yuk login dulu.	
                            </span>
                        </h4>
                        <h6 class="mt-3 quest">Belum ada akun? <a href="<?php echo base_url('/register'); ?>">Yuk register sekarang!</a></h6>
                                <div class="divider row"></div>
                        <div>
                            <form action="<?php echo base_url('/login/login') ?>" method="post">
                            <?php if(isset($error_message)) { ?>
                            <div class="alert alert-danger" role="alert">
                              <?= $error_message ?>
                            </div>
                            <?php } ?>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Username</label>
                                            <input name="username" id="exampleEmail" placeholder="Username here..." type="text" class="form-control"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword" class="">Password</label>
                                            <input name="password" id="examplePassword" placeholder="Password here..." type="password" class="form-control"></div>
                                    </div>
                                </div>
                                    <div class="position-relative form-check"></div>
                                 <div class="divider row"></div>
                                <div class="d-flex align-items-center">
                                    <div class="ml-auto">
                                        <button type="submit" class="btn" id="btnlogin">Login</button>
                                    </div>
                                </div>
                            </form>                            
                            </div>
                         </div>
                    </div>
                </div> 
            </div>
        </div>
    </body>
</html>