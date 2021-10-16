<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>SPBU</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/logo/spbu.png')?>">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/forms/icheck/custom.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/charts/morris.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/extensions/unslider.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/weather-icons/climacons.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/tables/extensions/colReorder.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/tables/extensions/fixedHeader.dataTables.min.css">
  
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/css/components.min.css">
  <!-- END: Theme CSS-->

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/css/core/colors/palette-climacon.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/fonts/simple-line-icons/style.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/fonts/meteocons/style.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/css/pages/users.min.css">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/css/forms/selects/select2.min.css">
  <!-- END: Custom CSS-->

  <!-- BEGIN: Vendor JS-->
  <script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/vendors.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/ckeditor/ckeditor.js"></script>
  <!-- BEGIN Vendor JS-->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.toolbar.js/0.1.0/Leaflet.Toolbar.min.css" integrity="sha512-GA6tz0ONkXAXGUnZU9M7mMkiOiXuXis56gRc73qvS+hXP0Sgb/mXihcqs6haKhes6mMeCPIdopIDixMwnnd+Iw==" crossorigin="anonymous" />
	<!-- Make sure you put this AFTER Leaflet's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.toolbar.js/0.1.0/Leaflet.Toolbar.min.css" integrity="sha512-GA6tz0ONkXAXGUnZU9M7mMkiOiXuXis56gRc73qvS+hXP0Sgb/mXihcqs6haKhes6mMeCPIdopIDixMwnnd+Iw==" crossorigin="anonymous" />
	<!-- Make sure you put this AFTER Leaflet's CSS -->
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
	<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
	<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />

  <link href="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/sweetalert/sweetalert2.min.css" rel="stylesheet" />
  <script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/sweetalert/sweetalert2.min.js"></script>
  <script src="https://cdn.rawgit.com/serratus/quaggaJS/0420d5e0/dist/quagga.min.js"></script>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">