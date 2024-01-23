<?php
include "./query/db.php";
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo '<script>alert("Gagal Silahkan coba lagi")</script>';
    } else if ($_GET['pesan'] == "logout") {
        echo '<script>alert("Anda telah berhasil logout")</script>';
    } else if ($_GET['pesan'] == "belum_login") {
        echo '<script>alert("Silahkan login dulu")</script>';
    }
}
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
    <link rel="shortcut icon" href="images/logo.png" />
    <!-- <link rel="apple-touch-icon-precomposed" href="images/logo.png" /> -->
    <!-- Font -->
    <link rel="stylesheet" href="fonts/fonts.css" />
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/icons-alipay.css">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <!-- <link rel="apple-touch-icon" sizes="192x192" href="app/icons/icon-192x192.png"> -->
</head>

<body>
    <!-- preloade -->
    <!-- <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div> -->
    <!-- /preload -->
    <div class="app-header st1">
        <div class="tf-container">
            <div class="tf-topbar d-flex justify-content-center align-items-center">
                <a href="index" class="back-btn"><i class="icon-left white_color"></i></a>
                <h3 class="white_color">Daftar Member</h3>
            </div>
        </div>
    </div>
    <div class="card-secton topup-content">
        <form class="forms-sample" method="post" action="query/daftar.php" enctype="multipart/form-data">
            <div class="tf-container">
                <div class="tf-balance-box">
                    <!-- <div class="d-flex justify-content-between align-items-center">
                    <p>Your Balance:</p>
                    <h3>$3.466,9</h3>
                </div> -->
                    <div class="tf-spacing-16"></div>

                    <div class="tf-form">
                        <div class="group-input input-field input-money">
                            <label for="">Nama Lengkap</label>
                            <input name="nama" type="text" required class="value_input st1">
                        </div>
                    </div>
                    <div class="tf-form">
                        <div class="group-input input-field input-money">
                            <label for="">Alamat</label>
                            <input name="alamat" type="text" required class="value_input st1">
                        </div>
                    </div>
                    <div class="tf-form">
                        <div class="group-input input-field input-money">
                            <label for="">Kontak</label>
                            <input name="kontak" type="text" required class="value_input st1">
                        </div>
                    </div>
                    <div class="tf-form">
                        <div class="group-input auth-pass-input last">
                            <label>Password</label>
                            <input type="password" class="password-input" name="password">
                            <a class="icon-eye password-addon" id="password-addon"></a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="bottom-navigation-bar">
                <div class="tf-container">
                    <button type="submit" name="simpan" class="tf-btn accent large">Daftar</button>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/password-addon.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>
    <script type="text/javascript" src="javascript/init.js"></script>
</body>


<!-- Mirrored from themesflat.co/html/alipay/alipay-app-pwa/29_topup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2024 07:45:18 GMT -->

</html>