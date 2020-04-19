<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <!-- Bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css')?>" />
    
    <!-- js -->
    <script src="<?php echo base_url('./assets/js/jquery-3.4.1.js') ?>"></script>
    <script src="<?php echo base_url('./assets/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('./assets/js/bootstrap.min.js') ?>"></script>
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <h2>Login Admin</h2>
        <form method="post" action="<?php echo base_url('loginadmin/login')?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="usdrname" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>