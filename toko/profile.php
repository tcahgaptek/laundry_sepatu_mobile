<?php
include "_header.php";
$user = mysqli_query($koneksi, "SELECT * FROM tb_user where id=1");
while ($d = mysqli_fetch_array($user)) {

?>

    <body class="bg_surface_color">
        <!-- /preload -->
        <div class="header mb-1 is-fixed">
            <div class="tf-container">
                <div class="tf-statusbar d-flex justify-content-center align-items-center">
                    <a href="#" class="back-btn"> <i class="icon-left"></i> </a>
                    <h3>Profil</h3>
                </div>
            </div>
        </div>
        <div id="app-wrap">
            <a class="box-profile mt-1" href="70_profile-detail.html">
                <div class="inner d-flex align-items-center">
                    <div class="box-avatar">
                        <img src="../images/pesanan/<?= $d['foto'] ?>" alt="image">
                        <span class="icon-camera-to-take-photos"></span>
                    </div>
                    <div class="info">
                        <h2 class="fw_8"><?= $d['nama'] ?></h2>
                        <p><?= $d['kontak'] ?><i class="icon-copy1"></i></p>
                    </div>
                </div>
                <span><i class="icon-right"></i></span>

            </a>
            <div class="mt-1 box-settings-profile style1">
                <div class="box-card-service mt-5">
                    <div class="tf-container">
                        <div class="tf-spacing-12"></div>
                        <ul class="list-card-info">
                            <li>Nama <span><?= $d['nama'] ?></span> </li>
                            <li>Alamat <span><?= $d['alamat'] ?></span> </li>
                            <li>Kontak <span><?= $d['kontak'] ?></span> </li>
                            <li>Username <span><?= $d['username'] ?></span> </li>
                            <li>Password<span>***********</span> </li>
                            <li><a href="../query/logout.php" class="fw_6 critical_color"><strong>Keluar</strong></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <?php include "_menu.php";
        include "_script.php"; ?>

    </body>
<?php
}
?>

<!-- Mirrored from themesflat.co/html/alipay/alipay-app-pwa/69_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2024 07:45:15 GMT -->

</html>