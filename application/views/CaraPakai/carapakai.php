<!DOCTYPE html>
<html>
<head>
        <title>ceklab - Cara Pakai</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/caraPakai.css');?>"> 
        <script type="text/javascript" src="<?php echo base_url('assets/script/caraPakai.js');?>"></script>   
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
        <script type="text/javascript" src="<?php echo base_url('assets/script/jquery.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/script/popper.js');?>"></script>
        <script src="<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js');?>"></script>

        <style>
        /* Navbar Section */
        .navbar {
            box-shadow: 0 5px 7px -6px #999;
        }

        .navbar-nav > li{
            padding-left:20px;
        }

        .nav-item a:hover{
            border-top: solid 3px #3357AB;
        }
        /*  */
        </style>
</head>
<body>
<!-- Page Content -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div style="padding: 15px 0px;" class="container">
                <a class="navbar-brand" href="#"><img src="<?php echo base_url('./assets/img/logo/ceklab-logo.png') ?>" width="100" alt="logo-ceklab"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                                <a class="nav-link font-weight-bold" href="<?php echo base_url('/LandingPage/index') ?>">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="#">Cara Pakai</a>
                        </li>
                        </ul>
                </div>
                </div>
        </nav>
        <!-- main 1 -->
        <main class="main1">
             <div class="row" id="row1">
                <div class="col-6 col-sm-2" id="col1"></div>
                <div class="col-6 col-sm-4" id="col1">
                        <h6>Asisten Personal Untuk Anda</h6>
                        <h2>Didampingi CekLab Dari</h2>
                        <h2>WhatsApp</h2><br>
                        <h8>Siap sedia membantu Anda dalam memesankan pemeriksaan apa yang</h8>
                        <h8>diperlukan, dan bagaimana dalam mengatur pola hidup yang</h8>
                        <h8>menyehatkan</h8><br><br>
                        <button type="button" class="btn btn-info">WhatsApp Sekarang</button>

                </div>
                <div class="col-6 col-sm-4" id="col1">
                        <img src="<?php echo base_url('assets/Picture/asset-1.jpeg');?>" class="center float-left img1" alt="WhatsApp" width="500" height="350">
                </div>
                <div class="col-6 col-sm-2" id="col1"></div>
            </div>
        </main>
        <!-- main 2 -->
        <main class="main2">
           <div class="row" id="row2">
                  <svg id="curve2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"  preserveAspectRatio="none">
                        <path fill="white" class="elementor-shape-fill" fill-opacity="1" d="M0,32L40,26.7C80,21,160,11,240,37.3C320,64,400,128,480,160C560,192,640,192,720,165.3C800,139,880,85,960,58.7C1040,32,1120,32,1200,69.3C1280,107,1360,181,1400,218.7L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
                </svg>
                <div class="col-6 col-sm-2" id="col2"></div>
                <div class="col-6 col-sm-4" id="col2">
                        <img src="<?php echo base_url('assets/Picture/asset-2.jpeg');?>" class="center float-right img2" alt="Pesan" width="500" height="350">
                </div>
                <div class="col-6 col-sm-4" id="col2">
                        <h6>Pesan Langsung Lewat Web</h6>
                        <h2>Pemesanan Praktis</h2>
                        <h2>Langsung</h2><br><br>
                        <button type="button" class="btn btn-primary">Pesan Sekarang</button>
                </div>
                <div class="col-6 col-sm-2" id="col2"></div>
           </div>
        </main>
        <!-- main 3 -->
        <main class="main3">
           <div class="row" id="row3">
                <svg id="curve3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
                        <path fill="royalblue" class="elementor-shape-fill" fill-opacity="1" d="M0,128L80,128C160,128,320,128,480,149.3C640,171,800,213,960,213.3C1120,213,1280,171,1360,149.3L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
                </svg>
                <div class="col-6 col-sm-2" id="col3"></div>
                <div class="col-6 col-sm-4" id="col3">
                        <h2>Atau Download Apps</h2>
                        <h2>CekLab Sekarang</h2>
                        <h6>Pesan Mudah Dan Kontrol Kesehatan Anda Lewat Apps</h6><br><br>
                        <button type="button" class="btn btn-light">Download Sekarang</button>
                </div>
                <div class="col-6 col-sm-4" id="col3">
                        <img src="<?php echo base_url('assets/Picture/asset-3.jpg');?>" class="center float-left img3" alt="Download" width="500" height="350">
                </div>
                <div class="col-6 col-sm-2" id="col3"></div>
           </div>
        </main>
        <div id="jumbotron" style="margin-top: 250px;">
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <h5 style="margin-bottom: 20px;">Tagging : </h5>
                    <p style="color:#828282 ;">Cek Gula darah <br> Cek kadar gula <br> Cek laboratorium <br> Cek Laboratorium Gula Darah <br> Diabetes <br> Gula Darah Puasa <br> Gula Darah 2 jam p p <br> hba1c <br> Pengecekan Diabetes Akurat</p>
                </div>
                <div class="col col-md-4">
                    <h5 style="margin-bottom: 20px;">Saran Dokter Gratis : </h5>
                    <p style="color:#828282 ;">Makan Enak Dengan Diabetes <br> Orang Diabet Boleh Makan Apa Saja <br> Pantangan Orang Diabet <br>Olahraga Khusus Orang Diabet</p>
                </div>
                <div class="col col-md-4">
                    <h5 style="margin-bottom: 20px;">Lihat Juga : </h5>
                    <p style="color:#828282 ;">Makan Enak Dengan Kolesterol <br> Kolesterol Boleh Makan Apa Saja <br> Kolesterol Tinggi Bahaya? Belum Tentu! <br>Hidup Enak Dengan Kolesterol <br>Tekanan Darah Tinggi Itu Apa? <br>Penyebab Tekanan Darah Tinggi <br>Tekanan Darah Tinggi Berbahaya <br>Makan Asin Bersama Tekanan Darah Tinggi</p>
                </div>
            </div>
        </div>
    </div>
    <div id="-page-footer font-small dark" style="background-color:#1b252f;">
        <div class="container">
            <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                <center style="">
                    <h2 style="color: white;">ceklab</h2>
                    <p style="color: white; margin-top: 25px;">Ucapkan selamat tinggal bagi periksa darah yang membingungkan <br> dan mahal. <br> Periksa lab,ingat Ceklab.id!</p>
                </center>
            </div>

            <div class="ul">
                <div class="li">
                    <center>
                        <div class="row">
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="assets/bx-phone.svg" alt="" style="color: white; margin-right: 10px; margin-bottom: 10px;">
                                    <p style="color :white">+62 813-5351-8888</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/bx-map.svg" alt="" style="color: white; margin-right: 10px; margin-bottom: 10px;">
                                    <p style="color :white">Jalan Tais Nasution no 41, Surabaya</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/bx-time.svg" alt="" style="color: white; margin-right: 10px; margin-bottom: 10px;">
                                    <p style="color :white">08.00 - 21.00</p>
                                </div>
                            </div>
                        </div>
                        <p style="text-align: center; color: white; font-weight: 100; font-size: small; margin-bottom: auto;">2019 All Rights Reserved By PT Mediva Digital Inovasi</p><br>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>
</html>