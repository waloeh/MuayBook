<header class="main-header">
  <!-- Logo -->
  <a href="" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>B</b><b>U</b><b>K</b><b>U</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>PENCARI</b> _ BUKU</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url('/assets/uploads/users/' . $dataUser['gambar']); ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $this->session->userdata('username'); ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo base_url('/assets/uploads/users/' . $dataUser['gambar']); ?>" class="img-circle" alt="User Image">
              <p>
                <?php echo $this->session->userdata('username'); ?>
                <small><?php echo $this->session->userdata('username'); ?></small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo base_url('admin/edit'); ?>" class="btn btn-primary btn-flat">Settings</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url('admin/logout'); ?>" class="btn btn-danger btn-flat" onclick="return confirm('yakin mau keluar?');">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('/assets/uploads/users/' . $dataUser['gambar']); ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">

        <p><?php echo $this->session->userdata('username'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->