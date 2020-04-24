<!DOCTYPE html>
<html>
    <head>
        <title>Cek Resiko Diabetes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/cekresikodiabet.css'); ?>">   
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
        <script type="text/javascript" src="<?php echo base_url('assets/script/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/script/popper.js');?>"></script>
        <script src="<?php echo ('https://unpkg.com/ionicons@5.0.0/dist/ionicons.js'); ?>"></script>
    </head>
    <body>
        <!-- Include Sidebar Navbar -->
        <?php $this->load->view('Navbar/navbar') ?>
        <div class="container-fluid bg-top">
            <div class="p-3">
                <div class="row align-items-center justify-content-left">
                    <div class="col-md-auto">
                        <div class="p-3 bg-white rounded box">
                            <img src="../assets/bx-clinic.svg" alt="" style="width: 32px; height: 32px;">
                        </div>
                    </div>
                    <div class="col pt-3 align-self-center">
                        <h5 class="title-bar">Cek Resiko Diabetes</h5>
                        <p class="subtitle-bar">Penyakit yang menjadi pembunuh nomor 1 bersama Jantung dan Kanker</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-bottom">
            <div class="p-5">

                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div id="content1" class="row">
                            <div class="col-sm-12 col-md-12 col-xl-12">
                                <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                                    <ul class="list-group list-group-flush quest">
                                        <li class="list-group-item">
                                            <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                                <div class="text-center">
                                                    <h6 class="widget-heading mb-0 q-head">Berapa Umur Anda ?</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-0 list-group-item">
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6 leftCol">
                                                        <button id="btnJawaban1_1" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                            Dibawah 40
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 rightCol">
                                                        <button id="btnJawaban1_2" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                            Diatas 40
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>

                <div id="content2" style="display: none" class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                        <div class="text-center">
                                            <h6 class="widget-heading mb-0">Jenis Kelamin Anda ?</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0 list-group-item">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 leftCol">
                                                <button id="btnJawaban2_1" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                Laki-laki
                                                </button>
                                            </div>
                                            <div class="col-sm-6 rightCol">
                                                <button id="btnJawaban2_2" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
                                                Perempuan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>    
                </div>

                <div id="content3" style="display: none" class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                        <div class="text-center">
                                            <h6 class="widget-heading mb-0">Apakah Memiliki Kerabat Dekat Yang Diabet ?</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0 list-group-item">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 leftCol">
                                                <button id="btnJawaban3_1" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                Tidak
                                                </button>
                                            </div>
                                            <div class="col-sm-6 rightCol">
                                                <button id="btnJawaban3_2" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
                                                Iya
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>    
                </div>

                <div id="content4" style="display: none" class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                        <div class="text-center">
                                            <h6 class="widget-heading mb-0">Apakah Anda Kemungkinan Punya Tekanan Darah Tinggi ?</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0 list-group-item">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 leftCol">
                                                <button id="btnJawaban4_1" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                Tidak
                                                </button>
                                            </div>
                                            <div class="col-sm-6 rightCol">
                                                <button id="btnJawaban4_2" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
                                                Iya
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>    
                </div>

                <div id="content5" style="display: none" class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                        <div class="text-center">
                                            <h6 class="widget-heading mb-0">Apakah Anda Rutin Berolahraga Minimal 1 Minggu 1 Kali ?</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0 list-group-item">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 leftCol">
                                                <button id="btnJawaban5_1" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                Tidak
                                                </button>
                                            </div>
                                            <div class="col-sm-6 rightCol">
                                                <button id="btnJawaban5_2" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
                                                Iya
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>    
                </div>

                <div id="content6" style="display: none" class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                        <div class="text-center">
                                            <h6 class="widget-heading mb-0">Berapakah Berat Badan Anda?</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0 list-group-item">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 leftCol">
                                                <input type="number" id="txtBerat" placeholder="Berat Badan (kg)" class="form-control">
                                            </div>
                                            <div class="col-sm-6 rightCol">
                                                <button id="btnJawaban6" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
                                                OK
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>    
                </div>

                <div id="content7" style="display: none" class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                        <div class="text-center">
                                            <h6 class="widget-heading mb-0">Berapakah Tinggi Badan Anda?</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0 list-group-item">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 leftCol">
                                                <input  type="number" id="txtTinggi" placeholder="Tinggi Badan (cm)" class="form-control">
                                            </div>
                                            <div class="col-sm-6 rightCol">
                                                <button id="btnJawaban7" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
                                                OK
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>    
                </div>

                <div id="content8" style="display: none" class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                            <ul class="list-group list-group-flush">
                                <form action="#" id="formSubmit" method="" accept-charset="utf-8">
                                <input id="score" type="hidden" name="score">
                                <input id="score_final" type="hidden" name="score_final">
                                <input type="hidden" name="id_dokter" value="1354">
                                    <li class="list-group-item">
                                        <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                            <div class="text-center">
                                                <h6 class="widget-heading mb-0">Sudah siap melihat hasil cek resiko Anda ?</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="p-0 list-group-item">
                                        <div class="grid-menu grid-menu-2col">
                                            <div class="no-gutters row">
                                                <div class="col-sm-12 resultCol">
                                                    <button type="submit" id="btnJawaban8" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
                                                    Lihat Hasil
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </form>                                    
                             </ul>
                        </div>
                    </div>    
                </div>

                <div id="contentResult" style="display: none" class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                        <div class="text-center">
                                            <h6 id="labelTitle" class="widget-heading mb-0"><b>Menghitung Hasil Cek Diabetes Anda..</b></h6>
                                        </div>
                                    </div>
                                </li>
                                <li id="contentMain" style="display: none" class="list-group-item">
                                    <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                        <div class="text-center">
                                            <h6 id="labelHeader" class="widget-heading mb-0"><b>Header</b></h6>
                                            <br>
                                            <h6 id="labelIsi" class="widget-heading mb-0 text-info">Isi</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>    
                </div>

            </div>
        </div>
        <script type="text/javascript">
            $( document ).ready(function() {
					var soal = 1;
                    var berat = 0;
                    var tinggi = 0;
                    var positif = 0;
                    var negatif = 0;
					$(".btnJawaban").on('click', function(event){
						$("#content" + soal).hide();
						soal++;
						$("#content" + soal).show();
					});

					$("#btnJawaban1_1").on('click', function(event){
                        negatif += 1;
					});
					$("#btnJawaban1_2").on('click', function(event){
						positif += 1;
					});

					$("#btnJawaban2_1").on('click', function(event){
						positif += 1;
					});
					$("#btnJawaban2_2").on('click', function(event){
						negatif += 1;
					});

					$("#btnJawaban3_1").on('click', function(event){
						negatif += 1;
					});
					$("#btnJawaban3_2").on('click', function(event){
						positif += 1;
					});

					$("#btnJawaban4_1").on('click', function(event){
						negatif += 1;
					});
					$("#btnJawaban4_2").on('click', function(event){
						positif += 1;
					});

					$("#btnJawaban5_1").on('click', function(event){
						positif += 1;
					});
					$("#btnJawaban5_2").on('click', function(event){
						negatif += 1;
					});

					$("#btnJawaban6").on('click', function(event){
						berat = $("#txtBerat").val();
					});
					
					$("#btnJawaban7").on('click', function(event){
						tinggi = $("#txtTinggi").val();
					});

                    $("#btnJawaban8").on('click', function(event){
                        var nilai = (tinggi / 100) * (tinggi / 100);
                        nilai = berat / nilai;
                        if(nilai < 25) negatif += 1;
                        else if(nilai >= 25 && nilai <= 30) positif += 1;
                        else if(nilai >= 30 && nilai <= 30) positif += 1;
                        else if(nilai > 40) positif += 1;
                    });

                    $("form#formSubmit").submit(function(e) {
                        e.preventDefault();  
                        if (positif > negatif){
                                $('#labelTitle').html("<b>Hasil Cek Diabetes</b>");
                                $('#labelHeader').html("Anda termasuk kedalam kategori <b>WASPADA.<b>");
                                $('#labelIsi').html("Yuk segera terapkan pola hidup sehat, hindari makanan yang mengundang diabetes segera mungkin, rutin berolahraga.");
                                $('#contentMain').show();

                        } else {
                                $('#labelTitle').html("<b>Hasil Cek Diabetes</b>");
                                $('#labelHeader').html("Anda termasuk kedalam kategori <b>AMAN.</b>");
                                $('#labelIsi').html("Tetap terapkan pola hidup sehatnya ya.");
                                $('#contentMain').show();

                        };
                        $('#contentResult').show();
                    });
                });
        </script>
    </body>
</html>