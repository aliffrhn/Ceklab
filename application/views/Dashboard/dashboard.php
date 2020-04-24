<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap css-->
        <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css')?>" />

        <!-- js -->
        <script src="<?php echo base_url('./assets/js/jquery-3.4.1.js') ?>"></script>
        <script src="<?php echo base_url('./assets/js/popper.js') ?>"></script>
        <script src="<?php echo base_url('./assets/js/bootstrap.min.js') ?>"></script>
    </head>
    <body>
        <!-- Navbar Sidebar -->
        <?php $this->load->view('Navbar/navbar') ?>
        <div class="jumbotron">
            <div class="container" style="margin-bottom:10%;">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="card" style="height:150px;">
                            <div class="center">
                                <div class="box">
                                    <img src="../assets/bx-clinic.svg" alt="" style="width: 32px; height: 32px; margin-left:15px; margin-top: 15px;">
                                </div>
                                <div class="" style="margin-left:15px; margin-top: 15px;">
                                    <h4>Cek Resiko Covid-19</h4>
                                </div>
                                <a href="<?php echo base_url('ResikoCovid/index')?>" class="btn btn-link" style="margin-left:3px;">Check Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card" style="height:150px;">
                            <div class="">
                                <div class="box">
                                    <img src="../assets/bx-first-aid.svg" alt="" style="width: 32px; height: 32px; margin-left:15px; margin-top: 15px;">
                                </div>
                                <div class="" style="margin-left:15px; margin-top: 15px;">
                                    <h4>Paket Periksa</h4>
                                </div>
                                <a href="#" class="btn btn-link" style="margin-left:3px;">Check Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card" style="height:150px;">
                            <div class="">
                                <div class="box">
                                    <img src="../assets/bx-transfer-alt.svg" alt="" style="width: 32px; height: 32px; margin-left:15px; margin-top: 15px;">
                                </div>
                                <div class="" style="margin-left:15px; margin-top: 15px;">
                                    <h4>Transaksi</h4>
                                </div>
                                <a href="<?php echo base_url('/Transaction/index') ?>" class="btn btn-link" style="margin-left:3px;">Check Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <div class="footer" style="margin-top: auto;">
                        <img src="../assets/loving.svg" alt="" style="width: 300px;height:300px;">
                    </div>
                </center>
            </div>
        </div>
    </body>
</html>