<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <!-- Bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css')?>" />
    
    <!-- js -->
    <script src="<?php base_url('./assets/js/jquery-3.4.1.js') ?>"></script>
    <script src="<?php base_url('./assets/js/popper.js') ?>"></script>
</head>
<style>
    li {
        padding-left: 20px;
    }

    a:hover{
        border-top: solid 3px #35363A;
    }

    .navbar {
    box-shadow: 0 5px 7px -6px #999;

    /* the rest of your styling */
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
</body>
</html>