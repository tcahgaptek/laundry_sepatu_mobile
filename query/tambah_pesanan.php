<?php
include "db.php";
if (isset($_POST['simpan'])) {
    $nama_barang =  $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];
    $kategori_sepatu = $_POST['kategori_sepatu'];
    $id_konsumen = $_POST['id_konsumen'];
    $foto = $_POST['foto'];
    $finisihing = $_POST['finisihing'];
    $catatan = $_POST['catatan'];
    $foto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['name'];
    date_default_timezone_set('Asia/Jakarta');
    $waktu = date("Y-m-d H:i:s");
    move_uploaded_file($_FILES['foto']['tmp_name'], "../images/" . $_FILES['foto']['name']);
    $tambah = "INSERT INTO tb_transaksi VALUES (null, '$nama_barang', '$kategori_sepatu','logo.png', '$jumlah', null , '$id_konsumen', '1', '$finisihing', '$waktu', null, null, '$status');";
    $query_run = mysqli_query($koneksi, $tambah);

    if ($query_run) {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: ../toko/index.php?pesan=berhasil");
    } else {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: ../toko/index.php?pesan=gagal_simpan&id=$id");
    }
}
