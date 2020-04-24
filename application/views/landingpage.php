<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/bootstrap.min.css' ?>" >
        <script src="<?php echo base_url().'assets/dist/js/bootstrap.min.js' ?>" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" integrity="sha256-Ikk5myJowmDQaYVCUD0Wr+vIDkN8hGI58SGWdE671A8=" crossorigin="anonymous"></script>
        <style>
            .countdown {
              font-size: 40px;
              margin-top: 0px;
            }
        </style>
    </head>
    <body>
        <div id="jumbotron">
            <h6 class="text-center" style="margin-top: 120px; font-weight:700; color: #2D9CDB;">MEMBER</h6>
            <h3 class="text-center" style="margin-bottom: 40px;">Keuntungan Member</h3>
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="elementor-1">
                            <center><div class="" style="margin-bottom: 10px;;"><img src="assets/01.svg" alt="" ></div></center>
                            <h3 class="text-center" style="font-weight: 500; color: #333333; font-size: 24px;">Free Home Service Datang <br> ke Rumah</h3>
                            <p class="text-center" style="color: #828282;">Lupakan ribetnya janjian home service. Semua tertangani instan dan mudah. GRATIS!</p>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="elementor-1">
                            <center><div class="" style="margin-bottom: 10px;;"><img src="assets/02.svg" alt="" ></div></center>
                            <h3 class="text-center" style="font-weight: 500; color: #333333;font-size: 24px;">Diskon 10% untuk Semua <br> Pemeriksaan</h3>
                            <p class="text-center " style="color: #828282;">Bandingkan harga dan reputasi seluruh laboratorium, ada di genggaman Anda</p>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="elementor-1">
                            <center><div class="" style="margin-bottom: 10px;;"><img src="assets/03.svg" alt="" ></div></center>
                            <h3 class="text-center" style="font-weight: 500; color: #333333; font-size: 24px;">Kami Siap Mendampingi <br> Anda</h3>
                            <p class="text-center" style="color: #828282;"">Susah membaca hasil lab? Tenang,kami siap mendampingi untuk membaca hasil lab anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
       <div id="jumbotron">
        <h6 class="text-center" style="margin-top: 120px; font-weight:700; color: #2D9CDB;">PARTNER</h6>
        <h3 class="text-center" style="margin-bottom: 30px;">As Seen As</h3>
        <div class="container">
            <div class="row" style="padding-left: 150px;">
                <div class="col-2">
                    <img src="assets/Cnn.png" alt="">
                </div>
                <div class="col-2">
                    <img src="assets/merah.png" alt="">
                </div>
                <div class="col-2">
                    <img src="assets/bekraf.png" alt="">
                </div>
                <div class="col-2">
                    <img src="assets/viva.png" alt="">
                </div>
                <div class="col-2">
                    <img src="assets/sindo.png" alt="">
                </div>
            </div>
            <div class="row" style="margin-top:15px; margin-left: 220px; margin-right: 220px;">
                <div class="col-3" style="">
                    <img src="assets/republika.png" alt="">
                </div>
                <div class="col-3" style="">
                    <img src="assets/selular.png" alt="">
                </div>
                <div class="col-3" style="">
                    <img src="assets/mime.png" alt="">
                </div>
                <div class="col-3" style="">
                    <img src="assets/liputan.png" alt="">
                </div>
             </div>
       </div>
        
       <?php 
        foreach($data as $value){

        
       ?>
       <div id="jumbotron">
            <div class="container" style="margin-top: 120px;">
                <div class="row">
                    <div class="col col-md-6">
                        <img src="<?php echo $value['photo_url']?>" alt="" style="width: 350px; height: 400px;">
                        <h3 style="margin-top:25px;">Pendaftaran Ditutup Pada :</h3>
                        <div id="<?php echo $value['pendaftaran_id'] ?>" data-countdown="<?php echo $value['waktu_penutupan'] ?>" class="countdown">
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <h3>Mulai Hidup sehat? Ikut CekLab di <?php echo $value['nama_kota'] ?> Sekarang</h3>
                        <form action="<?php echo base_url().'index.php/User/insert' ?>" method="post">
                        <div class="form-group">
                            <label for="usr">Nama:</label>
                            <input type="text" class="form-control" id="usr" name="nama">
                          </div>
                          <div class="form-group">
                            <label for="umr">Umur</label>
                            <input type="text" class="form-control" id="umr" name="umur">
                          </div>
                          <div class="form-check-inline">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optradio">Laki-laki
                            </label>
                          </div>
                          <div class="form-check-inline">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optradio">Perempuan
                            </label>
                          </div>
                          <div class="form-group" style="margin-top: 20px;">
                            <label for="alamat">Alamat:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                          </div>
                          <div class="form-group">
                            <label for="telp">Nomor Telephone Whatsapp</label>
                            <input type="text" class="form-control" id="telp" name="telp">
                          </div>
                          <button class="btn btn-primary" style="background-color: #2D9CDB;">Send</button>
                          </form>
                        </div>
                </div>
            </div>
       </div>
       <?php }
       ?>
       
       <div id="jumbotron" style="margin-top: 120px;">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <h5 style="margin-bottom: 20px;">Tagging : </h5>
                        <p style="color:#828282 ;">Cek Gula darah <br> Cek kadar gula <br> Cek laboratorium <br> Cek Laboratorium Gula Darah <br> Diabetes <br> Gula Darah Puasa <br> Gula Darah 2 jam p p <br> hba1c <br> Pengecekan Diabetes Akurat</p>
                    </div>
                    <div class="col col-md-4">
                        <h5 style="margin-bottom: 20px;">Saran Dokter Gratis : </h5>
                        <p style="color:#828282 ;">Makan Enak Dengan Diabetes <br> Orang Diabet Boleh Makan Apa Saja <br> Pantangan Orang Diabet <br>Olahraga Khusus Orang Diabet</p>
                    </div>
                    <div class="col col-md-4">
                        <h5 style="margin-bottom: 20px;">Lihat Juga : </h5>
                        <p style="color:#828282 ;">Makan Enak Dengan Kolesterol <br> Kolesterol Boleh Makan Apa Saja <br> Kolesterol Tinggi Bahaya? Belum Tentu! <br>Hidup Enak Dengan Kolesterol <br>Tekanan Darah Tinggi Itu Apa? <br>Penyebab Tekanan Darah Tinggi <br>Tekanan Darah Tinggi Berbahaya <br>Makan Asin Bersama Tekanan Darah Tinggi</p>
                    </div>
                </div>
            </div>
       </div>

       <div id="-page-footer font-small dark" style="background-color:#1b252f;">
            <div class="container">
                <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                    <center style="">
                        <h2 style="color: white;">ceklab</h2>
                        <p style="color: white; margin-top: 25px;">Ucapkan selamat tinggal bagi periksa darah yang membingungkan <br> dan mahal. <br> Periksa lab,ingat Ceklab.id!</p>
                    </center>
                </div>

                <div class="ul">
                    <div class="li">
                        <center>
                            <div class="row">
                                <div class="col">
                                    <div class="row d-flex justify-content-center">
                                        <img src="assets/bx-phone.svg" alt="" style="color: white; margin-right: 10px; margin-bottom: 10px;">
                                        <p style="color :white">+62 813-5351-8888</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex justify-content-center">
                                        <img src="assets/bx-map.svg" alt="" style="color: white; margin-right: 10px; margin-bottom: 10px;">
                                        <p style="color :white">Jalan Tais Nasution no 41, Surabaya</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex justify-content-center">
                                        <img src="assets/bx-time.svg" alt="" style="color: white; margin-right: 10px; margin-bottom: 10px;">
                                        <p style="color :white">08.00 - 21.00</p>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: center; color: white; font-weight: 100; font-size: small; margin-bottom: auto;">2019 All Rights Reserved By PT Mediva Digital Inovasi</p><br>
                        </center>
                    </div>
                </div>
            </div>
       </div>
       <script>
        $(function(){
        $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('%Dd %Hh %Mm %Ss'));
                });
            });
        });
        </script>
    </body>
</html>