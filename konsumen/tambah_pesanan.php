<?php
include "_header.php";
$username = $_SESSION['username'];
$user = mysqli_query($koneksi, "SELECT * FROM `tb_user` where username = '$username'");
?>

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
                <h3 class="white_color">Tambah Pesanan</h3>
            </div>
        </div>
    </div>
    <div class="card-secton topup-content">
        <form class="forms-sample" method="post" action="../query/tambah_pesanan_konsumen.php" enctype="multipart/form-data">
            <div class="tf-container">
                <div class="tf-balance-box">
                    <!-- <div class="d-flex justify-content-between align-items-center">
                    <p>Your Balance:</p>
                    <h3>$3.466,9</h3>
                </div> -->
                    <div class="tf-spacing-16"></div>

                    <div class="tf-form">
                        <div class="group-input input-field input-money">
                            <label for="">Merk/Jenis Sepatu</label>
                            <input name="id_konsumen" type="hidden" value="<?php
                                                                            while ($d = mysqli_fetch_array($user)) {
                                                                                echo "$d[id]";
                                                                            }
                                                                            ?>">
                            <input name="nama_barang" type="text" required class="value_input st1">
                        </div>
                    </div>
                    <div class="tf-form">
                        <div class="group-input input-field input-money">
                            <label for="">Kategori Sepatu</label>
                            <select name="kategori_sepatu" class="box-sl-profile form-select">
                                <option></option>
                                <?php
                                $data_status = mysqli_query($koneksi, "SELECT * FROM `tb_kategori`");
                                while ($s = mysqli_fetch_array($data_status)) {
                                ?>

                                    <option value="<?php echo $s['id']; ?>"><?php echo $s['kategori']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="tf-form">
                        <div class="group-input input-field input-money">
                            <label for="">Qty</label>
                            <input name="jumlah" type="number" required class="value_input st1">
                            <input type="hidden" class="form-control" id="exampleInputEmail3" name="status" value="proses">
                        </div>
                    </div>
                    <div class="tf-form">
                        <div class="group-input input-field input-money">
                            <label for="">Pengambilan</label>
                            <select name="finisihing" class="box-sl-profile form-select">
                                <option></option>
                                <option value="diambil">diambil</option>
                                <option value="diantar">diantar</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="tf-form">
                        <div class="group-input input-field input-money">
                            <label for="">Foto</label>
                            <input type="file" class="form-control" id="exampleInputEmail3" name="foto">

                        </div>
                    </div> -->

                </div>

            </div>
            <div class="bottom-navigation-bar">
                <div class="tf-container">
                    <button type="submit" name="simpan" class="tf-btn accent large">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    <?php
    include "_script.php"; ?>

</body>


<!-- Mirrored from themesflat.co/html/alipay/alipay-app-pwa/29_topup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2024 07:45:18 GMT -->

</html>