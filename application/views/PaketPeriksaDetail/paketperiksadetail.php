<?php $package = $package[0]; ?>
<div class="container-fluid">
    <div class="row pt-5 pr-3 pl-3 pb-3">
        <div class="col-md-8">
            <div class="card mb-3 shadow-card">
                <h6 class="card-header">PAKET</h6>
                <div class="card-body">
                    <h2><?php echo $package['judul'] ?><br> <strike><?php echo $package['harga'] ?></strike> -> <?php echo $package['harga_diskon'] ?></h2>
                    <?php echo $package['deskripsi'] ?>
                </div>
                <div class="card-footer">
                    <form action="" method="">
                        <button type="submit" class="btn btn-glow" aria-expanded="false">Pesan Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3 shadow-card">
                <h6 class="card-header">PEMERIKSAAN</h6>
                <div class="overlays container p-0">
                    <div class="container image-check align-items-center justify-content-center" style="background-image: url('<?php echo $package['photo_url']?>');"> </div> </div> <div class="card-body p-0">
                        <table class="table table-hover table-striped p-0">
                            <thead>
                                <tr>
                                    <th>Pemeriksaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $npemeriksaan = explode("|", $pemeriksaan[0]['nama_pemeriksaan']);
                                foreach ($npemeriksaan as $nama) {
                                ?>
                                    <tr>
                                        <td><?php echo $nama ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mb-3 shadow-card">
                    <h6 class="card-header">VENDOR LAB</h6>
                    <div class="overlays container p-0">
                        <div class="container p-0 image-check-2 align-items-center justify-content-center">
                            <div class="card-data">
                                <h4><?php echo $vendor[0]['nama_vendor'] ?></h4>
                                <p><?php echo $vendor[0]['alamat_vendor'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>