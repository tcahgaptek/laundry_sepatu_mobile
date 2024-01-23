<?php
include "db.php";
$id = $_POST['id'];
$harga = $_POST['harga'];
$dibayar = $_POST['dibayar'];
$kembalian = $_POST['kembalian'];
date_default_timezone_set('Asia/Jakarta');
$waktu = date("Y-m-d H:i:s");
$update = "UPDATE tb_transaksi SET status = 'Lunas', tgl_bayar='$waktu', tgl_selesai='$waktu' WHERE id = $id;";
$tambah = "INSERT INTO tb_kas VALUES (NULL, '$id', '$harga', '$dibayar', '$kembalian', '$waktu');";
mysqli_query($koneksi, $update);
mysqli_query($koneksi, $tambah);
// mengalihkan halaman kembali ke index.php
header("Location: ../toko/index.php?pesan=berhasil");
