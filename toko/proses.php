<?php
include "_header.php";
?>

<body>

    <div class="app-header st1">
        <div class="tf-container">
            <div class="tf-topbar d-flex justify-content-center align-items-center">
                <a href="index" class="back-btn"><i class="icon-left white_color"></i></a>
                <h3 class="white_color">Antrian Cucian</h3>
            </div>
        </div>
    </div>
    <div class="card-secton topup-content">
        <div id="app-wrap">
            <div class="bill-content">
                <div class="tf-container">
                    <div class="box-search mt-3">
                        <div class="input-field">
                            <span class="icon-search"></span>
                            <input required class="search-field value_input" placeholder="Cari" type="text">
                            <span class="icon-clear"></span>
                        </div>
                        <span class="icon-search"></span>
                    </div>
                    <!-- <h3 class="fw_6 d-flex justify-content-between mt-3">Saved Invoice <a href="#">View All</a></h3> -->
                    <ul class="mt-3 mb-5">
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM `vw_transaksi` where status ='proses'");
                        if (mysqli_num_rows($data) > 0) {
                            while ($s = mysqli_fetch_array($data)) {
                        ?>
                                <li class="list-card-invoice">
                                    <div class="logo">
                                        <img src="../images/pesanan/<?php echo $s['foto_barang']; ?>">
                                    </div>
                                    <div class="content-right">
                                        <h4><a href="proses_cucian.php?id=<?php echo $s['id']; ?>"><?php echo $s['nama_barang']; ?></h4>
                                        <p><?php echo $s['tgl_masuk']; ?>
                                        </p></a>
                                    </div>
                                    <i class="icon-right"></i>
                                </li>
                        <?php }
                        } else {
                            echo "Tidak ada antrian cuci";
                        }

                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "_script.php";
    ?>
</body>

</html>