<?php
include "_header.php";
$username = $_SESSION['username'];
$user = mysqli_query($koneksi, "SELECT * FROM `tb_user` where username = '$username'");
?>

<body>
    <!-- preloade -->
    <!-- <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div> -->
    <!-- /preload -->
    <div class="app-header">
        <div class="tf-container">
            <div class="tf-topbar d-flex justify-content-between align-items-center">
                <a class="user-info d-flex justify-content-between align-items-center" href="../69_profile.html">
                    <img src="../images/logo.png" alt="image">

                    <div class="content">
                        <h4 class="white_color">Kampus Laundry</h4>
                        <p class="white_color fw_4">Spesialis laundry sepatu</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="card-secton">
        <div class="tf-container">
            <div class="tf-balance-box">
                <div class="balance">
                    <div class="row">
                        <div class="col-6 br-right">
                            <div class="inner-left">
                                <p>Selamat Datang</p>
                                <h3><?php
                                    while ($d = mysqli_fetch_array($user)) {
                                        echo "$d[nama]";
                                    }
                                    ?></h3>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="inner-right">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <div class="mt-5">
        <div class="tf-container">
            <div class="tf-title d-flex justify-content-between">
                <h3 class="fw_6">Riwayat laundry</h3>

            </div>
            <ul class="mt-1">
                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM `vw_transaksi` where username ='$username'");
                if (mysqli_num_rows($data) > 0) {
                    while ($s = mysqli_fetch_array($data)) {
                ?>
                        <li>
                            <a href="../toko/invoice?id=<?= $s['id'] ?>" class="list-profile outline">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.00011 1.25C4.62474 1.24954 4.2516 1.30757 3.89411 1.422C3.12543 1.65173 2.45208 2.12475 1.97529 2.76998C1.49849 3.4152 1.24401 4.19775 1.25011 5V10C1.25064 10.7292 1.54054 11.4284 2.05615 11.944C2.57176 12.4596 3.27092 12.7495 4.00011 12.75H8.00011C8.19902 12.75 8.38979 12.671 8.53044 12.5303C8.67109 12.3897 8.75011 12.1989 8.75011 12V5C8.74879 4.00585 8.35327 3.05279 7.6503 2.34981C6.94732 1.64684 5.99426 1.25133 5.00011 1.25Z" fill="#DA9B00" />
                                    <path d="M22.75 6.00002V20C22.7503 20.3612 22.6793 20.7189 22.5412 21.0527C22.4031 21.3865 22.2006 21.6897 21.9451 21.9452C21.6897 22.2006 21.3865 22.4031 21.0527 22.5412C20.7189 22.6793 20.3612 22.7503 20 22.75H10C9.6388 22.7503 9.28108 22.6793 8.94732 22.5412C8.61356 22.4031 8.31029 22.2006 8.05488 21.9452C7.79947 21.6897 7.59691 21.3865 7.45881 21.0527C7.3207 20.7189 7.24975 20.3612 7.25001 20V4.25002C7.24852 3.54389 6.99799 2.86092 6.54253 2.32131C6.08707 1.78171 5.45586 1.42006 4.76001 1.30002C4.83454 1.26345 4.91708 1.24626 5.00001 1.25002H18C19.2595 1.25108 20.467 1.75186 21.3576 2.64243C22.2482 3.533 22.749 4.74057 22.75 6.00002Z" fill="#FECC0E" />
                                    <path d="M15 8.75H12C11.8011 8.75 11.6103 8.67098 11.4697 8.53033C11.329 8.38968 11.25 8.19891 11.25 8C11.25 7.80109 11.329 7.61032 11.4697 7.46967C11.6103 7.32902 11.8011 7.25 12 7.25H15C15.1989 7.25 15.3897 7.32902 15.5303 7.46967C15.671 7.61032 15.75 7.80109 15.75 8C15.75 8.19891 15.671 8.38968 15.5303 8.53033C15.3897 8.67098 15.1989 8.75 15 8.75Z" fill="white" />
                                    <path d="M18 11.75H12C11.8011 11.75 11.6103 11.671 11.4697 11.5303C11.329 11.3897 11.25 11.1989 11.25 11C11.25 10.8011 11.329 10.6103 11.4697 10.4697C11.6103 10.329 11.8011 10.25 12 10.25H18C18.1989 10.25 18.3897 10.329 18.5303 10.4697C18.671 10.6103 18.75 10.8011 18.75 11C18.75 11.1989 18.671 11.3897 18.5303 11.5303C18.3897 11.671 18.1989 11.75 18 11.75Z" fill="white" />
                                    <path d="M18 14.75H12C11.8011 14.75 11.6103 14.671 11.4697 14.5303C11.329 14.3897 11.25 14.1989 11.25 14C11.25 13.8011 11.329 13.6103 11.4697 13.4697C11.6103 13.329 11.8011 13.25 12 13.25H18C18.1989 13.25 18.3897 13.329 18.5303 13.4697C18.671 13.6103 18.75 13.8011 18.75 14C18.75 14.1989 18.671 14.3897 18.5303 14.5303C18.3897 14.671 18.1989 14.75 18 14.75Z" fill="white" />
                                    <path d="M18 17.75H12C11.8011 17.75 11.6103 17.671 11.4697 17.5303C11.329 17.3897 11.25 17.1989 11.25 17C11.25 16.8011 11.329 16.6103 11.4697 16.4697C11.6103 16.329 11.8011 16.25 12 16.25H18C18.1989 16.25 18.3897 16.329 18.5303 16.4697C18.671 16.6103 18.75 16.8011 18.75 17C18.75 17.1989 18.671 17.3897 18.5303 17.5303C18.3897 17.671 18.1989 17.75 18 17.75Z" fill="white" />
                                </svg>
                                <h4><?= $s['nama_barang'] ?></h4>
                                <p><?= $s['tgl_masuk'] ?></p>
                                <span><?= $s['status'] ?><i class="icon-right"></i></span>
                            </a>
                        </li>
                <?php }
                } else {
                    echo "Tidak ada riwayat laundry";
                }
                ?>
            </ul>


        </div>
    </div>
    </div>

    <?php include "_menu.php";
    include "_script.php"; ?>

</body>

</html>