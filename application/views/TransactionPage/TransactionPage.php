<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Page</title>

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
    .card {
        margin: 10px 0px;
    }

    .bg-top {
        align-content: center;
        background-color: #fafbfc;
    }

    body {
        background-color: #f2f2f2;
    }

    .title-bar{
        color: #4A5057;
    }

    .subtitle-bar{
        color: #8F9498;
    }

    .box-shadow {
        box-shadow: -1px 3px 26px -5px rgba(0, 0, 0, 0.2);
    }

    .status-btn {
        background-color: white;
        border-width:1.75px;
        border-style:dashed;
        margin: 30px 5px;
    }

    .status-btn:hover {
        background-color : white;
    }
    
    .transaction-card {
        color: white;
        background-image: linear-gradient(to bottom right, #CA9B39, #EFBA4A);
    }

    i {
        text-align: center;
        font-size: 32px;
        color: plum;
    }

    /*  */

    /* Mobile */
    @media (max-width: 450px) {
        
        /* Status Button */
        .status-btn {
            margin: 10px 5px;
        }
        
        .section-btn-status {
            margin: 20px 0;
        }
        /*  */

        /* Card Transaksi */
        .card-title{ 
            font-size: 15px;
        }

        .card-text {
            font-size: 14px;
        }

        .card-text-price {
            font-size: 34px;
        }
        /*  */

        /* etc */
        .webkit-center {
            text-align: -webkit-center;
        }
        /*  */
        
    }

    /* Tablet */
    @media (max-width: 990px) {

    }
</style>
<body>
    <!-- Include Sidebar Navbar -->
    <?php $this->load->view('Navbar/navbar') ?>

    <!-- Component Header -->
    <div class="bg-top">
        <div class="container">
            <div class="p-3">
                <div class="row align-items-center justify-content-left">
                    <div class="col-md-auto">
                        <div class="p-3 bg-white rounded box-shadow webkit-center">
                            <img src="../assets/bx-transfer-alt.svg" alt="" style="width: 40px;">
                        </div>
                    </div>
                    <div class="col pt-3 align-self-center webkit-center">
                        <h4 class="title-bartitle-bar">Riwayat Transaksi</h4>
                        <p class="subtitle-bar">Mulai hidup sehat? Ikut CekLab</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Component Bottom -->
    <div class="bg-bot">
        <div class="container">
            <div class="section-btn-status float-right webkit-center">
                <!-- Component Status -->
                <?php
                    foreach ($status as $key => $data) {
                ?>
                    <a class="status-btn btn btn-success" style="color: #<?php echo $data['kode_warna'] ?>; border-color: #<?php echo $data['kode_warna'] ?>" ><?php echo $data['nama'] ?></a>
                <?php
                    }
                ?>
            </div>
            <div class="clearfix"></div>
            <div>
                <!-- Component Card -->
                <?php
                    foreach ($transaction as $key => $data) {
                ?>
                    <div class="d-inline-block rounded card w-100">
                        <div class="card-body transaction-card" style="background-image: linear-gradient(to bottom right, #CA9B39, #<?php $data['kode_warna'] ?>;">
                            <div class="d-inline-block">
                                <h5 class="card-title"><?php echo $data['judul'] ?></h5>
                                <p class="card-text" style="opacity: 0.5;" ><?php echo $data['tanggal'] ?></p>
                            </div>
                            <div class="d-inline-block float-right" style="margin: 0 auto;" >
                                <h1 class="card-text-price">Rp. <?php echo $data['harga_diskon'] == null ? $data['harga'] : $data['harga_diskon'] ?></h1>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>