<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css')?>" />
    
    <!-- js -->
    <script src="<?php echo base_url('./assets/js/jquery-3.4.1.js') ?>"></script>
    <script src="<?php echo base_url('./assets/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('./assets/js/bootstrap.min.js') ?>"></script>
</head>
<body>
    <!-- <div class="container" style="margin-top: 50px"> -->
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Pasien</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Vendor</th>
                    <th scope="col">Kota</th>
                    <th scope="col">username</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <!--  -->
                <?php foreach($transaction as $key => $data){ ?>
                    <tr>
                        <th scope="row"><?php echo $data['kode_transaksi']?></th>
                        <td><?php echo $data['tanggal'] ?></td>
                        <td><?php echo $data['pasien'] ?></td>
                        <td><?php echo $data['umur'] ?></td>
                        <td><?php echo $data['gender'] ?></td>
                        <td><?php echo $data['phone_number'] ?></td>
                        <td><?php echo $data['nama_vendor'] ?></td>
                        <td><?php echo $data['nama_kota'] ?></td>
                        <td><?php echo $data['username'] ?></td>
                        <td><?php echo $data['keterangan'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><a class="btn btn-primary" href="<?php echo base_url('transaction/edit/').$data['kode_transaksi'] ?>">Edit</a><a class="btn btn-danger" href="<?php echo base_url('transaction/delete/').$data['kode_transaksi'] ?>">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <!-- </div> -->
</body>
</html>