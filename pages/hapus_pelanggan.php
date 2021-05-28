<?php
include "../conf/conn.php";
$id = $_GET['id'];
$query = ("DELETE FROM pelanggan WHERE id_pelanggan ='$id'");
$kon = koneksi();
if (!mysqli_query($kon, $query)) {
    echo 'Data Tidak Berhasil Di Hapus';
} else {
    echo '<script>alert("Data Berhasil Dihapus !!!");
    window.location.href="../index.php?page=data_pelanggan"</script>';
}
