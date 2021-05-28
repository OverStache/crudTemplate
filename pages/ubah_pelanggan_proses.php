<?php
include "../conf/conn.php";
if ($_POST) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kilogram = $_POST['kilogram'];
    $telp = $_POST['telp'];
    $query = ("UPDATE pelanggan SET nama='$nama',harga='$harga',kilogram='$kilogram' WHERE id_pelanggan ='$id'");
    $kon = koneksi();
    if (!mysqli_query($kon, $query)) {
        echo mysqli_error($kon);
    } else {
        echo '<script>alert("Data Berhasil Diubah !!!");
        window.location.href="../index.php?page=data_pelanggan"</script>';
    }
}
