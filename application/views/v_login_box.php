<div class="login-box">
  <div class="login-logo">
    <b>LOGIN</b> USER
  </div><!-- /.login-logo -->
  <div class="login-box-body">
    <form action="<?php echo site_url('c_login/proses_login'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required="required"/>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required="required"/>
      </div>
      <div class="row">
        <div class="col-xs-8">                        
        </div><!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
        </div><!-- /.col -->
      </div>
    </form>

    <a href="#">Lupa password</a><a href="">
    <p class="login-box-msg">Sign in</p></a>
    <p class="login-box-msg"><?php echo $this->session->flashdata('gagal_login'); ?></p>
  </div><!-- /.login-box-body -->
</div><!-- /.login-box -->