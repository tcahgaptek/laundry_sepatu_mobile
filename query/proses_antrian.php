<?php
include "db.php";
$id = $_GET['id'];
$query = "UPDATE tb_transaksi SET status = 'Selesai' WHERE id = $id;";
mysqli_query($koneksi, $query);
// mengalihkan halaman kembali ke index.php
header("Location: ../toko/index.php?pesan=berhasil");
