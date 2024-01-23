<?php
include "db.php";
if (isset($_POST['simpan'])) {
    $nama =  $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];
    $password = $_POST['password'];
    $tambah = "INSERT INTO tb_user VALUES (null, '$nama', '$alamat', '$kontak', null, null, 'logo.png', 'konsumen', (SELECT LEFT(UUID(), 20)), '$kontak', '$password');";
    $query_run = mysqli_query($koneksi, $tambah);

    if ($query_run) {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: ../login.php?pesan=berhasil");
    } else {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: ../daftar.php?pesan=gagal");
    }
}
