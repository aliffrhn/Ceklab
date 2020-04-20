<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css"> -->
    <!-- <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <title>ceklab app</title>
</head>

<body class="bg-index">
    <div class="container-fluid bg-top">
        <div class="p-3">
            <div class="row align-items-center justify-content-left">
                <div class="col-md-auto">
                    <div class="p-3 bg-white rounded box">
                        <ion-icon name="gift"></ion-icon>
                    </div>
                </div>
                <div class="col pt-3 align-self-center">
                    <h5 class="title-bar"><?php echo $title; ?></h4>
                        <p class="subtitle-bar"><?php echo $subtitle ?></p>
                </div>
            </div>
        </div>
    </div>