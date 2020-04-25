<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css')?>" />

    <!-- js -->
    <script src="<?php echo base_url('./assets/js/jquery-3.4.1.js') ?>"></script>
    <script src="<?php echo base_url('./assets/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('./assets/js/bootstrap.min.js') ?>"></script>
    <title>ceklab app</title>
</head>

<body class="bg-index">
    <!-- Navbar Sidebar -->
    <?php $this->load->view('Navbar/navbar') ?>
    <div class="container-fluid bg-top">
        <div class="p-3">
            <div class="row align-items-center justify-content-left">
                <div class="col-md-auto">
                    <div class="p-3 bg-white rounded box">
                        <img src="../assets/bx-first-aid.svg" alt="" style="width: 32px; height: 32px;">
                    </div>
                </div>
                <div class="col pt-3 align-self-center">
                    <h5 class="title-bar"><?php echo $title; ?></h4>
                    <p class="subtitle-bar"><?php echo $subtitle ?></p>
                </div>
            </div>
        </div>
    </div>