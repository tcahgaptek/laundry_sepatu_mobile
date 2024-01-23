<?php
// $koneksi = mysqli_connect("103.120.232.123", "bsdm_presensi", "AIBBG9DCFs", "bsdm_voting");
$koneksi = mysqli_connect("localhost", "root", "", "laundry");
// $koneksi = mysqli_connect("103.120.232.123", "bsdm_presensi", "AIBBG9DCFs", "bsdm_musycab");
// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
