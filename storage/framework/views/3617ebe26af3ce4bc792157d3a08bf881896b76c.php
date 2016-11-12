 
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src=<?php echo e(asset("bower_components/AdminLTE/dist/img/avatar5.png")); ?> class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo e(Auth::user()->name); ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(Auth::user()->jabatan); ?></a>

        </div>
      </div>

      <!-- search form (Optional) -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?php echo e(url('/admin/test')); ?> "><i class="fa fa-list-alt"></i> <span>Barang Gudang</span></a></li>
        <li><a href="#"><i class="fa fa-list-alt"></i> <span>Barang Toko</span></a></li>
         <li><a href="#"><i class="fa fa-plus"></i> <span>Entry Penjualan</span></a></li>


      <?php if( Auth::user()->jabatan == 'Super Admin'): ?>

        <li class="active"> <a href="<?php echo e(url('admin/karyawan')); ?>"> <i class="fa fa-users" aria-hidden="true"></i>
          <span>Member</span></a></li>
 

        <?php endif; ?>

    
     
      

       
       <!--  <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
 -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>