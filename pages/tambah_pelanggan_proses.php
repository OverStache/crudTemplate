<?php
include "../conf/conn.php";

if ($_POST) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kilogram = $_POST['kilogram'];
    $telp = $_POST['telp'];
    $query = "INSERT INTO pelanggan VALUES (NULL, '$nama', '$harga', '$kilogram','$telp')";
    $kon = koneksi();
    if (!mysqli_query($kon, $query)) {
        die(mysqli_error($kon));
    } else {
        echo '<script>alert("Data Berhasil Ditambahkan !!!");
        window.location.href="../index.php?page=data_pelanggan"</script>';
    }
} else {
    echo 'error';
}
