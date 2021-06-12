<ul class="sidebar-menu" data-widget="tree">

  <li id="clock" class="header"><?php print date('H:i:s'); ?></li>

  <li class="header"><?php echo waktu(); ?></li>

  <li class="<?php if ($title == 'Dashboard Admin') echo "treeview active";  ?>">
    <a href="<?php echo base_url('admin'); ?>">
      <i class="fa fa-dashboard"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="<?php if ($title == 'Data Buku') echo "treeview active";  ?>">
    <a href="<?php echo base_url('data_buku'); ?>">
      <i class="fa fa-book"></i>
      <span>Data Buku</span>
    </a>
  </li>

  <li class="<?php if ($title == 'Data User') echo "treeview active";  ?>">
    <a href="<?php echo base_url('data_user'); ?>">
      <i class="fa fa-user"></i>
      <span>Data User</span>
    </a>
  </li>

  <li class="<?php if ($title == 'Data Member') echo "treeview active";  ?>">
    <a href="<?php echo base_url('data_member'); ?>">
      <i class="fa fa-users"></i>
      <span>Data Member</span>
    </a>
  </li>

  <li class="<?php if ($title == 'Laporan') echo "treeview active";  ?>">
    <a href="<?php echo base_url('laporan'); ?>">
      <i class="fa fa-file"></i>
      <span>Laporan</span>
    </a>
  </li>

  <li class="<?php if ($title == 'Logout') echo "treeview active";  ?>">
    <a href="<?php echo base_url('admin/logout'); ?>" onclick="return confirm('yakin mau keluar?');">
      <i class="fa fa-sign-out"></i>
      <span>Logout</span>
    </a>
  </li>

</ul>
</section>
<!-- /.sidebar -->
</aside>