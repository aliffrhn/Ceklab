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
        border-color: #97D3AC;
        background-color: white;
        color: #97D3AC;
        border-width:1.75px;
        border-style:dashed;
        margin: 30px 5px;
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
</style>
<body>
    <!-- Component Header -->
    <div class="bg-top">
        <div class="p-3">
            <div class="row align-items-center justify-content-left">
                <div class="col-md-auto">
                    <div class="p-3 bg-white rounded box-shadow">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col pt-3 align-self-center">
                    <h4 class="title-bartitle-bar">Riwayat Transaksi</h4>
                    <p class="subtitle-bar">Mulai hidup sehat? Ikut CekLab</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Component Bottom -->
    <div class="bg-bot">
        <div class="container">
            <div class="float-right">
                <!-- Component Status -->
                <a style="color: #97D3AC" class="status-btn btn btn-success">Selesai</a>
                <a style="color: #97D3AC" class="status-btn btn btn-success">Selesai</a>
                <a style="color: #97D3AC" class="status-btn btn btn-success">Selesai</a>
                <a style="color: #97D3AC" class="status-btn btn btn-success">Selesai</a>
                <a style="color: #97D3AC" class="status-btn btn btn-success">Selesai</a>
            </div>
            <div class="clearfix"></div>
            <div>
                <!-- Component Card -->
                <div style="margin: 10px 0px;" class="d-inline-block rounded card w-100">
                    <div class="card-body transaction-card">
                        <div class="d-inline-block">
                            <h5 class="card-title">Screening COVID-19</h5>
                            <p style="opacity: 0.5;" class="card-text">02 Apr 2020</p>
                        </div>
                        <div style="margin: 0 auto;" class="d-inline-block float-right">
                            <h1>448rb</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>