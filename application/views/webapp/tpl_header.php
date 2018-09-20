<?php
/**
 * Created by IntelliJ IDEA.
 * User: hvo
 * Date: 28.08.18
 * Time: 11:02
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons:200,200i,300,300i,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:200,200i,300,300i,400|Montserrat:200,200i,300,300i,400|Raleway:200,200i,300,300i,400">

    <!-- Title -->
    <title>ISSILOO | Homepage</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>webresources/img/core-img/favicon.ico">
    <!-- Core Stylesheet -->
    <link href="<?php echo base_url(); ?>webresources/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>webresources/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="<?php echo base_url(); ?>webresources/css/responsive.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="<?php echo base_url(); ?>webresources/css/animate.css" rel="stylesheet">
    <!-- Hover CSS -->
    <link href="<?php echo base_url(); ?>webresources/css/hover-min.css" rel="stylesheet">
    <!-- Icomoon Icon Fonts-->
    <link href="<?php echo base_url(); ?>webresources/css/icomoon.css" rel="stylesheet">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>webresources/css/magnific-popup.css">

    <!-- Multi-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>webresources/plugin/multi-level-sidebar/demo/demo.css">

</head>


<body>
<!-- Preloader Start -->
<div id="preloader">
    <div class="colorlib-load"></div>
</div>

<?php $this->load->view('webapp/tpl_navigation'); ?>