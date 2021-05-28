<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Pelanggan
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">Data Pelanggan</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <a href="index.php?page=tambah_pelanggan" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i>
              Tambah Pelanggan</a>
          </div>
          <div class="box-body table-responsive">
            <table id="pelanggan" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Harga</th>
                  <th>Berat Cucian</th>
                  <th>No. Telepon</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $kon = koneksi();
                $link = 'SELECT * FROM pelanggan ORDER BY id_pelanggan ASC';
                $query = mysqli_query($kon, $link);
                while ($row = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
                    <td><?php echo $row['kilogram']; ?></td>
                    <td><?php echo $row['telp']; ?></td>
                    <td>
                      <a href="index.php?page=ubah_pelanggan&id=<?= $row['id_pelanggan']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="javascript:hapus(<?= $row['id_pelanggan']; ?>)" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                  </tr>
                <?php
                }
                tutupkoneksi($kon);
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#mahasiswa').DataTable();
  });

  function hapus(id) {
    var c = confirm('Apakah Yakin Anda Ingin Menghapus Data Ini?');
    if (c) {
      location.href = 'pages/hapus_pelanggan.php?id=' + id;
    }
  }
</script>