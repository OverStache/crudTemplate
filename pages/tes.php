<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tes
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">Tes</li>
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