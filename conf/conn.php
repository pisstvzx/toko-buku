<?php

$koneksi = mysqli_connect("localhost", "root", "", "toko-buku1");

if ($koneksi) {
  // echo "koneksi berhasil";
} else {
  echo "Koneksi gagal: " . mysqli_connect_error();
}
