<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css')?>" />
    
    <!-- js -->
    <script src="<?php echo base_url('./assets/js/jquery-3.4.1.js') ?>"></script>
    <script src="<?php echo base_url('./assets/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('./assets/js/bootstrap.min.js') ?>"></script>
</head>
<body>
    <?php var_dump($status) ?>
    <form method="post" action="<?php base_url('') ?>">
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="date" value="<?php echo $transaction[0]['tanggal'] ?>" min="2020-01-01">
        </div>
        <div class="form-group"> 
            <label for="pasien">Pasien</label>
            <input type="text" class="form-control" id="pasien" value="<?php echo $transaction[0]['pasien'] ?>" placeholder="Pasien">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" id="umur" value="<?php echo $transaction[0]['umur'] ?>" placeholder="Umur">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" class="form-control">
                <option selected>Choose Gender...</option>
                <option>L</option>
                <option>P</option>
            </select>
        </div>
        <div class="form-group">
            <label for="phonenumber">Phone Number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number" value="<?php echo $transaction[0]['phone_number'] ?>">
        </div>
        <div class="form-group">
            <label for="vendor">Vendor</label>
            <select id="vendor" class="form-control">
                <option selected>Choose Vendor...</option>
                <?php foreach ($vendor as $key => $data) { ?>
                    <option value="<?php echo $data['vendor_id'] ?>"><?php echo $data['nama_vendor'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="kota">Kota</label>
            <select id="kota" class="form-control">
            <option selected>Choose Kota...</option>
                <?php foreach ($kota as $key => $data) { ?>
                    <option value="<?php echo $data['kota_id'] ?>"><?php echo $data['nama_kota'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Username</label>
            <input type="text" class="form-control" id="username" placeholder="username" value="<?php echo $transaction[0]['username'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" placeholder="keterangan" value="<?php echo $transaction[0]['keterangan'] ?>">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" class="form-control">
                <option selected>Choose Status...</option>
                <?php foreach ($status as $key => $data) { ?>
                    <option value="<?php echo $data['status_id'] ?>"><?php echo $data['nama'] ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>