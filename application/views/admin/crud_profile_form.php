<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <title>Update Kota</title>
</head>

<body>
    <div class="container-fluid m-3">
        <form action="<?php echo base_url() . 'index.php/AdminController/updateProfile/' ?>" method="post">
            <div class="form-group">
                <input type="hidden" value="<?php echo $profile['username'] ?>" class="form-control" name="username"></input>
                <label for="name">Nama</label>
                <input type="text" value="<?php echo $profile['nama'] ?>" class="form-control" name="name"></input>
                <label for="email">Email</label>
                <input type="text" value="<?php echo $profile['email'] ?>" class="form-control" name="email"></input>
                <label for="phone">No.Telp</label>
                <input type="text" value="<?php echo $profile['phone_number'] ?>" class="form-control" name="phone"></input>
                <label for="kota">Kota</label>
                <input type="text" value="<?php echo $profile['kota'] ?>" class="form-control" name="kota"></input>
                <label for="password">Password</label>
                <input type="text" value="<?php echo $profile['password'] ?>" class="form-control" name="password"></input>
                <label for="role">Password</label>
                <input type="text" value="<?php echo $profile['role'] ?>" class="form-control" name="role"></input>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>