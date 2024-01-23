<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'db.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from tb_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['role'] == "toko") {

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "toko";
		// alihkan ke halaman dashboard admin
		header("location:../toko");

		// cek jika user login sebagai pegawai
	} else if ($data['role'] == "konsumen") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "konsumen";
		// alihkan ke halaman dashboard pegawai
		header("location:../konsumen");

		// cek jika user login sebagai pengurus
	} else if ($data['role'] == "pengurus") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		// alihkan ke halaman dashboard pengurus
		header("location:halaman_pengurus.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:../login.php?pesan=gagal");
	}
} else {
	header("location:../login.php?pesan=gagal");
}
