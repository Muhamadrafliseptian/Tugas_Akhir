<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
	if( password_verify($password, $data['password']) ) {

 
		// cek jika user login sebagai admin
		if($data['level']=="admin"){
	
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			// alihkan ke halaman dashboard admin
			header("location:admin/index.php");
	
		// cek jika user login sebagai pegawai
		}else if($data['level']=="juri"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "juri";
			// alihkan ke halaman dashboard pegawai
			header("location:juri/index.php");
	
		// cek jika user login sebagai pengurus
		}else if($data['level']=="peserta"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "peserta";
			// alihkan ke halaman dashboard pengurus
			header("location:aft_log.php");
	
		}else{
	
			// alihkan ke halaman login kembali
			header("location:index.php?pesan=gagal");
		}	
	}
}else{
	header("location:index.php?pesan=gagal");
}
 
?>