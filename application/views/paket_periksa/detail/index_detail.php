<?php $data = $package[0]; ?>
<div class="container-fluid">
    <div class="row pt-5 pr-3 pl-3 pb-3">
        <div class="col-md-8">
            <div class="card mb-3 shadow-card">
                <h6 class="card-header">PAKET</h6>
                <div class="card-body">
                    <h2><?php echo $data['judul'] ?><br> <strike><?php echo $data['harga']?></strike> -> <?php echo $data['harga_diskon']?></h2>
                    <p><?php echo $data['deskripsi']?></>
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
                    <div class="container image-check align-items-center justify-content-center">

                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover table-striped p-0">
                        <thead>
                            <tr>
                                <th>Pemeriksaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DARAH LENGKAP + LED</td>
                            </tr>
                            <tr>
                                <td>CRP KUANTITATIF</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mb-3 shadow-card">
                <h6 class="card-header">VENDOR LAB</h6>
                <div class="overlays container p-0">
                    <div class="container p-0 image-check-2 align-items-center justify-content-center">
                        <div class="card-data">
                            <h4>Prosperk Lab</h4>
                            <p>Jl. Dukuh Kupang XXV No.16, Dukuh Kupang Dukuh Pakis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>