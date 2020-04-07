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
</head>
<style>
    .navbar-nav > li{
        padding-left:20px;
    }

    a:hover{
        border-top: solid 3px #3357AB;
    }

    .navbar {
        box-shadow: 0 5px 7px -6px #999;
    }

    /* Jumbotron */
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

        .jumbotron-head {
            font-size: 20px;
        }

        .m-text-center {
            text-align: center;
        }
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
        .jumbotron-head {
            font-size: 30px;
        }

        .jumbotron-btn {
            margin-top: 0;
            width: 100%;
            padding: 15px;
            border-radius: 25px;
        }
    }

    /* etc */
    @media (min-width: 576px) {
        .jumbotron {
            padding-right: 0;
            padding-left: 0;
        }
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
            <h1 class="font-weight-bold section-subheader-number "><span class="count-effect">22364</span></h1>
            <h5 class="font-weight-light section-descheader-number">Pemeriksaan Telah Dilakukan</h5>
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
    </script>
</body>
</html>