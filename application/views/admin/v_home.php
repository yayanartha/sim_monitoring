<!-- Page Specific CSS -->
<link rel="stylesheet" href="<?php echo HTTP_CSS_PATH; ?>morris-0.4.3.min.css">

<!-- Page Specific Plugins -->
<script src="<?php echo HTTP_JS_PATH; ?>raphael-min.js"></script>
<script src="<?php echo HTTP_JS_PATH; ?>morris-0.4.3.min.js"></script>
<script src="<?php echo HTTP_JS_PATH; ?>chart-data-morris.js"></script>
    
<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Dashboard <small>Statistics Overview</small></h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Selamat Datang <b><?php echo $this->session->userdata('username') ?></b>! 
      </div>
    </div>
  </div><!-- /.row -->

</div><!-- /#page-wrapper -->