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
        padding-left: 20px;
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

<!-- Sidebar -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h4>Ceklab Dashboard</h4>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="<?php echo base_url('Dashboard/index')?>"  aria-expanded="false">Home</a>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cek Resiko</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="<?php echo base_url('ResikoDiabetes/index')?>">Diabetes</a>
                </li>
                <li>
                    <a href="#">COVID-19</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Paket Periksa</a>
        </li>
        <li>
            <a href="<?php echo base_url('Transaction/index')?>">Transaksi</a>
        </li>
        <li>
            <a href="<?php echo base_url('Login/logout')?>" style="color: grey">Logout</a>
        </li>
    </ul>
</nav>

<div id="content" style="width: 80%; margin-left: 20%; height: auto;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 2px 2px -2px rgba(0,0,0,.6);">
        <div class="container-fluid" style="width: 100%;">
            <div class="row">
            </div>
            <?php
                if($this->session->userdata('username')){
            ?>
                <button class="btn btn-secondary" style="float:right;">Dah Login Kok</button>
            <?php
                }else{
            ?>
                <button class="btn btn-primary" style="float:right;" disabled>Login</button>
            <?php
                }
            ?>
        </div>
    </nav>