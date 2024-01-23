<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo '<script>alert("Gagal Silahkan coba lagi")</script>';
    } else if ($_GET['pesan'] == "logout") {
        echo '<script>alert("Anda telah berhasil logout")</script>';
    } else if ($_GET['pesan'] == "belum_login") {
        echo '<script>alert("Silahkan login dulu")</script>';
    } else if ($_GET['pesan'] == "berhasil") {
        echo '<script>alert("Data berhasil disimpan")</script>';
    }
}
session_start();
if ($_SESSION['level'] == "") {
    header("location:../login.php?pesan=belum_login");
}
include "../query/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Campus Laundry</title>
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="../images/logo.png" />
    <!-- <link rel="apple-touch-icon-precomposed" href="../images/logo.png" /> -->
    <!-- Font -->
    <link rel="stylesheet" href="../fonts/fonts.css" />
    <!-- Icons -->
    <link rel="stylesheet" href="../fonts/icons-alipay.css">
    <link rel="stylesheet" href="../styles/bootstrap.css">
    <link rel="stylesheet" href="../styles/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/styles.css" />
    <link rel="manifest" href="../_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <!-- <link rel="apple-touch-icon" sizes="192x192" href="../app/icons/icon-192x192.png"> -->
</head>