<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <title>CRUD Profile</title>
</head>

<body>
    <div class="container-fluid">
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Success!</h4>
                        Data <strong>berhasil</strong> <?= $this->session->flashdata('success'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('failed')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Request failed!</h4>
                        Data <strong>gagal</strong> <?= $this->session->flashdata('failed'); ?>.
                        <p class="mb-0">Periksa koneksi jaringan anda</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="container-fluid">
            <div class="table-responsive-sm">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>No.Telp</th>
                            <th>Kota</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($profiles as $profile) { ?>
                            <tr>
                                <th><?php echo $profile['username'] ?></th>
                                <td><?php echo $profile['nama'] ?></td>
                                <td><?php echo $profile['email'] ?></td>
                                <td><?php echo $profile['phone_number'] ?></td>
                                <td><?php echo $profile['kota'] ?></td>
                                <td><?php echo $profile['password'] ?></td>
                                <td><?php echo $profile['role'] ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'index.php/AdminController/editProfile/' . $profile['username'] ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?php echo base_url() . 'index.php/AdminController/deleteProfile/' . $profile['username'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>