<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>DOSEN</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo HTTP_CSS_PATH; ?>font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <!-- <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- DATA TABLES -->
    <link href="<?php echo HTTP_PLUGINS_PATH; ?>datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo HTTP_CSS_PATH; ?>AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo HTTP_CSS_PATH; ?>skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="#" class="logo"><b>ILKOM</b> MKD</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo HTTP_IMG_PATH; ?>user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Pio Pratama</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo HTTP_IMG_PATH; ?>user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Pio Pratama - Web Developer
                      <small>Member since Nov. 2015</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo site_url('c_login/proses_logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo HTTP_IMG_PATH; ?>user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Pio Pratama</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-table"></i> <span>Data sap</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Table SAP
            <small>advanced tables sap</small>
            
            <?php echo $this->session->flashdata('pesan'); ?>

            <!-- Button trigger modal insert -->
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#insert">
              Insert
            </button>
            
            <!-- Button trigger modal edit -->
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#edit">
              Edit
            </button>

            <!-- Button trigger modal edit -->
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#delete">
              Delete
            </button>            

          </h1>
          
          <?php
             $this->load->view('dosen/v_insert');     
          ?>

          <?php
             $this->load->view('dosen/v_edit');     
          ?>          
          
          <?php
             //$this->load->view('home/tampilan_delete');     
          ?>

        </section>

        <!-- Main content -->
        <?php
          $this->load->view('dosen/v_tabel'); 
        ?>

      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2015.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo HTTP_JS_PATH; ?>jquery.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo HTTP_JS_PATH; ?>bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo HTTP_PLUGINS_PATH; ?>datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo HTTP_PLUGINS_PATH; ?>datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo HTTP_PLUGINS_PATH; ?>slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo HTTP_PLUGINS_PATH; ?>fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo HTTP_JS_PATH; ?>app.min.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

    <!--jquery insert-->
    
    <script>
      $(document).ready(function() {
        $(".panel-heading").click(function(){
          $(".panel-body").slideToggle('slow');
        });
      });
    </script>
    
    <!--insert new materi-->
    <script>
    $(document).ready(function() {
      var x=1;

      $(".glyphicon-plus-sign").click(function(){
        x++;
        if (x<=12) {
          var id_form="#materi"+(x-1);
          $(id_form).append("<div class='form-group' id='materi"+x+"'>"+
              "<label>Materi "+x+" : </label>"+            
              "<input type='text' name='materi[]' placeholder='Materi "+x+"' class='form-control'>"+              
              "<input type='date' name='datemateri[]' class='form-control' required='required'>"+
            "</div>");
      }
      });

      $("p").on("click",".glyphicon-remove-sign", function(){
          if (x!=1) {
            var id="#materi"+x;
            $(id).remove();
            x--;
          }
        });

    });
    </script>

    <!--gunakan AJAX untuk menampilkan tabel-->
    <script>
      $(document).ready(function() {
        //jika button tampilkan tabel edit ditekan
        $("#tabel_edit").click(function(){
          
          //dapatkan data edit dari namenya
          var id_matkul=$("[name=pilih_matkul_edit]").val();
          var periode=$("[name=datesap_edit]").val();
          var semester=$("[name=semester_edit]").val();

          //lakuakn proses ajax untuk menampilkan tabel
          $.ajax({
              url: "<?php echo site_url('home_edit_control'); ?>",
              type: 'post',
              data: {id_matkul:id_matkul,periode:periode,semester:semester},
              dataType: "json",
              success: function (data) {
                alert($.type(data));
              }
            });

        });
      });
    </script>

  </body>
</html>
