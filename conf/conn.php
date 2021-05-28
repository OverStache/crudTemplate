<?php
function koneksi()
{
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $database = 'laundry';
    $conn = mysqli_connect($host, $user, $pass, $database);
    return $conn;
}
function tutupkoneksi($conn)
{
    mysqli_close($conn);
}
