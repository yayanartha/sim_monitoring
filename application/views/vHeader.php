<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Monitoring Kinerja Dosen Ilkom">
    <meta name="author" content="Safira">
    <link rel="shortcut icon" href="<?php echo HTTP_CSS_PATH; ?>favicon.png">
    <title>Sistem Monitoring Kinerja Dosen Ilmu Komputer Universitas Udayana</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
      <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
    <![endif]-->
  	<script src="<?php echo HTTP_JS_PATH; ?>das.js"></script>
  </head>

  <body>
    <?php
      $pg = isset($page) && $page != '' ? $page :'home';    
    ?>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="<?php echo base_url(); ?>">Sistem Monitoring Kinerja Dosen</a>
        </div>

        <div class="navbar-collapse collapse">

          <ul class="nav navbar-nav">
            <li <?php echo  $pg =='home' ? 'class="active"' : '' ?>>
              <a href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li <?php echo  $pg =='about' ? 'class="active"' : '' ?>>
              <a href="<?php echo base_url(); ?>aboutus">About</a>
            </li>
            <li <?php echo  $pg =='contact' ? 'class="active"' : '' ?>>
              <a href="<?php echo base_url(); ?>contactus">Contact</a></li>
            <li <?php echo  $pg =='signup' ? 'class="active"' : '' ?>>
              <a href="<?php echo base_url(); ?>signup">SignUp</a></li>
          </ul>

        </div><!--/.navbar-collapse -->
      </div>
    </div>