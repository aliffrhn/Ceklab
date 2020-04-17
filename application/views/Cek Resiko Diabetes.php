<!DOCTYPE html>
<html>
    <head>
        <title>Cek Resiko Diabetes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/cekresikodiabet.css'); ?>"> 
        <script type="text/javascript" src="<?php echo base_url('assets/script/ceklablogin.js'); ?>"></script>   
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
        <script type="text/javascript" src="<?php echo base_url('assets/script/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/script/popper.js');?>"></script>
    </head>
    <body>
        <div class="container-fluid bg-top">
            <div class="p-3">
                <div class="row align-items-center justify-content-left">
                    <div class="col-md-auto">
                        <div class="p-3 bg-white rounded box">
                            <ion-icon name="rocket-outline" id="rocket"></ion-icon>
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
                                            <h6 class="widget-heading mb-0">Apakah Pernah Diabetes Saat Mengandung ?</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0 list-group-item">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 leftCol">
                                                <button id="btnJawaban2_1" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                Tidak
                                                </button>
                                            </div>
                                            <div class="col-sm-6 rightCol">
                                                <button id="btnJawaban2_2" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
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
                                            <h6 class="widget-heading mb-0">Apakah Memiliki Kerabat Dekat Yang Diabet ?</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0 list-group-item">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 leftCol">
                                                <button id="btnJawaban2_1" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                Tidak
                                                </button>
                                            </div>
                                            <div class="col-sm-6 rightCol">
                                                <button id="btnJawaban2_2" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
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
                                            <h6 class="widget-heading mb-0">Apakah Anda Kemungkinan Punya Tekanan Darah Tinggi ?</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0 list-group-item">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 leftCol">
                                                <button id="btnJawaban2_1" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                Tidak
                                                </button>
                                            </div>
                                            <div class="col-sm-6 rightCol">
                                                <button id="btnJawaban2_2" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
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
                                            <h6 class="widget-heading mb-0">Apakah Anda Rutin Berolahraga Minimal 1 Minggu 1 Kali ?</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0 list-group-item">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 leftCol">
                                                <button id="btnJawaban2_1" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                Tidak
                                                </button>
                                            </div>
                                            <div class="col-sm-6 rightCol">
                                                <button id="btnJawaban2_2" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
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

                <div id="content7" style="display: none" class="row">
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
                                                <button id="btnJawaban2_2" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
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
                                                <button id="btnJawaban2_2" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
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

                <div id="content9" style="display: none" class="row">
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

                <div id="content9" style="display: none" class="mb-3 card">
                    <div class="card-header">Hasil Cek Diabetes</div>
                    <div id="labelPesan" class="card-body">Memperoses hasil...</div>
                </div>

            </div>
        </div>
        <script type="text/javascript">
            $( document ).ready(function() {
					var soal = 1;
                    var berat = 0;
                    var tinggi = 0;
                    var poin = [];
                    poin[0] = 0;
                    poin[1] = 0;
                    poin[2] = 0;
                    poin[3] = 0;
                    poin[4] = 0;
                    poin[5] = 0;
                    poin[6] = 0;
					$(".btnJawaban").on('click', function(event){
						$("#content" + soal).hide();
						soal++;
						$("#content" + soal).show();
					});

					$("#btnJawaban1_1").on('click', function(event){
                        poin[0] = 0;
					});
					$("#btnJawaban1_2").on('click', function(event){
						poin[0] = 2;
					});

					$("#btnJawaban2_1").on('click', function(event){
						poin[1] = 1;
					});
					$("#btnJawaban2_2").on('click', function(event){
						poin[1] = 0;
					});

					$("#btnJawaban3_1").on('click', function(event){
						poin[2] = 0;
					});
					$("#btnJawaban3_2").on('click', function(event){
						poin[2] = 1;
					});

					$("#btnJawaban4_1").on('click', function(event){
						poin[3] = 0;
					});
					$("#btnJawaban4_2").on('click', function(event){
						poin[3] = 1;
					});

					$("#btnJawaban5_1").on('click', function(event){
						poin[4] = 1;
					});
					$("#btnJawaban5_2").on('click', function(event){
						poin[4] = 0;
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
                        if(nilai < 25) poin[6] = 0;
                        else if(nilai >= 25 && nilai <= 30) poin[6] = 1;
                        else if(nilai >= 30 && nilai <= 30) poin[6] = 2;
                        else if(nilai > 40) poin[6] = 3;

                        var score = "";
                        var score_final = 0;
                        for(var i = 0 ; i < poin.length ; i++)
                        {
                            score += poin[i] + "";
                            if(i < poin.length-1)
                            {
                                score += "+";
                            }
                            score_final += poin[i];
                        }

                        $("#score").val(score);
                        $("#score_final").val(score_final);
                    });
                });
        </script>
    </body>
</html>