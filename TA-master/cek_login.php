<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($con,"select * from user where username='$username'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
	if( password_verify($password, $data['password']) ) {
		
		
		if($data['level']=="peserta"){
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