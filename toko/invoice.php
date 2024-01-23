<html>

<?php
include "../query/db.php";
$id = $_GET['id'];
$toko = mysqli_query($koneksi, "SELECT * FROM tb_user where id='1'");
$kas = mysqli_query($koneksi, "SELECT * FROM vw_kas where id_transaksi='$id'");
?>

<head>
    <title>Faktur Pembayaran</title>
    <style>
        #tabel {
            font-size: 15px;
            border-collapse: collapse;
        }

        #tabel td {
            padding-left: 5px;
            border: 1px solid black;
        }
    </style>
</head>

<body style='font-family:tahoma; font-size:8pt;'>
    <center>
        <table style='width:350px; font-size:16pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <td width='70%' align='CENTER' vertical-align:top'><span style='color:black;'>
                    <?php
                    while ($s = mysqli_fetch_array($toko)) {
                    ?>
                        <b><?php echo $s['nama']; ?></b></br><?php echo $s['alamat']; ?></span></br>

            <?php } ?>
            <?php
            while ($d = mysqli_fetch_array($kas)) {
            ?>
                <span style='font-size:12pt'>No. : 000<?php echo $d['id']; ?>, Waktu : <?php echo $d['tgl_transaksi']; ?></span></br>
            </td>
        </table>
        <style>
            hr {
                display: block;
                margin-top: 0.5em;
                margin-bottom: 0.5em;
                margin-left: auto;
                margin-right: auto;
                border-style: inset;
                border-width: 1px;
            }
        </style>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <table cellspacing='0' cellpadding='0' style='width:350px; font-size:12pt; font-family:calibri;  border-collapse: collapse;' border='0'>

            <tr align='center'>
                <td width='10%'>Nama</td>
                <td width='13%'>Harga</td>
                <td width='4%'>Qty</td>
                <td width='13%'>Total</td>
            <tr>
                <td colspan='5'>
                    <hr>
                </td>
            </tr>
            </tr>

            <tr>
                <td style='vertical-align:top'><?php echo $d['nama_barang']; ?></td>
                <td style='vertical-align:top; text-align:right; padding-right:10px'><?php echo $d['biaya']; ?></td>
                <td style='vertical-align:top; text-align:right; padding-right:10px'><?php echo $d['jumlah']; ?></td>
                <td style='vertical-align:top; text-align:right; padding-right:10px'><?php echo $d['biaya']; ?></td>
            </tr>

            <tr>
                <td colspan='4'>
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan='3'>
                    <div style='text-align:right; color:black'>Total : </div>
                </td>
                <td style='text-align:right; font-size:16pt; color:black'><?php echo $d['biaya']; ?></td>
            </tr>
            <tr>
                <td colspan='3'>
                    <div style='text-align:right; color:black'>Bayar : </div>
                </td>
                <td style='text-align:right; font-size:16pt; color:black'><?php echo $d['uang_bayar']; ?></td>
            </tr>
            <tr>
                <td colspan='3'>
                    <div style='text-align:right; color:black'>Kembalian : </div>
                </td>
                <td style='text-align:right; font-size:16pt; color:black'><?php echo $d['uang_kembali']; ?></td>
            </tr>
        </table>
    <?php } ?>
    <table style='width:350; font-size:12pt;' cellspacing='2'>
        <tr></br>
            <td align='center'>****** TERIMAKASIH ******</br></td>
        </tr>
    </table>
    </center>
    <script>
        window.print();
    </script>
</body>

</html>