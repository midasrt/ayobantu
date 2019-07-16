<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <title>Ayobantu</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ayobantu Website">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url().'css/bootstrap.min.css'?>">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="<?=base_url().'css/themify-icons.css'?>">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="<?=base_url().'css/owl.carousel.min.css'?>">
    <!-- Main css -->
    <link href="<?=base_url().'css/style.css'?>" rel="stylesheet">
    <link href="<?=base_url().'css/customHM.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url().'vendors/font-awesome/css/font-awesome.min.css'?>">

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">


<?php $this->load->view($page); ?>


    <!-- jQuery and Bootstrap -->
    <script src="<?=base_url().'js/jquery.min.js'?>"></script>
    <script src="<?=base_url().'js/bootstrap.bundle.min.js'?>"></script>
    <!-- Plugins JS -->
    <script src="<?=base_url().'js/owl.carousel.min.js'?>"></script>
    <!-- Custom JS -->
    <script src="<?=base_url().'js/script.js'?>"></script>

</body>

</html>
