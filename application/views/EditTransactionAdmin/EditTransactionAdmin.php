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
    <form method="post" action="<?php echo base_url('/transaction/editForm') ?>">
        <input type="hidden" class="form-control" name="kode_transaksi" id="id" value="<?php echo $transaction[0]['kode_transaksi'] ?>">
        <input type="hidden" class="form-control" name="paket_periksa" id="id" value="<?php echo $transaction[0]['paket_periksa_id'] ?>">
        <input type="hidden" class="form-control" name="id_pasien" id="id" value="<?php echo $transaction[0]['id_pasien'] ?>">
        <div class="form-group">
            <label for="tanggal">Date Created</label>
            <input type="text" class="form-control" name="tanggal" id="date" value="<?php echo $transaction[0]['tanggal'] ?>" readonly>
        </div>
        <div class="form-group"> 
            <label for="pasien">Pasien</label>
            <input type="text" class="form-control" name="pasien" id="pasien" value="<?php echo $transaction[0]['pasien'] ?>" placeholder="Pasien">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" name="umur" id="umur" value="<?php echo $transaction[0]['umur'] ?>" placeholder="Umur">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" class="form-control">
                <option>Choose Gender...</option>
                <option <?php echo $transaction[0]['gender'] == 'L' ? 'selected' : ''?> value="L">L</option>
                <option <?php echo $transaction[0]['gender'] == 'P' ? 'selected' : ''?> value="P">P</option>
            </select>
        </div>
        <div class="form-group">
            <label for="phonenumber">Phone Number</label>
            <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Phone Number" value="<?php echo $transaction[0]['phone_number'] ?>">
        </div>
        <div class="form-group">
            <label for="vendor">Vendor</label>
            <select id="vendor" name="vendor" class="form-control">
                <option selected>Choose Vendor...</option>
                <?php foreach ($vendor as $key => $data) { ?>
                    <option  value="<?php echo $data['vendor_id'] ?>" <?php echo $transaction[0]['vendor_id'] == $data['vendor_id'] ? 'selected' : ''?>><?php echo $data['nama_vendor'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="kota">Kota</label>
            <select id="kota" name="kota" class="form-control">
            <option selected>Choose Kota...</option>
                <?php foreach ($kota as $key => $data) { ?>
                    <option value="<?php echo $data['kota_id']?>" <?php echo $data['kota_id'] == $transaction[0]['kota_id'] ? 'selected' : '' ?>><?php echo $data['nama_kota'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="username" value="<?php echo $transaction[0]['username'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="keterangan" value="<?php echo $transaction[0]['keterangan'] ?>">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control">
                <option selected>Choose Status...</option>
                <?php foreach ($status as $key => $data) {?>
                    <option value="<?php echo $data['status_id']?>" <?php echo $data['status_id'] == $transaction[0]['status_id'] ? 'selected' : '' ?>><?php echo $data['nama'] ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="" class="btn btn-secondary">Go Back</a>
    </form>
</body>
</html>