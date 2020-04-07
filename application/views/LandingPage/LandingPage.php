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
	
</head>
<style>
    /* Navbar Section */
    .navbar {
        box-shadow: 0 5px 7px -6px #999;
    }

    .navbar-nav > li{
        padding-left:20px;
    }

    a:hover{
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
                        <a class="nav-link font-weight-bold" href="#">Cara Pakai</a>
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
            <h1 class="font-weight-bold section-subheader-number"><span class="count-effect">22364</span></h1>
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
            <div style="margin: 50px 0;" class="text-center">
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
    </div>
    <script>
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