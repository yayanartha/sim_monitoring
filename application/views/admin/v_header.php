<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="administrator sistem monitoring kinerja dosen">
    <meta name="author" content="safira">

    <title>Administrator Sistem Monitoring Kinerja Dosen</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo HTTP_CSS_PATH; ?>font-awesome.min.css" />
    <!-- Add custom CSS here -->
    <link href="<?php echo HTTP_CSS_PATH; ?>smkd.css" rel="stylesheet">
    <!-- JavaScript -->
    <script src="<?php echo HTTP_JS_PATH; ?>jquery.js"></script>
    <script src="<?php echo HTTP_JS_PATH; ?>bootstrap.min.js"></script>
    <script src="<?php echo HTTP_JS_PATH; ?>das.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
      <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>admin">Sistem Monitoring Kinerja Dosen</a>
        </div>
        <?php 
          // Define a default Page
          $pg = isset($page) && $page != '' ?  $page :'dash'  ;    
        ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li <?php echo  $pg =='dash' ? 'class="active"' : '' ?>>
              <a href="<?php echo base_url(); ?>admin/c_home"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li <?php echo  $pg =='sap' ? 'class="active"' : '' ?>>
              <a href="<?php echo base_url(); ?>admin/sap"><i class="fa fa-file"></i> SAP</a>
            </li>
            <li <?php echo  $pg =='jadwal' ? 'class="active"' : '' ?>>
              <a href="<?php echo base_url(); ?>admin/jadwal"><i class="fa fa-th-list"></i> Jadwal</a>
            </li>
            <li <?php echo  $pg =='tahunajaran' ? 'class="active"' : '' ?>>
              <a href="<?php echo base_url(); ?>admin/tahunajaran"><i class="fa fa-calendar"></i> Tahun Ajaran</a>
            </li>
            <li <?php echo  $pg =='user' ? 'class="active"' : '' ?>>
              <a href="<?php echo base_url(); ?>admin/c_user"><i class="fa fa-user"></i> User</a>
            </li>
            <li <?php echo  $pg =='matakuliah' ? 'class="active"' : '' ?>>
              <a href="<?php echo base_url(); ?>admin/matakuliah"><i class="fa fa-book"></i> Matakuliah</a>
            </li>
            <li <?php echo  $pg =='ruangan' ? 'class="active"' : '' ?>>
              <a href="<?php echo base_url(); ?>admin/ruangan"><i class="fa fa-map-marker"></i> Ruangan</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i> <?php echo $this->session->userdata('username') ?> <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>login/proses_logout"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        
        </div><!-- /.navbar-collapse -->
      </nav>
