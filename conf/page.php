<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  echo $page;
  switch ($page) {
      // beranda
    case 'data_pelanggan':
      include 'pages/data_pelanggan.php';
      break;
    case 'tambah_pelanggan';
      include 'pages/tambah_pelanggan.php';
      break;
    case 'ubah_pelanggan';
      include 'pages/ubah_pelanggan.php';
      break;
    case 'tes';
      include 'pages/tes.php';
      break;
  }
} else {
  include "pages/beranda.php";
}
