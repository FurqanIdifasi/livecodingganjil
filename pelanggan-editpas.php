<?php
  include('templates/header.php');
  include('templates/sidebar.php');


  $id = $_SESSION['user_id'];
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Karyawan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data</h3>
     <!--      <a href="karyawan-tambah.php" class="btn btn-sm btn-danger float-right">Tambah</a> -->
        </div>
        <div class="card-body">
        <table class="table table-bordered" id="example2">
          <thead>
            <tr>
              <th>Nik</th>
              <th>Nama</th>
              <th>No Hp</th>
              <th>Status</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include('koneksi.php'); //memanggil file koneksi
              $datas = mysqli_query($koneksi, "select * from karyawan where id ='$id'") or die(mysqli_error($koneksi));

              $no = 1;//untuk pengurutan nomor

              //melakukan perulangan
              while($row = mysqli_fetch_assoc($datas)) {
            ?>  

          <tr>
            <td ><?= $no; ?></td>
            <td><?= $row['nik']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['no_hp']; ?></td>
            <td><?= $row['jabatan']; ?></td>
            <td><img src="assets/gambar/<?= $row['foto'];?>" width="100"></td>
            <td style="text-align: center;">
                <a href="pelanggan-edit-solo.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger">Edit</a>
            
            </td>
          </tr>

            <?php $no++; } ?>
          </tbody>
        </table>
      </div>
    </div>
        <!-- /.card-body -->
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include('templates/footer.php');
  ?>

  <?php
   if ((isset($_GET['status'])) && ($_GET['status'] == 'hapus')) {
      $id = $_GET['id']; //menampung id
      //query hapus
      $datas = mysqli_query($koneksi, "delete from karyawan where id ='$id'") or die(mysqli_error($koneksi));
      //alert dan redirect ke index.php
      echo "<script>alert('data berhasil dihapus.');window.location='karyawan-index.php';</script>";
   }
  ?>

