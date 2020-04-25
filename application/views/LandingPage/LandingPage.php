<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <!-- Bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css')?>" />
    
    <!-- js -->
    <script src="<?php echo base_url('./assets/js/jquery-3.4.1.js') ?>"></script>
    <script src="<?php echo base_url('./assets/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('./assets/js/bootstrap.min.js') ?>"></script>
    
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/ced76fa7d3.js" crossorigin="anonymous"></script>

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Countdown -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" integrity="sha256-Ikk5myJowmDQaYVCUD0Wr+vIDkN8hGI58SGWdE671A8=" crossorigin="anonymous"></script>
</head>
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

    /* Section Jumbotron */
    .jumbotron {
        background-color: white;
        margin-bottom: 0;
    }
    
    .jumbotron-btn {
        background-color: #449FD9;
        border-radius: 20px;
        border: none;
        font-size: 15px;
        padding: 10px 50px;
        box-shadow: 0 5px 7px -6px #999;
        margin-top: 60px;
    }

    .jumbotron-btn:hover {
        background-color: #449FD9;
        border-radius: 20px;
        border: none;
        font-size: 15px;
        padding: 10px 50px;
        box-shadow: 0 7px 9px -4px #999;
    }

    .jumbotron-subtext {
        margin-top: 20px;
        color: #838383;
    }

    .jumbotron-btn-icon {
        margin-left:10px;
        vertical-align: middle;
    }

    .jumbotron-img {
        max-width: 100%; 
        width:500px; 
        height:auto;
    }
    /*  */

    /* Section Sampai Hari Ini */
    .section-header-number {
        font-size: 45px; 
        color: #449FD9;
    }

    .section-subheader-number {
        font-size: 65px; 
        color: #449FD9;
    }

    .section-descheader-number {
        font-size: 20px;
        color: #575B61;
    }
    /*  */
    
    /* Slider Autoplay */
    .slider-autoplay {
        padding: 30px 0px;
        text-align: -webkit-center;
    }
    /*  */

    /* Card */
    .card {
        border: none
    }

    .section-header-card {
        color: #449FD9;
    }

    .section-subheader-card {
        color: #575B61;
    }

    .section-descheader-card {
        color: #449FD9;
    }

    .section-img-card {
        align-self: center;
        width: 200px;
    }
    /*  */

    /* Carousel  */
    .carousel {
        margin: 50px auto;
        padding: 0 70px;
    }
    .carousel .item {
        color: #999;
        overflow: hidden;
        min-height: 120px;
        font-size: 13px;
    }
    .carousel .media img {
        width: 80px;
        height: 80px;
        display: block;
        border-radius: 50%;
    }
    .carousel .testimonial {
        padding: 0 15px 0 60px ;
        position: relative;
        text-align: center;
    }
    .carousel .testimonial::before {
        content: '\93';
        color: #e2e2e2;
        font-weight: bold;
        font-size: 68px;
        line-height: 54px;
        position: absolute;
        left: 15px;
        top: 0;
    }
    .carousel .overview b {
        text-transform: uppercase;
        color: #449FD9;
    }
    .carousel .carousel-indicators {
        bottom: -40px;
    }
    .carousel-indicators li, .carousel-indicators li.active {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        margin: 1px 3px;
    }
    .carousel-indicators li {	
        background: #e2e2e2;
        border: 4px solid #fff;
    }
    .carousel-indicators li.active {
        color: #fff;
        background: #449FD9;    
        border: 5px double;    
    }
    /*  */

    /* Countdown */
    .countdown {
        font-size: 40px;
        margin-top: 0px;
    }
    /*  */

    /* Mobile */
    @media (max-width: 450px) {
        /* Section Sampai Hari Ini */
        .section-header-number {
            font-size: 35px; 
            color: #449FD9;
        }

        .section-subheader-number {
            font-size: 55px; 
            color: #449FD9;
        }

        .section-descheader-number {
            font-size: 15px;
            color: #575B61;
        }
        /*  */

        /* Section Jumbotron */
        .jumbotron-head {
            font-size: 20px;
        }

        .m-text-center {
            text-align: center;
        }
        /*  */ 

        /* Card */
        .section-header-card {
            font-size: 28px;
        }

        .section-subheader-card {
            font-size: 25px;
        }

        .section-descheader-card {
            font-size: 20px;
        }
        /*  */

        /* Carousel */
        .carousel {
            padding: 0px 30px;
        }
        /*  */
    }

    /* Tablet */
    @media (max-width: 990px) {
        .navbar li {
            margin-top : 15px;
        }

        a:hover{
            border-top: none;
        }

        a:active{
            border-bottom: solid 3px #3357AB;
            width: 85px;
        }

        /* Section Jumbotron */
        .jumbotron-head {
            font-size: 30px;
        }

        .jumbotron-btn {
            margin-top: 0;
            width: 100%;
            padding: 15px;
            border-radius: 25px;
        }
        /*  */

        /* Section Sampai Hari Ini */
        .section-header-number {
            font-size: 40px; 
            color: #449FD9;
        }

        .section-subheader-number {
            font-size: 60px; 
            color: #449FD9;
        }

        .section-descheader-number {
            font-size: 18px;
            color: #575B61;
        }
        /*  */

        /* Card */
        .section-header-card {
            font-size: 33px;
        }

        .section-subheader-card {
            font-size: 30px;
        }

        .section-descheader-card {
            font-size: 16px;
        }
        /*  */
    }

    /* etc */
    @media (min-width: 576px) {
        /* Section Jumbotron */
        .jumbotron {
            padding-right: 0;
            padding-left: 0;
        }
        /*  */
    }
    
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div style="padding: 15px 0px;" class="container">
            <a class="navbar-brand" href="#"><img src="<?php echo base_url('./assets/img/logo/ceklab-logo.png') ?>" width="100" alt="logo-ceklab"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold" href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="<?php echo base_url('/Carapakai/index') ?>">Cara Pakai</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron row flex-row-reverse">
            <div class="col-md-6">
                <img class="img-fluid jumbotron-img" src="https://ceklab.id/wp-content/uploads/2019/07/home-service.jpg" alt="cek-lab-hero">
            </div>
            <div class="col-md-6 align-self-center m-text-center">
                <h1 class="display-5 jumbotron-head">Periksa Lab? Ingat</h1>
                <h1 class="display-5 font-weight-bold">CekLab.id!</h1>
                <p class="jumbotron-subtext">Cashback tambahan 10% di semua lab di Indonesia, mau? emote</br> Ayo jadi member dan nikmati benefitnya.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg jumbotron-btn font-weight-bold" href="#" role="button">CekLab Sekarang<i class="fa fa-arrow-right jumbotron-btn-icon"></i></a>
                </p>
            </div>
        </div>
        <div class="text-center">
            <h2 class="font-weight-normal section-header-number">Sampai <b>Hari Ini</b></h2>
            <h1 class="font-weight-bold section-subheader-number"><span class="count-effect"><?php echo $count_transaction ?></span></h1>
            <h5 class="font-weight-light section-descheader-number">Pemeriksaan Telah Dilakukan</h5>
        </div>
        <div class="slider-autoplay">
            <div><img src="https://ceklab.id/wp-content/uploads/elementor/thumbs/kalgen-bekerjasama-dengan-ceklab.id-untuk-periksa-1-oera6xy41e9s10j73jory651y05jgum4yoqp8ylrbk.jpg"></div>
            <div><img src="https://ceklab.id/wp-content/uploads/elementor/thumbs/kimia-farma-kerjasama-dengan-ceklab.id-untuk-periksa-diabetes-1-oerad6ljestb3tgvnqsm03g7x3e9kidzhknqy3co0g.jpg"></div>
            <div><img src="https://ceklab.id/wp-content/uploads/elementor/thumbs/bio-test-cek-diabet-ceklab.id_-oemumx1i1h4txm1t65rwf5la2lq0ri8e8ehfrdbssw.jpg"></div>
            <div><img src="https://ceklab.id/wp-content/uploads/elementor/thumbs/parahita-gejala-diabet-ceklab.id_-1-oera5rndhunvik8myjekbytb7ny0ugy7svdunich3k.jpg"></div>
            <div><img src="https://ceklab.id/wp-content/uploads/elementor/thumbs/laboratorium-klinik-cito-ceklab.id_-1-oerafwcr5kj4n9ivsx1t7es5p60ft162j0i8uvbq1c.jpg"></div>
            <div><img src="https://ceklab.id/wp-content/uploads/elementor/thumbs/kalgen-bekerjasama-dengan-ceklab.id-untuk-periksa-1-oera6xy41e9s10j73jory651y05jgum4yoqp8ylrbk.jpg"></div>
            <div><img src="https://ceklab.id/wp-content/uploads/elementor/thumbs/kimia-farma-kerjasama-dengan-ceklab.id-untuk-periksa-diabetes-1-oerad6ljestb3tgvnqsm03g7x3e9kidzhknqy3co0g.jpg"></div>
            <div><img src="https://ceklab.id/wp-content/uploads/elementor/thumbs/bio-test-cek-diabet-ceklab.id_-oemumx1i1h4txm1t65rwf5la2lq0ri8e8ehfrdbssw.jpg"></div>
            <div><img src="https://ceklab.id/wp-content/uploads/elementor/thumbs/parahita-gejala-diabet-ceklab.id_-1-oera5rndhunvik8myjekbytb7ny0ugy7svdunich3k.jpg"></div>
            <div><img src="https://ceklab.id/wp-content/uploads/elementor/thumbs/laboratorium-klinik-cito-ceklab.id_-1-oerafwcr5kj4n9ivsx1t7es5p60ft162j0i8uvbq1c.jpg"></div>
        </div>
        <div>
            <div style="margin: 120px 0 50px 0;" class="text-center">
                <h2 class="font-weight-normal section-subheader-card">Berkat Dukungan Anda</h1>
                <h1 class="font-weight-bold section-header-card">CekLab Meraih Beberapa Prestasi</h1>
            </div>
            <div class="card-deck text-center">
                <div class="card">
                    <img class="card-img-top section-img-card" src="https://ceklab.id/wp-content/uploads/2019/09/gostartupindonesia.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title section-descheader-card">2nd National Winner of Go Startup Indonesia by Bekraf 2019</h5>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top section-img-card" src="https://ceklab.id/wp-content/uploads/2019/09/nextdev-1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title section-descheader-card">Regional Winner of The Nextdev Social Impact by Telkomsel</h5>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top h-50 section-img-card" style="width:50px;" src="https://ceklab.id/wp-content/uploads/2019/09/idff-2.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title section-descheader-card">One of the "Top 23 Fundable Startups of 2019" Indonesia Fund Fest</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div style="margin-top: 120px;" class="col-sm-12">
                <h2 class="text-center"><b>Apa Kata Sahabat</b> CekLab</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper -->
                    <div class="carousel-inner">
                        <!-- Item Carousel -->
                        <?php 
                            foreach ($testimoni as $key => $data) { 
                        ?>
                            <div class="item carousel-item <?php echo $key == 0 ? 'active' : 'null' ?>">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p><?php echo $data['testimoni_msg'] ?></p>
                                                    <p class="overview"><b><?php echo $data['nama'] ?></b> <?php echo $data['umur'] ?> tahun, <?php echo $data['status_pekerjaan'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>			
                            </div>
                        <?php 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="jumbotron">
        <h6 class="text-center" style="margin-top: 120px; font-weight:700; color: #2D9CDB;">MEMBER</h6>
        <h3 class="text-center" style="margin-bottom: 40px;">Keuntungan Member</h3>
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <div class="elementor-1">
                        <center><div class="" style="margin-bottom: 10px;;"><img src="assets/01.svg" alt="" ></div></center>
                        <h3 class="text-center" style="font-weight: 500; color: #333333; font-size: 24px;">Free Home Service Datang <br> ke Rumah</h3>
                        <p class="text-center" style="color: #828282;">Lupakan ribetnya janjian home service. Semua tertangani instan dan mudah. GRATIS!</p>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="elementor-1">
                        <center><div class="" style="margin-bottom: 10px;;"><img src="assets/02.svg" alt="" ></div></center>
                        <h3 class="text-center" style="font-weight: 500; color: #333333;font-size: 24px;">Diskon 10% untuk Semua <br> Pemeriksaan</h3>
                        <p class="text-center " style="color: #828282;">Bandingkan harga dan reputasi seluruh laboratorium, ada di genggaman Anda</p>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="elementor-1">
                        <center><div class="" style="margin-bottom: 10px;;"><img src="assets/03.svg" alt="" ></div></center>
                        <h3 class="text-center" style="font-weight: 500; color: #333333; font-size: 24px;">Kami Siap Mendampingi <br> Anda</h3>
                        <p class="text-center" style="color: #828282;"">Susah membaca hasil lab? Tenang,kami siap mendampingi untuk membaca hasil lab anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div id="jumbotron">
    <h6 class="text-center" style="margin-top: 120px; font-weight:700; color: #2D9CDB;">PARTNER</h6>
    <h3 class="text-center" style="margin-bottom: 30px;">As Seen As</h3>
    <div class="row" style="padding-left: 150px;">
        <div class="col-2">
            <img src="assets/Cnn.png" alt="">
        </div>
        <div class="col-2">
            <img src="assets/merah.png" alt="">
        </div>
        <div class="col-2">
            <img src="assets/bekraf.png" alt="">
        </div>
        <div class="col-2">
            <img src="assets/viva.png" alt="">
        </div>
        <div class="col-2">
            <img src="assets/sindo.png" alt="">
        </div>
    </div>
    <div class="row" style="margin-top:15px; margin-left: 220px; margin-right: 220px;">
        <div class="col-3" style="">
            <img src="assets/republika.png" alt="">
        </div>
        <div class="col-3" style="">
            <img src="assets/selular.png" alt="">
        </div>
        <div class="col-3" style="">
            <img src="assets/mime.png" alt="">
        </div>
        <div class="col-3" style="">
            <img src="assets/liputan.png" alt="">
        </div>
    </div>
    
    <?php 
    foreach($pendaftaran as $value){
    ?>
    <div id="jumbotron">
        <div class="container" style="margin-top: 120px;">
            <div class="row">
                <div class="col col-md-6">
                    <img src="<?php echo $value['photo_url']?>" alt="" style="width: 350px; height: 400px;">
                    <h3 style="margin-top:25px;">Pendaftaran Ditutup Pada :</h3>
                    <div id="<?php echo $value['pendaftaran_id']?>" data-countdown="<?php echo $value['waktu_penutupan'] ?>" class="countdown">
                    </div>
                </div>
                <div class="col col-md-6">
                    <h3>Mulai Hidup sehat? Ikut CekLab di <?php echo $value['nama_kota'] ?> Sekarang</h3>
                    <form action="<?php echo base_url().'LandingPage/insert' ?>" method="post">
                    <div class="form-group">
                        <label for="usr">Nama:</label>
                        <input type="text" class="form-control" id="usr" name="nama">
                        </div>
                        <div class="form-group">
                        <label for="umr">Umur</label>
                        <input type="text" class="form-control" id="umr" name="umur">
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio" value="L">Laki-laki
                        </label>
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio" value="P">Perempuan
                        </label>
                        </div>
                        <div class="form-group" style="margin-top: 20px;">
                        <label for="alamat">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="form-group">
                        <label for="telp">Nomor Telephone Whatsapp</label>
                        <input type="text" class="form-control" id="telp" name="telp">
                        </div>
                        <button class="btn btn-primary" style="background-color: #2D9CDB;">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }
    ?>
    <div id="jumbotron" style="margin-top: 120px;">
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
    <script>
        // Countdown
        $(function(){
            $('[data-countdown]').each(function() {
                var $this = $(this), finalDate = $(this).data('countdown');
                $this.countdown(finalDate, function(event) {
                    $this.html(event.strftime('%Dd %Hh %Mm %Ss'));
                });
            });
        });

        // Count Effect 
        $('.count-effect').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 700,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

        // Slider Autoplay
        $('.slider-autoplay').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            speed: 2000,
            dots: false,
            prevArrow: false,
            nextArrow: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        prevArrow: false,
                        nextArrow: false,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        prevArrow: false,
                        nextArrow: false,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        prevArrow: false,
                        nextArrow: false,
                    }
                }
            ]
        });
    </script>
</body>
</html>