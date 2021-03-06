<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <title>ceklab app</title>
</head>

<body class="bg-index">
    <!-- Navbar Sidebar  -->
    <?php $this->load->view('Navbar/navbar') ?>
    <div class="container-fluid bg-top">
        <div class="p-3">
            <div class="row align-items-center pr-3 pl-3 justify-content-between">
                <div class="row align-items-center justify-content-left">
                    <div class="col-md-auto">
                        <div class="p-3 bg-white rounded box">
                            <ion-icon name="gift"></ion-icon>
                        </div>
                    </div>
                    <div class="col pt-3 align-self-center">
                        <h5 class="title-bar"><?php echo $package[0]['judul']; ?></h4>
                            <p class="subtitle-bar"><?php echo $subtitle ?></p>
                    </div>
                </div>
                <div class="col-md-auto">
                    <form action="<?php echo base_url('/Pasien/index') ?>" method="POST">
                        <input type="hidden" value="<?php echo $package[0]['paket_periksa_id']?>" name="paket_periksa_id" />
                        <button type="submit" class="btn btn-glow" aria-expanded="false">Pesan Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>