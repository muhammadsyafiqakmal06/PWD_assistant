<?php 
session_start();
 
include 'config.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
 
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
    // Mahasiswa
	if($data['level']=="mahasiswa"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "mahasiswa";
		header("location:halaman_mahasiswa.php");
 
    // TU
	}else if($data['level']=="TU"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "TU";
		header("location:halaman_tu.php");

    // Dosen
	}else if($data['level']=="dosen"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "dosen";
		header("location:halaman_dosen.php");
 
	}else{
 
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>