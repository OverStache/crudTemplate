<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Pelanggan
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">Tambah Pelanggan</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="pages/tambah_pelanggan_proses.php">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Berat Cucian</label>
                                <input type="text" name="kilogram" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>No. Hp</label>
                                <input type="text" name="telp" class="form-control" required>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->