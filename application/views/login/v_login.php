<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="<?php echo base_url(); ?>assets/img/muaybook.png" width="70" alt="">
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg"><?php echo $title; ?></p>
      <?php $this->load->view('layouts/notifikasi'); ?>
      <?php echo $this->session->flashdata('message'); ?>

      <?php echo form_open('login'); ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" maxlength="" minlength="" name="username" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" maxlength="" minlength="" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <!-- <div class="form-group has-feedback">
        <input type="password" class="form-control" maxlength="" minlength="" name="comfirm_password" placeholder="Comfirm Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div> -->
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-8">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <a href="<?php echo base_url('/') ?>">
            <button type="button" class="btn btn-success btn-block btn-flat">Home</button>
          </a>
        </div>
        <!-- /.col -->
      </div>
      </form>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->