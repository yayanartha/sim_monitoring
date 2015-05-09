<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Log in User</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo HTTP_CSS_PATH; ?>font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo HTTP_CSS_PATH; ?>AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo HTTP_PLUGINS_PATH; ?>iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    
    <?php echo $this->load->view('v_login_box'); ?>

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo HTTP_JS_PATH; ?>jquery.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo HTTP_JS_PATH; ?>bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo HTTP_PLUGINS_PATH; ?>iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>