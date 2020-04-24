<!DOCTYPE html>
<html>
    <head>
        <title>Cek Resiko COVID-19</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/cekresikocov19.css'); ?>">   
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
        <script type="text/javascript" src="<?php echo base_url('assets/script/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/script/popper.js');?>"></script>
        <script src="<?php echo ('https://unpkg.com/ionicons@5.0.0/dist/ionicons.js'); ?>"></script>
    </head>
    <body>
        <!-- Navbar Sidebar -->
        <?php $this->load->view('Navbar/navbar') ?>
        <div class="container-fluid bg-top">
            <div class="p-3">
                <div class="row align-items-center justify-content-left">
                    <div class="col-md-auto">
                        <div class="p-3 bg-white rounded box">
                            <ion-icon name="rocket-outline" id="rocket"></ion-icon>
                        </div>
                    </div>
                    <div class="col pt-3 align-self-center">
                        <h5 class="title-bar">Cek Resiko COVID-19</h5>
                            <p class="subtitle-bar">Virus Terbaru 2019 Yang Telah Menular Hingga Ke Seluruh Dunia</p>
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
                                                    <h6 class="widget-heading mb-0 ">Apa sedang / pernah merasa demam, menggigil (suhu 38° C atau lebih tinggi) selama 14 hari terakhir ?</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-0 list-group-item">
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6 leftCol">
                                                        <button id="btnJawaban1_1" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                            Tidak
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 rightCol">
                                                        <button id="btnJawaban1_2" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
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
                    </div>
                </div>

                <div id="content2" style="display: none" class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                        <div class="text-center">
                                            <h6 class="widget-heading mb-0">Apa Anda memiliki gejala batuk / pilek / nyeri tenggorokan ?</h6>
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

                <div id="content3" style="display: none" class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                        <div class="text-center">
                                            <h6 class="widget-heading mb-0">Apa Anda merasakan sesak saat bernafas ? Tersengal sengal, merasa berat</h6>
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
                                            <h6 class="widget-heading mb-0">Apa Anda berdomisili, atau memiliki riwayat perjalanan ke kota / negara yang terjangkit COVID 19 ?</h6>
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
                                            <h6 class="widget-heading mb-0">Apa Anda pernah kontak erat dengan orang yang ternyata positif COVID-19 ?</h6>
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
                                            <h6 class="widget-heading mb-0">Apa Anda pernah mengunjungi fasilitas kesehatan yang berhubungan dengan pasien positif COVID 19 ?</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0 list-group-item">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 leftCol">
                                                <button id="btnJawaban6_1" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                Tidak
                                                </button>
                                            </div>
                                            <div class="col-sm-6 rightCol">
                                                <button id="btnJawaban6_2" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
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
                                            <h6 class="widget-heading mb-0">Apa Anda pernah melakukan perjalanan ke luar negeri atau kontak dengan orang yang baru dari luar negeri selama 14 hari terakhir ?</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0 list-group-item">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 leftCol">
                                                <button id="btnJawaban7_1" class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link btnJawaban">
                                                Tidak
                                                </button>
                                            </div>
                                            <div class="col-sm-6 rightCol">
                                                <button id="btnJawaban7_2" class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link btnJawaban">
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
                                            <h6 id="labelTitle" class="widget-heading mb-0"><b>Menghitung Hasil Cek COVID-19 Anda...</b></h6>
                                        </div>
                                    </div>
                                </li>
                                <li id="contentMain" style="display: none" class="list-group-item">
                                    <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                        <div class="text-center">
                                            <h6 id="labelHeader" class="widget-heading mb-0"><b>Header</b></h6>
                                            <h6 id="labelIsi" class="widget-heading mb-3">Isi</h6>
                                            <h6 id="labelSaran" class="widget-heading mb-0 text-info">Saran</h6>
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
                var jwbYa = 0;
                var jwbTidak = 0;
                $(".btnJawaban").on('click', function(event){
                    $("#content" + soal).hide();
                    soal++;
                    $("#content" + soal).show();
                });

                    $("#btnJawaban1_1").on('click', function(event){
                        jwbTidak += 1;
					});
					$("#btnJawaban1_2").on('click', function(event){
						jwbYa += 1;
					});

					$("#btnJawaban2_1").on('click', function(event){
						jwbTidak += 1;
					});
					$("#btnJawaban2_2").on('click', function(event){
						jwbYa += 1;
					});

					$("#btnJawaban3_1").on('click', function(event){
						jwbTidak += 1;
					});
					$("#btnJawaban3_2").on('click', function(event){
						jwbYa += 1;
					});

					$("#btnJawaban4_1").on('click', function(event){
						jwbTidak += 1;
					});
					$("#btnJawaban4_2").on('click', function(event){
						jwbYa += 1;
					});

					$("#btnJawaban5_1").on('click', function(event){
						jwbTidak += 1;
					});
					$("#btnJawaban5_2").on('click', function(event){
						jwbYa += 1;
					});

					$("#btnJawaban6_1").on('click', function(event){
						jwbTidak += 1;
					});
					$("#btnJawaban6_2").on('click', function(event){
						jwbYa += 1;
					});

					$("#btnJawaban7_1").on('click', function(event){
                        jwbTidak += 1;
                    });
                    $("#btnJawaban7_2").on('click', function(event){
                        jwbYa += 1;
                    });

                    $("#btnJawaban8").on('click', function(event){
                        
                    });

                    $("form#formSubmit").submit(function(e) {
                        e.preventDefault();  
                        if (jwbYa > jwbTidak){
                                $('#labelTitle').html("<b>Hasil Cek COVID-19</b>");
                                $('#labelHeader').html("<b>Anda termasuk kedalam kategori PENGAWASAN. </b>");
                                $('#labelIsi').html("Segera gunakan masker dan isolasi diri masing-masing, jangan khawatir tetap #dirumahaja");
                                $('#labelSaran').html('Saran : <br>Disarankan langsung mengambil pemeriksaan COVID 19 di lokasi terdekat');
                                $('#contentMain').show();
                        } else {
                                $('#labelTitle').html("<b>Hasil Cek COVID-19</b>");
                                $('#labelHeader').html("<b>Anda termasuk kedalam kategori AMAN. </b>");
                                $('#labelIsi').html("Walaupun aman, tetap jangan lengah, jaga keluarga tercinta dengan #dirumahaja.");
                                $('#labelSaran').html('Saran : Simpan nomor WA hotline virus corona untuk berjaga-jaga dan berbagi info.');
                                $("#score_final").show();
                                $('#contentMain').show();
                        }
                        $('#contentResult').show();
                    });
             });
        </script>
    </body>
</html>