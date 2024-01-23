<?php
include "_header.php";
?>

<body>
    <div class="app-header st1">
        <div class="tf-container">
            <div class="tf-topbar d-flex justify-content-center align-items-center">
                <a href="#" class="back-btn"><i class="icon-left white_color"></i></a>
                <h3 class="white_color">Selesai & Bayar</h3>
            </div>
        </div>
    </div>
    <?php
    $id = $_GET['id'];
    $transaksi = mysqli_query($koneksi, "SELECT * FROM vw_transaksi where id='$id'");
    while ($d = mysqli_fetch_array($transaksi)) {
    ?>
        <div class="card-secton transfer-section">
            <div class="tf-container">
                <div class="tf-balance-box">
                    <div class="d-flex justify-content-between align-items-center">
                        <p>Biaya Layanan</p>
                        <h3>Rp <?php echo $d['harga']; ?></h3>
                    </div>
                    <div class="tf-spacing-16"></div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="inner-left d-flex justify-content-between align-items-center">
                            <img src="../images/pesanan/<?php echo $d['foto_barang']; ?>" alt="images">
                            <p class="fw_7 on_surface_color"><?php echo $d['nama_barang']; ?></p>
                        </div>
                        <i class="icon-down on_surface_color"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="tf-spacing-20"></div>
        <div class="transfer-content">
            <form class="tf-form" name="autoSumForm" method="post" action="../query/proses_bayar.php" enctype="multipart/form-data">
                <div class="tf-container">
                    <div class="group-input input-field input-money">
                        <label for="">Dibayar</label>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="hidden" name="harga" value="<?php echo $d['harga']; ?>" readonly class="search-field value_input st1" onFocus="startCalc();" onBlur="stopCalc();" />
                        <input type="text" name="dibayar" value="<?php echo $d['harga']; ?>" required class="search-field value_input st1" onFocus="startCalc();" onBlur="stopCalc();" />
                    </div>
                    <div class="group-input">
                        <label>Kembalian</label>
                        <input type="text" name="kembalian" />
                    </div>
                </div>

                <div class="bottom-navigation-bar bottom-btn-fixed">
                    <div class="tf-container">
                        <button type="submit" name="simpan" class="tf-btn accent large">Simpan</button>
                    </div>
                </div>
            </form>
            <script>
                function startCalc() {

                    interval = setInterval("calc()", 1);
                }

                function calc() {

                    one = document.autoSumForm.harga.value;

                    two = document.autoSumForm.dibayar.value;


                    document.autoSumForm.kembalian.value = (two * 1) - (one * 1);
                }

                function stopCalc() {

                    clearInterval(interval);
                }
            </script>

        </div>
    <?php
    }
    include "_script.php"; ?>

</body>


<!-- Mirrored from themesflat.co/html/alipay/alipay-app-pwa/17_transfer-wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2024 07:46:11 GMT -->

</html>