<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/bootstrap.min.css' ?>" >
        <script src="dist/js/bootstrap.min.js" ></script>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script>
            $(document).ready(function () {

            $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                // open or close navbar
                $('#sidebar').toggleClass('active');
                // close dropdowns
                $('.collapse.in').toggleClass('in');
                // and also adjust aria-expanded attributes we use for the open/closed arrows
                // in our CSS
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

            });
        </script>

        <style>
            @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }
        .wrapper {
            display: flex;
            width: 100%;
        }

        #sidebar {
            width: 20%;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 999;
            color: #fff;
            transition: all 0.3s;
        }

            body {
             background: #e6e6e6;
            }

            p {
                font-size: 1.1em;
                font-weight: 300;
                line-height: 1.7em;
                color: #999;
            }

            a, a:hover, a:focus {
                color: inherit;
                text-decoration: none;
                transition: all 0.3s;
            }

            #sidebar {
                /* don't forget to add all the previously mentioned styles here too */
                background: white;
                color:black;
                transition: all 0.3s;
            }

            #sidebar .sidebar-header {
                padding: 20px;
                background:white;
            }

            #sidebar ul.components {
                padding: 20px 0;
            }

            #sidebar ul p {
                color: #fff;
                padding: 10px;
            }

            #sidebar ul li a {
                padding: 10px;
                padding-left: 20;
                padding-right: 30;
                font-size: 1.1em;
                display: block;
            }
            #sidebar ul li a:hover {
                color: #7386D5;
                background: #fff;
            }

            #sidebar ul li.active > a, a[aria-expanded="true"] {
                color:black;
            }
            ul ul a {
                font-size: 0.9em !important;
                padding-left: 30px !important;
                background:white;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h4>Ceklab Dashboard</h4>
                </div>
        
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#" data-toggle="collapse" aria-expanded="false" >Home</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cek Resiko</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Paket Periksa</a>
                    </li>
                    <li>
                        <a href="#">Transaksi</a>
                    </li>
                </ul>
                
                
            </nav>
            <!-- Page Content -->
            <div id="content" style="width: 80%; margin-left: 20%; height: auto;">
                
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid" style="width: 100%;">
                        <div class="row">
                            <div class="col col-md-1">
                                <div class="card" style="height: 42px; width: 42px;">
                                    <img src="assets/bx-home-heart.svg" alt="" style="width: 28px; height: 28px; margin: 5px;">
                                </div>
                            </div>
                            <h5 style="margin-top: 9px; margin-left: 30%;">Home</h5>
                        </div>
                        <button class="btn btn-primary" style="float:right;">Login</button>
                    </div>
                </nav>
                
                <div class="jumbotron" >
                    
                    <div class="container" style="margin-bottom:10%;">
                        <div class="row">
                            <div class="col col-md-4">
                                <div class="card" style="height:150px;">
                                    <div class="center">
                                        <div class="box">
                                            <img src="assets/bx-clinic.svg" alt="" style="width: 32px; height: 32px; margin-left:15px; margin-top: 15px;">
                                        </div>
                                        <div class="" style="margin-left:15px; margin-top: 15px;">
                                            <h4>Cek Resiko Covid-19</h4>
                                        </div>
                                        <button class="btn btn-link" style="margin-left:3px;">Check Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="card" style="height:150px;">
                                    <div class="">
                                        <div class="box">
                                            <img src="assets/bx-first-aid.svg" alt="" style="width: 32px; height: 32px; margin-left:15px; margin-top: 15px;">
                                        </div>
                                        <div class="" style="margin-left:15px; margin-top: 15px;">
                                            <h4>Paket Periksa</h4>
                                        </div>
                                        <button class="btn btn-link" style="margin-left:3px;">Check Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="card" style="height:150px;">
                                    <div class="">
                                        <div class="box">
                                            <img src="assets/bx-transfer-alt.svg" alt="" style="width: 32px; height: 32px; margin-left:15px; margin-top: 15px;">
                                        </div>
                                        <div class="" style="margin-left:15px; margin-top: 15px;">
                                            <h4>Transaksi</h4>
                                        </div>
                                        <button class="btn btn-link" style="margin-left:3px;">Check Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                            <div class="footer" style="margin-top: auto;">
                                <img src="assets/loving.svg" alt="" style="width: 300px;height:300px;">
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>