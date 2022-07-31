  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-dark">
    <!-- Brand Logo -->
    <div class="brand-link text-center" style="border-color: transparent;">
      <span class="brand-text font-weight-light"> <img src="assets/gambar/logo-telkom.png" style="width: 30px;">  TELKOM AKSES</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex "  style="border-color: #fff;">
        <div class="info">
          <a href="#" class="d-block text-white" style="font-size: 13px;">Selamat datang <?= $_SESSION['nama']; ?> - <?= $_SESSION['nik']; ?> - <?= $_SESSION['hak_akses']; ?> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link text-white">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

           <?php if($_SESSION['hak_akses'] == 'admin' || $_SESSION['hak_akses'] == 'pelanggan'|| $_SESSION['hak_akses'] == 'teknisi') { ?>
             <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Pengaturan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview " style="display: none;">
              <li class="nav-item">

                <?php if ($_SESSION['hak_akses'] == 'admin') { ?>
                  
 

               <?php } else if ($_SESSION['hak_akses'] == 'pelanggan' || $_SESSION['hak_akses'] == 'teknisi'  ) { ?>
                  
            <a href="pelanggan-editpas.php" class="nav-link ">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Ganti Sandi
              </p>
            </a>

               <?php } ?>

          </li>

          <?php } ?>


           <?php if($_SESSION['hak_akses'] == 'admin' ) { ?>

          <li class="nav-item">
            <a href="karyawan-index.php" class="nav-link ">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Karyawan
              </p>
            </a>
          </li>
            </ul>
          </li> 

         <?php } ?>

  
</ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>