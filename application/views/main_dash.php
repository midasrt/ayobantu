<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ayobantu CMS</title>
    <meta name="description" content="Soundworks Inventory System">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link href="<?=base_url().'css/bootstrap.min.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url().'vendors/font-awesome/css/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?=base_url().'vendors/themify-icons/css/themify-icons.css'?>">
    <link rel="stylesheet" href="<?=base_url().'vendors/flag-icon-css/css/flag-icon.min.css'?>">
    <link rel="stylesheet" href="<?=base_url().'vendors/selectFX/css/cs-skin-elastic.css'?>">
    <link rel="stylesheet" href="<?=base_url().'vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css'?>">
    <link rel="stylesheet" href="<?=base_url().'vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css'?>">


    <link rel="stylesheet" href="<?=base_url().'assets/css/style.css'?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Ayobantu</a>
                <a class="navbar-brand hidden" href="./">AB</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?=base_url().'En/main_dash'?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a></li>
                    <h3 class="menu-title">Website Management</h3>
                    <li><a href="<?=base_url().'En/campaigns'?>"> <i class="menu-icon fa fa-calendar"></i>Campaigns</a></li>
                    <li><a href="<?=base_url().'En/donations'?>"> <i class="menu-icon fa fa-history"></i>Donations</a></li>
                    <li><a href="<?=base_url().'En/categories'?>"> <i class="menu-icon fa fa-clipboard"></i>Categories</a></li>
                    <li><a href="<?=base_url().'En/reports'?>"> <i class="menu-icon fa fa-book"></i>Reports</a></li>
                    <h3 class="menu-title">Management</h3>
                    <li><a href="<?=base_url().'En/user'?>"> <i class="menu-icon fa fa-address-card"></i>Users</a></li>
                    <li><a href="<?=base_url().'En/sysuser'?>"> <i class="menu-icon fa fa-industry"></i>System Users</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-rebel"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?=base_url().'images/admin.jpg'?>" alt="<?php echo $this->session->userdata('username'); ?>">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?=base_url().'En/logout'?>"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?php echo $crumb; ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><?php echo $crumb; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		
        <?php 
            $this->load->view("$page");

        ?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?=base_url().'js/jquery.min.js'?>"></script>
    <script src="<?=base_url().'vendors/popper.js/dist/umd/popper.min.js'?>"></script>
    <script src="<?=base_url().'js/bootstrap.min.js'?>"></script>
    <script src="<?=base_url().'assets/js/main.js'?>"></script>

    <script src="<?=base_url().'vendors/chart.js/dist/Chart.bundle.min.js'?>"></script>
    <script src="<?=base_url().'assets/js/dashboard.js'?>"></script>
    <script src="<?=base_url().'assets/js/widgets.js'?>"></script>

    <script src="<?=base_url().'vendors/datatables.net/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?=base_url().'vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js'?>"></script>
    <script src="<?=base_url().'vendors/datatables.net-buttons/js/dataTables.buttons.min.js'?>"></script>
    <script src="<?=base_url().'vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js'?>"></script>
    <script src="<?=base_url().'vendors/jszip/dist/jszip.min.js'?>"></script>
    <script src="<?=base_url().'vendors/pdfmake/build/pdfmake.min.js'?>"></script>
    <script src="<?=base_url().'vendors/pdfmake/build/vfs_fonts.js'?>"></script>
    <script src="<?=base_url().'vendors/datatables.net-buttons/js/buttons.html5.min.js'?>"></script>
    <script src="<?=base_url().'vendors/datatables.net-buttons/js/buttons.print.min.js'?>"></script>
    <script src="<?=base_url().'vendors/datatables.net-buttons/js/buttons.colVis.min.js'?>"></script>
    <script src="<?=base_url().'assets/js/init-scripts/data-table/datatables-init.js'?>"></script>

</body>

</html>
