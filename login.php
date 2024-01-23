<?php
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


<!-- Mirrored from themesflat.co/html/alipay/alipay-app-pwa/04_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2024 07:46:16 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Login</title>
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo.png" />
    <!-- Font -->
    <link rel="stylesheet" href="fonts/fonts.css" />
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/icons-alipay.css">
    <link rel="stylesheet" href="styles/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="192x192" href="app/icons/icon-192x192.png">


</head>

<body>
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div class="mt-7 login-section">
        <div class="tf-container">
            <form class="tf-form" method="post" action="./query/cek_login.php">
                <h1>Login</h1>
                <div class="group-input">
                    <label>Username</label>
                    <input type="text" name="username">
                </div>
                <div class="group-input auth-pass-input last">
                    <label>Password</label>
                    <input type="password" class="password-input" name="password">
                    <a class="icon-eye password-addon" id="password-addon"></a>
                </div>
                <a href="08_reset-password.html" class="auth-forgot-password mt-3">Forgot Password?</a>

                <button type="submit" class="tf-btn accent large">Log In</button>

            </form>
            <p class="mb-9 fw-3 text-center ">Belum punya akun? <a href="daftar" class="auth-link-rg">Daftar disini</a></p>
        </div>
    </div>





    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/password-addon.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>
    <script type="text/javascript" src="javascript/init.js"></script>


</body>


<!-- Mirrored from themesflat.co/html/alipay/alipay-app-pwa/04_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2024 07:46:21 GMT -->

</html>